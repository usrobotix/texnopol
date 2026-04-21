<?php

define('NO_KEEP_STATISTIC', true);
define('NO_AGENT_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
define('PUBLIC_AJAX_MODE', true);

require $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

use Bitrix\Main\Config\Option;
use Bitrix\Main\Mail\Mail;

function corpClientGenerateRequestId(): string
{
    try {
        return bin2hex(random_bytes(8));
    } catch (\Throwable $e) {
        return uniqid('corp_', true);
    }
}

function corpClientGetRequestId(): string
{
    return (string)($GLOBALS['corpClientRequestId'] ?? '-');
}

function corpClientRedactEmail(string $email): string
{
    $email = trim($email);
    $atPosition = strpos($email, '@');
    if ($email === '' || $atPosition === false || $atPosition === 0 || $atPosition === strlen($email) - 1) {
        return '[empty]';
    }

    [$local, $domain] = explode('@', $email, 2);
    $localMasked = mb_substr($local, 0, 1).str_repeat('*', max(mb_strlen($local) - 1, 0));

    return $localMasked.'@'.$domain;
}

function corpClientRedactPhone(string $phone): string
{
    $digits = preg_replace('/\D+/', '', $phone) ?: '';
    if ($digits === '') {
        return '[empty]';
    }

    $last4 = substr($digits, -4);
    return str_repeat('*', max(strlen($digits) - 4, 0)).$last4;
}

function corpClientSafeText(string $value): string
{
    $cleaned = preg_replace('/[\x00-\x1F\x7F]+/', ' ', $value);
    return trim((string)($cleaned ?? $value));
}

function corpClientLog(string $stage, array $context = []): void
{
    $documentRoot = (string)($_SERVER['DOCUMENT_ROOT'] ?? '');
    if ($documentRoot === '') {
        return;
    }

    $logDir = $documentRoot.'/local/logs';
    if (!is_dir($logDir) && !@mkdir($logDir, 0700, true) && !is_dir($logDir)) {
        return;
    }

    $logFile = $logDir.'/corp_client_form.log';
    $record = [
        'datetime' => date('c'),
        'request_id' => corpClientGetRequestId(),
        'stage' => $stage,
        'context' => $context,
    ];

    $encoded = json_encode($record, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if ($encoded === false) {
        $encoded = json_encode([
            'datetime' => date('c'),
            'request_id' => corpClientGetRequestId(),
            'stage' => $stage,
            'context' => '[encode_failed]',
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if ($encoded === false) {
            return;
        }
    }

    @file_put_contents($logFile, $encoded.PHP_EOL, FILE_APPEND | LOCK_EX);
}

function corpClientJsonResponse(array $payload, int $statusCode = 200): void
{
    if (!isset($payload['request_id'])) {
        $payload['request_id'] = corpClientGetRequestId();
    }

    if (!headers_sent()) {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=UTF-8');
    }

    echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    require $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_after.php';
    exit;
}

function corpClientLoadConfig(): array
{
    $configPath = $_SERVER['DOCUMENT_ROOT'].'/local/php_interface/corp_client_form.php';
    if (file_exists($configPath)) {
        $config = include $configPath;
        if (is_array($config)) {
            return $config;
        }
    }

    return [];
}

function corpClientNormalizePhone(string $phone): string
{
    $digits = preg_replace('/\D+/', '', $phone) ?: '';
    if ($digits === '') {
        return '';
    }

    if ($digits[0] === '8') {
        $digits = substr_replace($digits, '7', 0, 1);
    }

    if ($digits[0] !== '7') {
        $digits = '7'.$digits;
    }

    $digits = substr($digits, 0, 11);
    if (strlen($digits) !== 11) {
        return '';
    }

    return '+7 ('.substr($digits, 1, 3).') '.substr($digits, 4, 3).'-'.substr($digits, 7, 2).'-'.substr($digits, 9, 2);
}

$GLOBALS['corpClientRequestId'] = corpClientGenerateRequestId();

try {
    corpClientLog('start', [
        'uri' => (string)($_SERVER['REQUEST_URI'] ?? ''),
        'ip' => (string)($_SERVER['REMOTE_ADDR'] ?? ''),
        'ua' => (string)($_SERVER['HTTP_USER_AGENT'] ?? ''),
        'method' => (string)($_SERVER['REQUEST_METHOD'] ?? ''),
    ]);

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        corpClientLog('method_check', ['ok' => false]);
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Метод запроса не поддерживается.',
        ]);
    }

    corpClientLog('sessid_check', ['started' => true]);
    if (!check_bitrix_sessid()) {
        corpClientLog('sessid_check', ['ok' => false]);
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Сессия истекла. Обновите страницу и попробуйте снова.',
        ]);
    }
    corpClientLog('sessid_check', ['ok' => true]);

    corpClientLog('honeypot_check', ['started' => true]);
    if (!empty($_POST['honeypot'])) {
        corpClientLog('honeypot_check', ['ok' => false]);
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Ошибка проверки формы.',
        ]);
    }
    corpClientLog('honeypot_check', ['ok' => true]);

    $name = trim((string)($_POST['name'] ?? ''));
    $phone = trim((string)($_POST['phone'] ?? ''));
    $email = trim((string)($_POST['email'] ?? ''));
    $consent = (string)($_POST['consent'] ?? '');
    $sourceTitle = trim((string)($_POST['source_title'] ?? 'Стать клиентом'));
    $sourcePage = trim((string)($_POST['source_page'] ?? '/for-corporations/'));

    $name = corpClientSafeText(strip_tags($name));
    $sourceTitle = mb_substr(corpClientSafeText(strip_tags($sourceTitle)), 0, 255);
    $sourcePage = mb_substr(corpClientSafeText(strip_tags($sourcePage)), 0, 255);
    $normalizedPhone = corpClientNormalizePhone($phone);

    if ($name === '' || mb_strlen($name) > 255) {
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Укажите корректное имя.',
        ]);
    }
    $name = mb_substr($name, 0, 255);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Укажите корректный email.',
        ]);
    }

    if ($normalizedPhone === '') {
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Укажите телефон в формате +7 (999) 999-99-99.',
        ]);
    }

    if ($consent !== 'Y') {
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Необходимо согласие на обработку персональных данных.',
        ]);
    }

    corpClientLog('validation_ok', [
        'name_length' => mb_strlen($name),
        'email' => corpClientRedactEmail($email),
        'phone' => corpClientRedactPhone($normalizedPhone),
        'source_page' => $sourcePage,
    ]);

    $config = corpClientLoadConfig();
    $iblockId = (int)($config['IBLOCK_ID'] ?? 22);
    if ($iblockId <= 0) {
        $iblockId = 22;
    }

    corpClientLog('iblock_module_include', ['started' => true]);
    if (!\CModule::IncludeModule('iblock')) {
        corpClientLog('iblock_module_include', ['ok' => false]);
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Сервис временно недоступен.',
        ]);
    }
    corpClientLog('iblock_module_include', ['ok' => true]);

    $elementName = $sourceTitle !== '' ? $sourceTitle : 'Заявка корпоративного клиента';
    $elementName .= ' — '.$name;
    $elementName = mb_substr($elementName, 0, 255);

    $el = new \CIBlockElement();
    $elementId = $el->Add([
        'IBLOCK_ID' => $iblockId,
        'ACTIVE' => 'Y',
        'NAME' => $elementName,
        'PREVIEW_TEXT' => "Имя: {$name}\nТелефон: {$normalizedPhone}\nEmail: {$email}\nСтраница: {$sourcePage}",
        'PROPERTY_VALUES' => [
            'PHONE' => $normalizedPhone,
            'EMAIL' => $email,
        ],
    ]);

    corpClientLog('element_add_result', [
        'ok' => (bool)$elementId,
        'element_id' => $elementId ? (int)$elementId : null,
        'error' => $elementId ? null : (string)$el->LAST_ERROR,
    ]);

    if (!$elementId) {
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Не удалось сохранить заявку. Попробуйте позже.',
        ]);
    }

    $ownerEmail = trim((string)($config['OWNER_EMAIL'] ?? 'mt-work@yandex.ru'));
    $serverName = (string)Option::get('main', 'server_name', (string)($_SERVER['SERVER_NAME'] ?? 'localhost'));
    $defaultFrom = (string)Option::get('main', 'email_from', 'no-reply@'.$serverName);
    $ownerSubject = 'Новая заявка «Стать клиентом»';
    $userSubject = 'Заявка принята';

    $ownerMessage = "Получена новая заявка «{$sourceTitle}».\n\n"
        ."Имя: {$name}\n"
        ."Телефон: {$normalizedPhone}\n"
        ."Email: {$email}\n"
        ."Страница: {$sourcePage}\n"
        ."ID заявки: {$elementId}\n";

    $userMessage = "Здравствуйте, {$name}!\n\n"
        ."Спасибо за вашу заявку. Мы получили обращение и свяжемся с вами в ближайшее время.\n"
        ."Контактный телефон: {$normalizedPhone}\n"
        ."Email: {$email}\n\n"
        ."С уважением, команда Texnopol.";

    corpClientLog('before_mail_owner', [
        'from' => corpClientRedactEmail($defaultFrom),
        'to' => corpClientRedactEmail($ownerEmail),
        'subject' => $ownerSubject,
    ]);
    $ownerMailSent = Mail::send([
        'TO' => $ownerEmail,
        'FROM' => $defaultFrom,
        'SUBJECT' => $ownerSubject,
        'BODY' => $ownerMessage,
        'HEADER' => 'Content-Type: text/plain; charset=UTF-8',
    ]);
    corpClientLog('after_mail_owner', ['ok' => (bool)$ownerMailSent]);

    corpClientLog('before_mail_user', [
        'from' => corpClientRedactEmail($defaultFrom),
        'to' => corpClientRedactEmail($email),
        'subject' => $userSubject,
    ]);
    $userMailSent = Mail::send([
        'TO' => $email,
        'FROM' => $defaultFrom,
        'SUBJECT' => $userSubject,
        'BODY' => $userMessage,
        'HEADER' => 'Content-Type: text/plain; charset=UTF-8',
    ]);
    corpClientLog('after_mail_user', ['ok' => (bool)$userMailSent]);

    if (!$ownerMailSent || !$userMailSent) {
        corpClientLog('mail_send_failed', [
            'owner_mail_sent' => (bool)$ownerMailSent,
            'user_mail_sent' => (bool)$userMailSent,
        ]);
        corpClientJsonResponse([
            'success' => false,
            'error' => 'Заявка сохранена, но не удалось отправить email. Пожалуйста, свяжитесь с нами по телефону.',
        ]);
    }

    corpClientJsonResponse([
        'success' => true,
    ]);
} catch (\Throwable $e) {
    corpClientLog('exception', [
        'type' => get_class($e),
        'message' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine(),
    ]);

    corpClientJsonResponse([
        'success' => false,
        'error' => 'Внутренняя ошибка сервиса. Попробуйте ещё раз.',
    ]);
}
