<?php

define('NO_KEEP_STATISTIC', true);
define('NO_AGENT_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
define('PUBLIC_AJAX_MODE', true);

require $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

use Bitrix\Main\Config\Option;
use Bitrix\Main\Mail\Mail;

header('Content-Type: application/json; charset=UTF-8');

function corpClientJsonResponse(array $payload): void
{
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

function corpClientIsRateLimited(): bool
{
    if (!isset($_SESSION) || !is_array($_SESSION)) {
        return false;
    }

    $ip = (string)($_SERVER['REMOTE_ADDR'] ?? '');
    if ($ip === '') {
        return false;
    }

    $sessionKey = 'corp_client_last_submit_'.md5($ip);
    $currentTime = time();
    $minInterval = 10;
    $lastSubmitTime = (int)($_SESSION[$sessionKey] ?? 0);

    if ($lastSubmitTime > 0 && ($currentTime - $lastSubmitTime) < $minInterval) {
        return true;
    }

    $_SESSION[$sessionKey] = $currentTime;

    return false;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    corpClientJsonResponse([
        'success' => false,
        'error' => 'Метод запроса не поддерживается.',
    ]);
}

if (!check_bitrix_sessid()) {
    corpClientJsonResponse([
        'success' => false,
        'error' => 'Сессия истекла. Обновите страницу и попробуйте снова.',
    ]);
}

if (!empty($_POST['honeypot'])) {
    corpClientJsonResponse([
        'success' => false,
        'error' => 'Ошибка проверки формы.',
    ]);
}

$name = trim((string)($_POST['name'] ?? ''));
$phone = trim((string)($_POST['phone'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$consent = (string)($_POST['consent'] ?? '');
$sourceTitle = trim((string)($_POST['source_title'] ?? 'Стать клиентом'));
$sourcePage = trim((string)($_POST['source_page'] ?? '/for-corporations/'));

$name = strip_tags($name);
$sourceTitle = mb_substr(strip_tags($sourceTitle), 0, 255);
$sourcePage = mb_substr(strip_tags($sourcePage), 0, 255);
$normalizedPhone = corpClientNormalizePhone($phone);

if ($name === '' || mb_strlen($name) > 255) {
    corpClientJsonResponse([
        'success' => false,
        'error' => 'Укажите корректное имя.',
    ]);
}

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

if (corpClientIsRateLimited()) {
    corpClientJsonResponse([
        'success' => false,
        'error' => 'Слишком много попыток отправки. Попробуйте через несколько секунд.',
    ]);
}

$config = corpClientLoadConfig();
$iblockId = (int)($config['IBLOCK_ID'] ?? 22);
if ($iblockId <= 0) {
    $iblockId = 22;
}

if (!\CModule::IncludeModule('iblock')) {
    corpClientJsonResponse([
        'success' => false,
        'error' => 'Сервис временно недоступен.',
    ]);
}

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

if (!$elementId) {
    corpClientJsonResponse([
        'success' => false,
        'error' => 'Не удалось сохранить заявку. Попробуйте позже.',
    ]);
}

$ownerEmail = trim((string)($config['OWNER_EMAIL'] ?? 'mt-work@yandex.ru'));
$serverName = (string)Option::get('main', 'server_name', (string)($_SERVER['SERVER_NAME'] ?? 'localhost'));
$defaultFrom = (string)Option::get('main', 'email_from', 'no-reply@'.$serverName);

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

$ownerMailSent = Mail::send([
    'TO' => $ownerEmail,
    'FROM' => $defaultFrom,
    'SUBJECT' => 'Новая заявка «Стать клиентом»',
    'BODY' => $ownerMessage,
    'HEADER' => 'Content-Type: text/plain; charset=UTF-8',
]);

$userMailSent = Mail::send([
    'TO' => $email,
    'FROM' => $defaultFrom,
    'SUBJECT' => 'Заявка принята',
    'BODY' => $userMessage,
    'HEADER' => 'Content-Type: text/plain; charset=UTF-8',
]);

if (!$ownerMailSent || !$userMailSent) {
    corpClientJsonResponse([
        'success' => false,
        'error' => 'Заявка сохранена, но не удалось отправить email. Пожалуйста, свяжитесь с нами по телефону.',
    ]);
}

corpClientJsonResponse([
    'success' => true,
]);
