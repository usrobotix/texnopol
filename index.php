<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корпоративным клиентам");
?>

<div class="page-wrapper"> <!-- Родительский блок для стилизации -->
    <!-- Основной контейнер -->
    <div class="content-container info-page-container mb-48-px mb-lg-64-px" >
        <!-- Левая секция (3/4) -->
        <div class="cards_corp  info-page-card article mb-16-px" >
            <div style="margin-bottom:48px;">
                <div class="article-image-bg" style="background-image:url('https://upravdom.com/upload/iblock/8cb/5yz79v5hheinhqjp12d5zitv56gy8778.png');"></div>
                <p>Сотрудничаем с юридическими лицами, строительными компаниями, дизайн-бюро и другими организациями. Предлагаем оптовые цены, консультации специалистов и удобный формат оформления заказов.</p>
                <h3>Как оформить заказ для юрлиц:</h3>
                <ol>
          <li>
            <div class="list-number">1</div>
            Оплата — по безналичному расчёту с расчётного счёта организации в рублях
          </li>
          <li>
            <div class="list-number">2</div>
            Для оформления заказа зарегистрируйтесь на сайте как юридическое лицо
          </li>
          <li>
            <div class="list-number">3</div>
            После заказа с вами свяжется менеджер для уточнения реквизитов
          </li>
          <li>
            <div class="list-number">4</div>
            Счёт придёт на электронную почту, он действителен 3 дня
          </li>
          <li>
            <div class="list-number">5</div>
            После оплаты менеджер согласует дату доставки
          </li>
        </ol>
                <p>Если у вас есть вопросы или нужна помощь — свяжитесь с нами, мы подскажем.</p>
            </div>
        </div>

        <!-- Правая секция (1/4) — форма -->
        <div class="corp-form-col">
            <div class="feedback-card" >
                <div style="font-weight:600; font-size:30px; line-height:34px; margin-bottom:12px;">Стать клиентом</div>
                <div style="margin-bottom:24px;">Отправьте заявку и мы свяжемся с вами в ближайшее время</div>
                <form class="feedback-card-form js-corp-client-form" method="POST" action="/ajax/corp_client.php">
                    <?=bitrix_sessid_post();?>
                    <div class="js-corp-client-fields">
                    <div style="margin-bottom:16px;">
                        <label style="display:block; margin-bottom:4px;">Имя</label>
                        <input type="text" name="name" required maxlength="255" style="width:100%; padding:10px; border-radius:8px; border:1px solid #ccc;">
                    </div>
                    <div style="margin-bottom:16px;">
                        <label style="display:block; margin-bottom:4px;">Номер телефона</label>
                        <input type="tel" name="phone" required inputmode="tel" placeholder="+7 (___) ___-__-__" autocomplete="tel" style="width:100%; padding:10px; border-radius:8px; border:1px solid #ccc;">
                    </div>
                    <div style="margin-bottom:16px;">
                        <label style="display:block; margin-bottom:4px;">Email</label>
                        <input type="email" name="email" required inputmode="email" placeholder="example@mail.ru" autocomplete="email" style="width:100%; padding:10px; border-radius:8px; border:1px solid #ccc;">
                    </div>
                    <!-- скрытые поля -->
                    <input type="hidden" name="source_title" value="Стать клиентом">
                    <input type="hidden" name="source_page" value="/for-corporations/">
                    <div class="corp-client-honeypot" aria-hidden="true" role="presentation">
                        <input type="text" name="honeypot" tabindex="-1" autocomplete="off">
                    </div>
                    <!-- кнопка -->
                    <button type="submit">Отправить заявку</button>
                    <!-- чекбокс -->
                    <div class="feedback-card-footer">
                    <label class="checkbox-control"><input type="checkbox" required="" id="49" name="consent" value="Y"><span>Нажимая на кнопку «Отправить заявку», вы соглашаетесь на <a href="/local/downloads/Personal_data_protection_policy.pdf" target="_blank">обработку персональных данных</a></span> </label>
                    </div>
                    <div class="feedback-card-form__message js-corp-client-error" role="alert" aria-live="polite"></div>
                    </div>
                    <div class="feedback-card-form__success js-corp-client-success" role="status" aria-live="polite">
                        Спасибо! Заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
.corp-client-honeypot {
  position: absolute;
  left: -10000px;
  top: auto;
  width: 1px;
  height: 1px;
  overflow: hidden;
  white-space: nowrap;
}
    :root {
  --primary-color: #ffe63f;
  --primary-color-hover: #FFE63FBF;
  --accent-color: #ed1c42;
  --background-color: #f5f5f5;
  --foreground-color: #ffffff;
  --foreground-color-hover: #ffffffBF;
  --text-color: #212121;
  --text-color-hover: #212121BF;
  --secondary-text-color: #8f8f8f;
  --success-color: #038100;
  --danger-color: var(--accent-color);
  --secondary-color: rgba(33, 33, 33, .75);
  --secondary-light-color: #E1E1E1;
  --secondary-light-color-hover: #E1E1E1BF;
  --border-color: rgb(33, 33, 33, .3);
  --border-color-hover: rgb(33, 33, 33, .5);
  --border-focus-color: var(--text-color);
  --base-radius: 32px;
  --overlay-bg-color: rgba(33, 33, 33, .7);
  --z-index-comparison-table-header: 1;
  --z-index-address-card-scroll-btn: 1;
  --z-index-short-video-backdrop: 1;
  --z-index-short-video: 2;
  --z-index-comparison-side-padding-helpers: 2;
  --z-index-header: 30;
  --z-index-footer: 3;
  --z-index-comparison-scroll-btn: 3;
  --z-index-call-back-btn: 4;
  --z-index-product-card-badge: 10;
  --z-index-dropdown: 20;
  --z-index-drawer: 2000;
  --z-index-drawer-content: 2010;
  --z-index-drawer-content-child: 2020;
  --z-index-modal: 3000;
  --z-index-snackbar: 3010;
  --base-transition: .2s;
  --theme-shadow-glass:
    0px 8px 40px 0px #0000001F,
    0px 2px 24px 0px #0000000F inset,
    1px 1px 0px 0px #FFF inset,
    -1px -1px 0px 0px #FFF inset;
  --theme-gap-glass: 24px;
}

@media (min-width: 600px) {
  :root {
    --base-radius: 48px;
    --theme-gap-glass: 48px;
  }
}

.content-container  {
    display:flex;  
    flex-wrap:wrap;
    gap: 25px;
 }

.feedback-card-form__message {
  display: none;
  margin-top: 12px;
  color: var(--danger-color);
}

.feedback-card-form__message.is-visible {
  display: block;
}

.feedback-card-form__success {
  display: none;
  margin-top: 16px;
  color: var(--success-color);
  font-weight: 600;
}

.feedback-card-form.is-success .js-corp-client-fields {
  display: none;
}

.feedback-card-form.is-success .feedback-card-form__success {
  display: block;
}
@media (min-width: 1000px) {
 .content-container .info-page-title {
    padding-right: 396px;
  }
}

@media (min-width: 1500px) {
    .content-container  .info-page-title {
    padding-right: 511px;
  }
}

.content-container .info-page-subtitle {
  font-weight: 600;
  font-size: 30px;
  line-height: 34px;
}

.content-container .article-video {
  width: 100%;
  margin-bottom: 24px;
  border-radius: var(--base-radius);
  overflow: hidden;
}

.content-container .article-image-container {
  border-radius: var(--base-radius);
  overflow: hidden;
  display: grid;
  margin-bottom: 48px;
}

.content-container .article-image-container img {
  width: 100%;
}

.content-container .article-image-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  border-radius: var(--base-radius);
  overflow: hidden;
  height: 115px;
  margin-bottom: 48px;
}

@media (min-width: 390px) {
    .content-container .article-image-bg {
    height: 139px;
  }
}

@media (min-width: 600px) {
    .content-container  .article-image-bg {
    height: 265px;
  }
}

@media (min-width: 1000px) {
    .content-container  .article-image-bg {
    height: 304px;
  }
}

@media (min-width: 1500px) {
    .content-container  .article-image-bg {
    height: 471px;
  }
}

.content-container .article-image-bg-container {
  margin-bottom: 48px;
}

.content-container .article-image-bg-container .article-image-bg {
  margin-bottom: 12px;
}

.content-container .download-link {
  display: flex;
  gap: 16px;
  align-items: center;
  font-size: 20px;
  line-height: 30px;
}

.content-container .address-modal-to-map-btn-container {
  position: sticky;
  bottom: 0;
}

.content-container form button {
margin-top: 16px;
    padding: 16px;
    width: 100%;
    background: #ff5605;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;}

 .cards_corp   {
    background-color: var(--foreground-color);
    border-radius: var(--base-radius);
    box-shadow: var(--theme-shadow-glass); }

    .gap-0 {
  gap: 0px !important;
}

.m-0-px {
  margin: 0px !important;
}

.my-0-px {
  margin-top: 0px !important;
  margin-bottom: 0px !important;
}

.mx-0-px {
  margin-left: 0px !important;
  margin-right: 0px !important;
}

.mt-0-px {
  margin-top: 0px !important;
}

.mr-0-px {
  margin-right: 0px !important;
}

.mb-0-px {
  margin-bottom: 0px !important;
}

.ml-0-px {
  margin-left: 0px !important;
}

.p-0-px {
  padding: 0px !important;
}

.py-0-px {
  padding-top: 0px !important;
  padding-bottom: 0px !important;
}

.px-0-px {
  padding-left: 0px !important;
  padding-right: 0px !important;
}

.pt-0-px {
  padding-top: 0px !important;
}

.pr-0-px {
  padding-right: 0px !important;
}

.pb-0-px {
  padding-bottom: 0px !important;
}

.pl-0-px {
  padding-left: 0px !important;
}

.gap-2 {
  gap: 2px !important;
}

.m-2-px {
  margin: 2px !important;
}

.my-2-px {
  margin-top: 2px !important;
  margin-bottom: 2px !important;
}

.mx-2-px {
  margin-left: 2px !important;
  margin-right: 2px !important;
}

.mt-2-px {
  margin-top: 2px !important;
}

.mr-2-px {
  margin-right: 2px !important;
}

.mb-2-px {
  margin-bottom: 2px !important;
}

.ml-2-px {
  margin-left: 2px !important;
}

.p-2-px {
  padding: 2px !important;
}

.py-2-px {
  padding-top: 2px !important;
  padding-bottom: 2px !important;
}

.px-2-px {
  padding-left: 2px !important;
  padding-right: 2px !important;
}

.pt-2-px {
  padding-top: 2px !important;
}

.pr-2-px {
  padding-right: 2px !important;
}

.pb-2-px {
  padding-bottom: 2px !important;
}

.pl-2-px {
  padding-left: 2px !important;
}

.gap-4, .shorts-modal-indicators-container {
  gap: 4px !important;
}

.m-4-px {
  margin: 4px !important;
}

.my-4-px {
  margin-top: 4px !important;
  margin-bottom: 4px !important;
}

.mx-4-px {
  margin-left: 4px !important;
  margin-right: 4px !important;
}

.mt-4-px {
  margin-top: 4px !important;
}

.mr-4-px {
  margin-right: 4px !important;
}

.mb-4-px {
  margin-bottom: 4px !important;
}

.ml-4-px {
  margin-left: 4px !important;
}

.p-4-px {
  padding: 4px !important;
}

.py-4-px {
  padding-top: 4px !important;
  padding-bottom: 4px !important;
}

.px-4-px {
  padding-left: 4px !important;
  padding-right: 4px !important;
}

.pt-4-px {
  padding-top: 4px !important;
}

.pr-4-px {
  padding-right: 4px !important;
}

.pb-4-px {
  padding-bottom: 4px !important;
}

.pl-4-px {
  padding-left: 4px !important;
}

.gap-6 {
  gap: 6px !important;
}

.m-6-px {
  margin: 6px !important;
}

.my-6-px {
  margin-top: 6px !important;
  margin-bottom: 6px !important;
}

.mx-6-px {
  margin-left: 6px !important;
  margin-right: 6px !important;
}

.mt-6-px {
  margin-top: 6px !important;
}

.mr-6-px {
  margin-right: 6px !important;
}

.mb-6-px {
  margin-bottom: 6px !important;
}

.ml-6-px {
  margin-left: 6px !important;
}

.p-6-px {
  padding: 6px !important;
}

.py-6-px {
  padding-top: 6px !important;
  padding-bottom: 6px !important;
}

.px-6-px {
  padding-left: 6px !important;
  padding-right: 6px !important;
}

.pt-6-px {
  padding-top: 6px !important;
}

.pr-6-px {
  padding-right: 6px !important;
}

.pb-6-px {
  padding-bottom: 6px !important;
}

.pl-6-px {
  padding-left: 6px !important;
}

.gap-8, .popular-title, .error-404-container {
  gap: 8px !important;
}

.m-8-px {
  margin: 8px !important;
}

.my-8-px {
  margin-top: 8px !important;
  margin-bottom: 8px !important;
}

.mx-8-px {
  margin-left: 8px !important;
  margin-right: 8px !important;
}

.mt-8-px {
  margin-top: 8px !important;
}

.mr-8-px {
  margin-right: 8px !important;
}

.mb-8-px {
  margin-bottom: 8px !important;
}

.ml-8-px {
  margin-left: 8px !important;
}

.p-8-px {
  padding: 8px !important;
}

.py-8-px {
  padding-top: 8px !important;
  padding-bottom: 8px !important;
}

.px-8-px {
  padding-left: 8px !important;
  padding-right: 8px !important;
}

.pt-8-px {
  padding-top: 8px !important;
}

.pr-8-px {
  padding-right: 8px !important;
}

.pb-8-px {
  padding-bottom: 8px !important;
}

.pl-8-px {
  padding-left: 8px !important;
}

.gap-9 {
  gap: 9px !important;
}

.m-9-px {
  margin: 9px !important;
}

.my-9-px {
  margin-top: 9px !important;
  margin-bottom: 9px !important;
}

.mx-9-px {
  margin-left: 9px !important;
  margin-right: 9px !important;
}

.mt-9-px {
  margin-top: 9px !important;
}

.mr-9-px {
  margin-right: 9px !important;
}

.mb-9-px {
  margin-bottom: 9px !important;
}

.ml-9-px {
  margin-left: 9px !important;
}

.p-9-px {
  padding: 9px !important;
}

.py-9-px {
  padding-top: 9px !important;
  padding-bottom: 9px !important;
}

.px-9-px {
  padding-left: 9px !important;
  padding-right: 9px !important;
}

.pt-9-px {
  padding-top: 9px !important;
}

.pr-9-px {
  padding-right: 9px !important;
}

.pb-9-px {
  padding-bottom: 9px !important;
}

.pl-9-px {
  padding-left: 9px !important;
}

.gap-10 {
  gap: 10px !important;
}

.m-10-px {
  margin: 10px !important;
}

.my-10-px {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
}

.mx-10-px {
  margin-left: 10px !important;
  margin-right: 10px !important;
}

.mt-10-px {
  margin-top: 10px !important;
}

.mr-10-px {
  margin-right: 10px !important;
}

.mb-10-px {
  margin-bottom: 10px !important;
}

.ml-10-px {
  margin-left: 10px !important;
}

.p-10-px {
  padding: 10px !important;
}

.py-10-px {
  padding-top: 10px !important;
  padding-bottom: 10px !important;
}

.px-10-px {
  padding-left: 10px !important;
  padding-right: 10px !important;
}

.pt-10-px {
  padding-top: 10px !important;
}

.pr-10-px {
  padding-right: 10px !important;
}

.pb-10-px {
  padding-bottom: 10px !important;
}

.pl-10-px {
  padding-left: 10px !important;
}

.gap-12, .advices-nav-link, .order-card .order-card-status {
  gap: 12px !important;
}

.m-12-px {
  margin: 12px !important;
}

.my-12-px {
  margin-top: 12px !important;
  margin-bottom: 12px !important;
}

.mx-12-px {
  margin-left: 12px !important;
  margin-right: 12px !important;
}

.mt-12-px, .info-page-title {
  margin-top: 12px !important;
}

.mr-12-px {
  margin-right: 12px !important;
}

.mb-12-px {
  margin-bottom: 12px !important;
}

.ml-12-px {
  margin-left: 12px !important;
}

.p-12-px {
  padding: 12px !important;
}

.py-12-px {
  padding-top: 12px !important;
  padding-bottom: 12px !important;
}

.px-12-px {
  padding-left: 12px !important;
  padding-right: 12px !important;
}

.pt-12-px {
  padding-top: 12px !important;
}

.pr-12-px {
  padding-right: 12px !important;
}

.pb-12-px {
  padding-bottom: 12px !important;
}

.pl-12-px {
  padding-left: 12px !important;
}

.gap-16, .shorts-modal-body-content, .order-card {
  gap: 16px !important;
}

.m-16-px {
  margin: 16px !important;
}

.my-16-px {
  margin-top: 16px !important;
  margin-bottom: 16px !important;
}

.mx-16-px {
  margin-left: 16px !important;
  margin-right: 16px !important;
}

.mt-16-px {
  margin-top: 16px !important;
}

.mr-16-px {
  margin-right: 16px !important;
}

.mb-16-px {
  margin-bottom: 16px !important;
}

.ml-16-px {
  margin-left: 16px !important;
}

.p-16-px {
  padding: 16px !important;
}

.py-16-px {
  padding-top: 16px !important;
  padding-bottom: 16px !important;
}

.px-16-px, .shorts-modal-body-content {
  padding-left: 16px !important;
  padding-right: 16px !important;
}

.pt-16-px {
  padding-top: 16px !important;
}

.pr-16-px {
  padding-right: 16px !important;
}

.pb-16-px, .shorts-modal-body-content {
  padding-bottom: 16px !important;
}

.pl-16-px {
  padding-left: 16px !important;
}

.gap-20 {
  gap: 20px !important;
}

.m-20-px {
  margin: 20px !important;
}

.my-20-px {
  margin-top: 20px !important;
  margin-bottom: 20px !important;
}

.mx-20-px {
  margin-left: 20px !important;
  margin-right: 20px !important;
}

.mt-20-px {
  margin-top: 20px !important;
}

.mr-20-px {
  margin-right: 20px !important;
}

.mb-20-px {
  margin-bottom: 20px !important;
}

.ml-20-px {
  margin-left: 20px !important;
}

.p-20-px, .info-page-card, .feedback-card, .address-single-card {
  padding: 20px !important;
}

.py-20-px, .address-card .address-card-content {
  padding-top: 20px !important;
  padding-bottom: 20px !important;
}

.px-20-px {
  padding-left: 20px !important;
  padding-right: 20px !important;
}

.pt-20-px {
  padding-top: 20px !important;
}

.pr-20-px {
  padding-right: 20px !important;
}

.pb-20-px {
  padding-bottom: 20px !important;
}

.pl-20-px {
  padding-left: 20px !important;
}

.gap-24 {
  gap: 24px !important;
}

.m-24-px {
  margin: 24px !important;
}

.my-24-px {
  margin-top: 24px !important;
  margin-bottom: 24px !important;
}

.mx-24-px {
  margin-left: 24px !important;
  margin-right: 24px !important;
}

.mt-24-px {
  margin-top: 24px !important;
}

.mr-24-px {
  margin-right: 24px !important;
}

.mb-24-px, .info-page-title, .popular-title {
  margin-bottom: 24px !important;
}

.ml-24-px {
  margin-left: 24px !important;
}

.p-24-px {
  padding: 24px !important;
}

.py-24-px {
  padding-top: 24px !important;
  padding-bottom: 24px !important;
}

.px-24-px {
  padding-left: 24px !important;
  padding-right: 24px !important;
}

.pt-24-px {
  padding-top: 24px !important;
}

.pr-24-px {
  padding-right: 24px !important;
}

.pb-24-px {
  padding-bottom: 24px !important;
}

.pl-24-px {
  padding-left: 24px !important;
}

.gap-25 {
  gap: 25px !important;
}

.m-25-px {
  margin: 25px !important;
}

.my-25-px {
  margin-top: 25px !important;
  margin-bottom: 25px !important;
}

.mx-25-px {
  margin-left: 25px !important;
  margin-right: 25px !important;
}

.mt-25-px {
  margin-top: 25px !important;
}

.mr-25-px {
  margin-right: 25px !important;
}

.mb-25-px {
  margin-bottom: 25px !important;
}

.ml-25-px {
  margin-left: 25px !important;
}

.p-25-px {
  padding: 25px !important;
}

.py-25-px {
  padding-top: 25px !important;
  padding-bottom: 25px !important;
}

.px-25-px {
  padding-left: 25px !important;
  padding-right: 25px !important;
}

.pt-25-px {
  padding-top: 25px !important;
}

.pr-25-px {
  padding-right: 25px !important;
}

.pb-25-px {
  padding-bottom: 25px !important;
}

.pl-25-px {
  padding-left: 25px !important;
}

.gap-26 {
  gap: 26px !important;
}

.m-26-px {
  margin: 26px !important;
}

.my-26-px {
  margin-top: 26px !important;
  margin-bottom: 26px !important;
}

.mx-26-px {
  margin-left: 26px !important;
  margin-right: 26px !important;
}

.mt-26-px {
  margin-top: 26px !important;
}

.mr-26-px {
  margin-right: 26px !important;
}

.mb-26-px {
  margin-bottom: 26px !important;
}

.ml-26-px {
  margin-left: 26px !important;
}

.p-26-px {
  padding: 26px !important;
}

.py-26-px {
  padding-top: 26px !important;
  padding-bottom: 26px !important;
}

.px-26-px {
  padding-left: 26px !important;
  padding-right: 26px !important;
}

.pt-26-px {
  padding-top: 26px !important;
}

.pr-26-px {
  padding-right: 26px !important;
}

.pb-26-px {
  padding-bottom: 26px !important;
}

.pl-26-px {
  padding-left: 26px !important;
}

.gap-28 {
  gap: 28px !important;
}

.m-28-px {
  margin: 28px !important;
}

.my-28-px {
  margin-top: 28px !important;
  margin-bottom: 28px !important;
}

.mx-28-px {
  margin-left: 28px !important;
  margin-right: 28px !important;
}

.mt-28-px {
  margin-top: 28px !important;
}

.mr-28-px {
  margin-right: 28px !important;
}

.mb-28-px {
  margin-bottom: 28px !important;
}

.ml-28-px {
  margin-left: 28px !important;
}

.p-28-px {
  padding: 28px !important;
}

.py-28-px {
  padding-top: 28px !important;
  padding-bottom: 28px !important;
}

.px-28-px {
  padding-left: 28px !important;
  padding-right: 28px !important;
}

.pt-28-px {
  padding-top: 28px !important;
}

.pr-28-px {
  padding-right: 28px !important;
}

.pb-28-px {
  padding-bottom: 28px !important;
}

.pl-28-px {
  padding-left: 28px !important;
}

.gap-30 {
  gap: 30px !important;
}

.m-30-px {
  margin: 30px !important;
}

.my-30-px {
  margin-top: 30px !important;
  margin-bottom: 30px !important;
}

.mx-30-px {
  margin-left: 30px !important;
  margin-right: 30px !important;
}

.mt-30-px {
  margin-top: 30px !important;
}

.mr-30-px {
  margin-right: 30px !important;
}

.mb-30-px {
  margin-bottom: 30px !important;
}

.ml-30-px {
  margin-left: 30px !important;
}

.p-30-px {
  padding: 30px !important;
}

.py-30-px {
  padding-top: 30px !important;
  padding-bottom: 30px !important;
}

.px-30-px {
  padding-left: 30px !important;
  padding-right: 30px !important;
}

.pt-30-px {
  padding-top: 30px !important;
}

.pr-30-px {
  padding-right: 30px !important;
}

.pb-30-px {
  padding-bottom: 30px !important;
}

.pl-30-px {
  padding-left: 30px !important;
}

.gap-32 {
  gap: 32px !important;
}

.m-32-px {
  margin: 32px !important;
}

.my-32-px {
  margin-top: 32px !important;
  margin-bottom: 32px !important;
}

.mx-32-px {
  margin-left: 32px !important;
  margin-right: 32px !important;
}

.mt-32-px {
  margin-top: 32px !important;
}

.mr-32-px {
  margin-right: 32px !important;
}

.mb-32-px {
  margin-bottom: 32px !important;
}

.ml-32-px {
  margin-left: 32px !important;
}

.p-32-px {
  padding: 32px !important;
}

.py-32-px {
  padding-top: 32px !important;
  padding-bottom: 32px !important;
}

.px-32-px {
  padding-left: 32px !important;
  padding-right: 32px !important;
}

.pt-32-px {
  padding-top: 32px !important;
}

.pr-32-px {
  padding-right: 32px !important;
}

.pb-32-px {
  padding-bottom: 32px !important;
}

.pl-32-px {
  padding-left: 32px !important;
}

.gap-40 {
  gap: 40px !important;
}

.m-40-px {
  margin: 40px !important;
}

.my-40-px {
  margin-top: 40px !important;
  margin-bottom: 40px !important;
}

.mx-40-px {
  margin-left: 40px !important;
  margin-right: 40px !important;
}

.mt-40-px {
  margin-top: 40px !important;
}

.mr-40-px {
  margin-right: 40px !important;
}

.mb-40-px {
  margin-bottom: 40px !important;
}

.ml-40-px {
  margin-left: 40px !important;
}

.p-40-px {
  padding: 40px !important;
}

.py-40-px {
  padding-top: 40px !important;
  padding-bottom: 40px !important;
}

.px-40-px {
  padding-left: 40px !important;
  padding-right: 40px !important;
}

.pt-40-px {
  padding-top: 40px !important;
}

.pr-40-px {
  padding-right: 40px !important;
}

.pb-40-px {
  padding-bottom: 40px !important;
}

.pl-40-px {
  padding-left: 40px !important;
}

.gap-48, .info-page-container, .info-page-container-invert {
  gap: 48px !important;
}

.m-48-px {
  margin: 48px !important;
}

.my-48-px {
  margin-top: 48px !important;
  margin-bottom: 48px !important;
}

.mx-48-px {
  margin-left: 48px !important;
  margin-right: 48px !important;
}

.mt-48-px {
  margin-top: 48px !important;
}

.mr-48-px {
  margin-right: 48px !important;
}

.mb-48-px {
  margin-bottom: 48px !important;
}

.ml-48-px {
  margin-left: 48px !important;
}

.p-48-px {
  padding: 48px !important;
}

.py-48-px {
  padding-top: 48px !important;
  padding-bottom: 48px !important;
}

.px-48-px {
  padding-left: 48px !important;
  padding-right: 48px !important;
}

.pt-48-px {
  padding-top: 48px !important;
}

.pr-48-px {
  padding-right: 48px !important;
}

.pb-48-px {
  padding-bottom: 48px !important;
}

.pl-48-px {
  padding-left: 48px !important;
}

.gap-64 {
  gap: 64px !important;
}

.m-64-px {
  margin: 64px !important;
}

.my-64-px {
  margin-top: 64px !important;
  margin-bottom: 64px !important;
}

.mx-64-px {
  margin-left: 64px !important;
  margin-right: 64px !important;
}

.mt-64-px {
  margin-top: 64px !important;
}

.mr-64-px {
  margin-right: 64px !important;
}

.mb-64-px {
  margin-bottom: 64px !important;
}

.ml-64-px {
  margin-left: 64px !important;
}

.p-64-px {
  padding: 64px !important;
}

.py-64-px {
  padding-top: 64px !important;
  padding-bottom: 64px !important;
}

.px-64-px {
  padding-left: 64px !important;
  padding-right: 64px !important;
}

.pt-64-px {
  padding-top: 64px !important;
}

.pr-64-px {
  padding-right: 64px !important;
}

.pb-64-px {
  padding-bottom: 64px !important;
}

.pl-64-px {
  padding-left: 64px !important;
}

.gap-80 {
  gap: 80px !important;
}

.m-80-px {
  margin: 80px !important;
}

.my-80-px {
  margin-top: 80px !important;
  margin-bottom: 80px !important;
}

.mx-80-px {
  margin-left: 80px !important;
  margin-right: 80px !important;
}

.mt-80-px {
  margin-top: 80px !important;
}

.mr-80-px {
  margin-right: 80px !important;
}

.mb-80-px {
  margin-bottom: 80px !important;
}

.ml-80-px {
  margin-left: 80px !important;
}

.p-80-px {
  padding: 80px !important;
}

.py-80-px {
  padding-top: 80px !important;
  padding-bottom: 80px !important;
}

.px-80-px {
  padding-left: 80px !important;
  padding-right: 80px !important;
}

.pt-80-px {
  padding-top: 80px !important;
}

.pr-80-px {
  padding-right: 80px !important;
}

.pb-80-px {
  padding-bottom: 80px !important;
}

.pl-80-px {
  padding-left: 80px !important;
}

.gap-92 {
  gap: 92px !important;
}

.m-92-px {
  margin: 92px !important;
}

.my-92-px {
  margin-top: 92px !important;
  margin-bottom: 92px !important;
}

.mx-92-px {
  margin-left: 92px !important;
  margin-right: 92px !important;
}

.mt-92-px {
  margin-top: 92px !important;
}

.mr-92-px {
  margin-right: 92px !important;
}

.mb-92-px {
  margin-bottom: 92px !important;
}

.ml-92-px {
  margin-left: 92px !important;
}

.p-92-px {
  padding: 92px !important;
}

.py-92-px {
  padding-top: 92px !important;
  padding-bottom: 92px !important;
}

.px-92-px {
  padding-left: 92px !important;
  padding-right: 92px !important;
}

.pt-92-px {
  padding-top: 92px !important;
}

.pr-92-px {
  padding-right: 92px !important;
}

.pb-92-px {
  padding-bottom: 92px !important;
}

.pl-92-px {
  padding-left: 92px !important;
}

@media (min-width: 390px) {
  .gap-sm-0 {
    gap: 0px !important;
  }
  .m-sm-0-px {
    margin: 0px !important;
  }
  .my-sm-0-px {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  .mx-sm-0-px {
    margin-left: 0px !important;
    margin-right: 0px !important;
  }
  .mt-sm-0-px {
    margin-top: 0px !important;
  }
  .mr-sm-0-px {
    margin-right: 0px !important;
  }
  .mb-sm-0-px {
    margin-bottom: 0px !important;
  }
  .ml-sm-0-px {
    margin-left: 0px !important;
  }
  .p-sm-0-px {
    padding: 0px !important;
  }
  .py-sm-0-px {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }
  .px-sm-0-px {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .pt-sm-0-px {
    padding-top: 0px !important;
  }
  .pr-sm-0-px {
    padding-right: 0px !important;
  }
  .pb-sm-0-px {
    padding-bottom: 0px !important;
  }
  .pl-sm-0-px {
    padding-left: 0px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-2 {
    gap: 2px !important;
  }
  .m-sm-2-px {
    margin: 2px !important;
  }
  .my-sm-2-px {
    margin-top: 2px !important;
    margin-bottom: 2px !important;
  }
  .mx-sm-2-px {
    margin-left: 2px !important;
    margin-right: 2px !important;
  }
  .mt-sm-2-px {
    margin-top: 2px !important;
  }
  .mr-sm-2-px {
    margin-right: 2px !important;
  }
  .mb-sm-2-px {
    margin-bottom: 2px !important;
  }
  .ml-sm-2-px {
    margin-left: 2px !important;
  }
  .p-sm-2-px {
    padding: 2px !important;
  }
  .py-sm-2-px {
    padding-top: 2px !important;
    padding-bottom: 2px !important;
  }
  .px-sm-2-px {
    padding-left: 2px !important;
    padding-right: 2px !important;
  }
  .pt-sm-2-px {
    padding-top: 2px !important;
  }
  .pr-sm-2-px {
    padding-right: 2px !important;
  }
  .pb-sm-2-px {
    padding-bottom: 2px !important;
  }
  .pl-sm-2-px {
    padding-left: 2px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-4 {
    gap: 4px !important;
  }
  .m-sm-4-px {
    margin: 4px !important;
  }
  .my-sm-4-px {
    margin-top: 4px !important;
    margin-bottom: 4px !important;
  }
  .mx-sm-4-px {
    margin-left: 4px !important;
    margin-right: 4px !important;
  }
  .mt-sm-4-px {
    margin-top: 4px !important;
  }
  .mr-sm-4-px {
    margin-right: 4px !important;
  }
  .mb-sm-4-px {
    margin-bottom: 4px !important;
  }
  .ml-sm-4-px {
    margin-left: 4px !important;
  }
  .p-sm-4-px {
    padding: 4px !important;
  }
  .py-sm-4-px {
    padding-top: 4px !important;
    padding-bottom: 4px !important;
  }
  .px-sm-4-px {
    padding-left: 4px !important;
    padding-right: 4px !important;
  }
  .pt-sm-4-px {
    padding-top: 4px !important;
  }
  .pr-sm-4-px {
    padding-right: 4px !important;
  }
  .pb-sm-4-px {
    padding-bottom: 4px !important;
  }
  .pl-sm-4-px {
    padding-left: 4px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-6 {
    gap: 6px !important;
  }
  .m-sm-6-px {
    margin: 6px !important;
  }
  .my-sm-6-px {
    margin-top: 6px !important;
    margin-bottom: 6px !important;
  }
  .mx-sm-6-px {
    margin-left: 6px !important;
    margin-right: 6px !important;
  }
  .mt-sm-6-px {
    margin-top: 6px !important;
  }
  .mr-sm-6-px {
    margin-right: 6px !important;
  }
  .mb-sm-6-px {
    margin-bottom: 6px !important;
  }
  .ml-sm-6-px {
    margin-left: 6px !important;
  }
  .p-sm-6-px {
    padding: 6px !important;
  }
  .py-sm-6-px {
    padding-top: 6px !important;
    padding-bottom: 6px !important;
  }
  .px-sm-6-px {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }
  .pt-sm-6-px {
    padding-top: 6px !important;
  }
  .pr-sm-6-px {
    padding-right: 6px !important;
  }
  .pb-sm-6-px {
    padding-bottom: 6px !important;
  }
  .pl-sm-6-px {
    padding-left: 6px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-8 {
    gap: 8px !important;
  }
  .m-sm-8-px {
    margin: 8px !important;
  }
  .my-sm-8-px {
    margin-top: 8px !important;
    margin-bottom: 8px !important;
  }
  .mx-sm-8-px {
    margin-left: 8px !important;
    margin-right: 8px !important;
  }
  .mt-sm-8-px {
    margin-top: 8px !important;
  }
  .mr-sm-8-px {
    margin-right: 8px !important;
  }
  .mb-sm-8-px {
    margin-bottom: 8px !important;
  }
  .ml-sm-8-px {
    margin-left: 8px !important;
  }
  .p-sm-8-px {
    padding: 8px !important;
  }
  .py-sm-8-px {
    padding-top: 8px !important;
    padding-bottom: 8px !important;
  }
  .px-sm-8-px {
    padding-left: 8px !important;
    padding-right: 8px !important;
  }
  .pt-sm-8-px {
    padding-top: 8px !important;
  }
  .pr-sm-8-px {
    padding-right: 8px !important;
  }
  .pb-sm-8-px {
    padding-bottom: 8px !important;
  }
  .pl-sm-8-px {
    padding-left: 8px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-9 {
    gap: 9px !important;
  }
  .m-sm-9-px {
    margin: 9px !important;
  }
  .my-sm-9-px {
    margin-top: 9px !important;
    margin-bottom: 9px !important;
  }
  .mx-sm-9-px {
    margin-left: 9px !important;
    margin-right: 9px !important;
  }
  .mt-sm-9-px {
    margin-top: 9px !important;
  }
  .mr-sm-9-px {
    margin-right: 9px !important;
  }
  .mb-sm-9-px {
    margin-bottom: 9px !important;
  }
  .ml-sm-9-px {
    margin-left: 9px !important;
  }
  .p-sm-9-px {
    padding: 9px !important;
  }
  .py-sm-9-px {
    padding-top: 9px !important;
    padding-bottom: 9px !important;
  }
  .px-sm-9-px {
    padding-left: 9px !important;
    padding-right: 9px !important;
  }
  .pt-sm-9-px {
    padding-top: 9px !important;
  }
  .pr-sm-9-px {
    padding-right: 9px !important;
  }
  .pb-sm-9-px {
    padding-bottom: 9px !important;
  }
  .pl-sm-9-px {
    padding-left: 9px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-10 {
    gap: 10px !important;
  }
  .m-sm-10-px {
    margin: 10px !important;
  }
  .my-sm-10-px {
    margin-top: 10px !important;
    margin-bottom: 10px !important;
  }
  .mx-sm-10-px {
    margin-left: 10px !important;
    margin-right: 10px !important;
  }
  .mt-sm-10-px {
    margin-top: 10px !important;
  }
  .mr-sm-10-px {
    margin-right: 10px !important;
  }
  .mb-sm-10-px {
    margin-bottom: 10px !important;
  }
  .ml-sm-10-px {
    margin-left: 10px !important;
  }
  .p-sm-10-px {
    padding: 10px !important;
  }
  .py-sm-10-px {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
  }
  .px-sm-10-px {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }
  .pt-sm-10-px {
    padding-top: 10px !important;
  }
  .pr-sm-10-px {
    padding-right: 10px !important;
  }
  .pb-sm-10-px {
    padding-bottom: 10px !important;
  }
  .pl-sm-10-px {
    padding-left: 10px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-12 {
    gap: 12px !important;
  }
  .m-sm-12-px {
    margin: 12px !important;
  }
  .my-sm-12-px {
    margin-top: 12px !important;
    margin-bottom: 12px !important;
  }
  .mx-sm-12-px {
    margin-left: 12px !important;
    margin-right: 12px !important;
  }
  .mt-sm-12-px {
    margin-top: 12px !important;
  }
  .mr-sm-12-px {
    margin-right: 12px !important;
  }
  .mb-sm-12-px {
    margin-bottom: 12px !important;
  }
  .ml-sm-12-px {
    margin-left: 12px !important;
  }
  .p-sm-12-px {
    padding: 12px !important;
  }
  .py-sm-12-px {
    padding-top: 12px !important;
    padding-bottom: 12px !important;
  }
  .px-sm-12-px {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
  .pt-sm-12-px {
    padding-top: 12px !important;
  }
  .pr-sm-12-px {
    padding-right: 12px !important;
  }
  .pb-sm-12-px {
    padding-bottom: 12px !important;
  }
  .pl-sm-12-px {
    padding-left: 12px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-16 {
    gap: 16px !important;
  }
  .m-sm-16-px {
    margin: 16px !important;
  }
  .my-sm-16-px {
    margin-top: 16px !important;
    margin-bottom: 16px !important;
  }
  .mx-sm-16-px {
    margin-left: 16px !important;
    margin-right: 16px !important;
  }
  .mt-sm-16-px {
    margin-top: 16px !important;
  }
  .mr-sm-16-px {
    margin-right: 16px !important;
  }
  .mb-sm-16-px {
    margin-bottom: 16px !important;
  }
  .ml-sm-16-px {
    margin-left: 16px !important;
  }
  .p-sm-16-px {
    padding: 16px !important;
  }
  .py-sm-16-px {
    padding-top: 16px !important;
    padding-bottom: 16px !important;
  }
  .px-sm-16-px {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  .pt-sm-16-px {
    padding-top: 16px !important;
  }
  .pr-sm-16-px {
    padding-right: 16px !important;
  }
  .pb-sm-16-px {
    padding-bottom: 16px !important;
  }
  .pl-sm-16-px {
    padding-left: 16px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-20 {
    gap: 20px !important;
  }
  .m-sm-20-px {
    margin: 20px !important;
  }
  .my-sm-20-px {
    margin-top: 20px !important;
    margin-bottom: 20px !important;
  }
  .mx-sm-20-px {
    margin-left: 20px !important;
    margin-right: 20px !important;
  }
  .mt-sm-20-px {
    margin-top: 20px !important;
  }
  .mr-sm-20-px {
    margin-right: 20px !important;
  }
  .mb-sm-20-px {
    margin-bottom: 20px !important;
  }
  .ml-sm-20-px {
    margin-left: 20px !important;
  }
  .p-sm-20-px {
    padding: 20px !important;
  }
  .py-sm-20-px {
    padding-top: 20px !important;
    padding-bottom: 20px !important;
  }
  .px-sm-20-px {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  .pt-sm-20-px {
    padding-top: 20px !important;
  }
  .pr-sm-20-px {
    padding-right: 20px !important;
  }
  .pb-sm-20-px {
    padding-bottom: 20px !important;
  }
  .pl-sm-20-px {
    padding-left: 20px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-24 {
    gap: 24px !important;
  }
  .m-sm-24-px {
    margin: 24px !important;
  }
  .my-sm-24-px {
    margin-top: 24px !important;
    margin-bottom: 24px !important;
  }
  .mx-sm-24-px {
    margin-left: 24px !important;
    margin-right: 24px !important;
  }
  .mt-sm-24-px {
    margin-top: 24px !important;
  }
  .mr-sm-24-px {
    margin-right: 24px !important;
  }
  .mb-sm-24-px {
    margin-bottom: 24px !important;
  }
  .ml-sm-24-px {
    margin-left: 24px !important;
  }
  .p-sm-24-px {
    padding: 24px !important;
  }
  .py-sm-24-px {
    padding-top: 24px !important;
    padding-bottom: 24px !important;
  }
  .px-sm-24-px {
    padding-left: 24px !important;
    padding-right: 24px !important;
  }
  .pt-sm-24-px {
    padding-top: 24px !important;
  }
  .pr-sm-24-px {
    padding-right: 24px !important;
  }
  .pb-sm-24-px {
    padding-bottom: 24px !important;
  }
  .pl-sm-24-px {
    padding-left: 24px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-25 {
    gap: 25px !important;
  }
  .m-sm-25-px {
    margin: 25px !important;
  }
  .my-sm-25-px {
    margin-top: 25px !important;
    margin-bottom: 25px !important;
  }
  .mx-sm-25-px {
    margin-left: 25px !important;
    margin-right: 25px !important;
  }
  .mt-sm-25-px {
    margin-top: 25px !important;
  }
  .mr-sm-25-px {
    margin-right: 25px !important;
  }
  .mb-sm-25-px {
    margin-bottom: 25px !important;
  }
  .ml-sm-25-px {
    margin-left: 25px !important;
  }
  .p-sm-25-px {
    padding: 25px !important;
  }
  .py-sm-25-px {
    padding-top: 25px !important;
    padding-bottom: 25px !important;
  }
  .px-sm-25-px {
    padding-left: 25px !important;
    padding-right: 25px !important;
  }
  .pt-sm-25-px {
    padding-top: 25px !important;
  }
  .pr-sm-25-px {
    padding-right: 25px !important;
  }
  .pb-sm-25-px {
    padding-bottom: 25px !important;
  }
  .pl-sm-25-px {
    padding-left: 25px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-26 {
    gap: 26px !important;
  }
  .m-sm-26-px {
    margin: 26px !important;
  }
  .my-sm-26-px {
    margin-top: 26px !important;
    margin-bottom: 26px !important;
  }
  .mx-sm-26-px {
    margin-left: 26px !important;
    margin-right: 26px !important;
  }
  .mt-sm-26-px {
    margin-top: 26px !important;
  }
  .mr-sm-26-px {
    margin-right: 26px !important;
  }
  .mb-sm-26-px {
    margin-bottom: 26px !important;
  }
  .ml-sm-26-px {
    margin-left: 26px !important;
  }
  .p-sm-26-px {
    padding: 26px !important;
  }
  .py-sm-26-px {
    padding-top: 26px !important;
    padding-bottom: 26px !important;
  }
  .px-sm-26-px {
    padding-left: 26px !important;
    padding-right: 26px !important;
  }
  .pt-sm-26-px {
    padding-top: 26px !important;
  }
  .pr-sm-26-px {
    padding-right: 26px !important;
  }
  .pb-sm-26-px {
    padding-bottom: 26px !important;
  }
  .pl-sm-26-px {
    padding-left: 26px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-28 {
    gap: 28px !important;
  }
  .m-sm-28-px {
    margin: 28px !important;
  }
  .my-sm-28-px {
    margin-top: 28px !important;
    margin-bottom: 28px !important;
  }
  .mx-sm-28-px {
    margin-left: 28px !important;
    margin-right: 28px !important;
  }
  .mt-sm-28-px {
    margin-top: 28px !important;
  }
  .mr-sm-28-px {
    margin-right: 28px !important;
  }
  .mb-sm-28-px {
    margin-bottom: 28px !important;
  }
  .ml-sm-28-px {
    margin-left: 28px !important;
  }
  .p-sm-28-px {
    padding: 28px !important;
  }
  .py-sm-28-px {
    padding-top: 28px !important;
    padding-bottom: 28px !important;
  }
  .px-sm-28-px {
    padding-left: 28px !important;
    padding-right: 28px !important;
  }
  .pt-sm-28-px {
    padding-top: 28px !important;
  }
  .pr-sm-28-px {
    padding-right: 28px !important;
  }
  .pb-sm-28-px {
    padding-bottom: 28px !important;
  }
  .pl-sm-28-px {
    padding-left: 28px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-30 {
    gap: 30px !important;
  }
  .m-sm-30-px {
    margin: 30px !important;
  }
  .my-sm-30-px {
    margin-top: 30px !important;
    margin-bottom: 30px !important;
  }
  .mx-sm-30-px {
    margin-left: 30px !important;
    margin-right: 30px !important;
  }
  .mt-sm-30-px {
    margin-top: 30px !important;
  }
  .mr-sm-30-px {
    margin-right: 30px !important;
  }
  .mb-sm-30-px {
    margin-bottom: 30px !important;
  }
  .ml-sm-30-px {
    margin-left: 30px !important;
  }
  .p-sm-30-px {
    padding: 30px !important;
  }
  .py-sm-30-px {
    padding-top: 30px !important;
    padding-bottom: 30px !important;
  }
  .px-sm-30-px {
    padding-left: 30px !important;
    padding-right: 30px !important;
  }
  .pt-sm-30-px {
    padding-top: 30px !important;
  }
  .pr-sm-30-px {
    padding-right: 30px !important;
  }
  .pb-sm-30-px {
    padding-bottom: 30px !important;
  }
  .pl-sm-30-px {
    padding-left: 30px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-32 {
    gap: 32px !important;
  }
  .m-sm-32-px {
    margin: 32px !important;
  }
  .my-sm-32-px {
    margin-top: 32px !important;
    margin-bottom: 32px !important;
  }
  .mx-sm-32-px {
    margin-left: 32px !important;
    margin-right: 32px !important;
  }
  .mt-sm-32-px {
    margin-top: 32px !important;
  }
  .mr-sm-32-px {
    margin-right: 32px !important;
  }
  .mb-sm-32-px {
    margin-bottom: 32px !important;
  }
  .ml-sm-32-px {
    margin-left: 32px !important;
  }
  .p-sm-32-px {
    padding: 32px !important;
  }
  .py-sm-32-px {
    padding-top: 32px !important;
    padding-bottom: 32px !important;
  }
  .px-sm-32-px {
    padding-left: 32px !important;
    padding-right: 32px !important;
  }
  .pt-sm-32-px {
    padding-top: 32px !important;
  }
  .pr-sm-32-px {
    padding-right: 32px !important;
  }
  .pb-sm-32-px {
    padding-bottom: 32px !important;
  }
  .pl-sm-32-px {
    padding-left: 32px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-40 {
    gap: 40px !important;
  }
  .m-sm-40-px {
    margin: 40px !important;
  }
  .my-sm-40-px {
    margin-top: 40px !important;
    margin-bottom: 40px !important;
  }
  .mx-sm-40-px {
    margin-left: 40px !important;
    margin-right: 40px !important;
  }
  .mt-sm-40-px {
    margin-top: 40px !important;
  }
  .mr-sm-40-px {
    margin-right: 40px !important;
  }
  .mb-sm-40-px {
    margin-bottom: 40px !important;
  }
  .ml-sm-40-px {
    margin-left: 40px !important;
  }
  .p-sm-40-px {
    padding: 40px !important;
  }
  .py-sm-40-px {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
  }
  .px-sm-40-px {
    padding-left: 40px !important;
    padding-right: 40px !important;
  }
  .pt-sm-40-px {
    padding-top: 40px !important;
  }
  .pr-sm-40-px {
    padding-right: 40px !important;
  }
  .pb-sm-40-px {
    padding-bottom: 40px !important;
  }
  .pl-sm-40-px {
    padding-left: 40px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-48 {
    gap: 48px !important;
  }
  .m-sm-48-px {
    margin: 48px !important;
  }
  .my-sm-48-px {
    margin-top: 48px !important;
    margin-bottom: 48px !important;
  }
  .mx-sm-48-px {
    margin-left: 48px !important;
    margin-right: 48px !important;
  }
  .mt-sm-48-px {
    margin-top: 48px !important;
  }
  .mr-sm-48-px {
    margin-right: 48px !important;
  }
  .mb-sm-48-px {
    margin-bottom: 48px !important;
  }
  .ml-sm-48-px {
    margin-left: 48px !important;
  }
  .p-sm-48-px {
    padding: 48px !important;
  }
  .py-sm-48-px {
    padding-top: 48px !important;
    padding-bottom: 48px !important;
  }
  .px-sm-48-px {
    padding-left: 48px !important;
    padding-right: 48px !important;
  }
  .pt-sm-48-px {
    padding-top: 48px !important;
  }
  .pr-sm-48-px {
    padding-right: 48px !important;
  }
  .pb-sm-48-px {
    padding-bottom: 48px !important;
  }
  .pl-sm-48-px {
    padding-left: 48px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-64 {
    gap: 64px !important;
  }
  .m-sm-64-px {
    margin: 64px !important;
  }
  .my-sm-64-px {
    margin-top: 64px !important;
    margin-bottom: 64px !important;
  }
  .mx-sm-64-px {
    margin-left: 64px !important;
    margin-right: 64px !important;
  }
  .mt-sm-64-px {
    margin-top: 64px !important;
  }
  .mr-sm-64-px {
    margin-right: 64px !important;
  }
  .mb-sm-64-px {
    margin-bottom: 64px !important;
  }
  .ml-sm-64-px {
    margin-left: 64px !important;
  }
  .p-sm-64-px {
    padding: 64px !important;
  }
  .py-sm-64-px {
    padding-top: 64px !important;
    padding-bottom: 64px !important;
  }
  .px-sm-64-px {
    padding-left: 64px !important;
    padding-right: 64px !important;
  }
  .pt-sm-64-px {
    padding-top: 64px !important;
  }
  .pr-sm-64-px {
    padding-right: 64px !important;
  }
  .pb-sm-64-px {
    padding-bottom: 64px !important;
  }
  .pl-sm-64-px {
    padding-left: 64px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-80 {
    gap: 80px !important;
  }
  .m-sm-80-px {
    margin: 80px !important;
  }
  .my-sm-80-px {
    margin-top: 80px !important;
    margin-bottom: 80px !important;
  }
  .mx-sm-80-px {
    margin-left: 80px !important;
    margin-right: 80px !important;
  }
  .mt-sm-80-px {
    margin-top: 80px !important;
  }
  .mr-sm-80-px {
    margin-right: 80px !important;
  }
  .mb-sm-80-px {
    margin-bottom: 80px !important;
  }
  .ml-sm-80-px {
    margin-left: 80px !important;
  }
  .p-sm-80-px {
    padding: 80px !important;
  }
  .py-sm-80-px {
    padding-top: 80px !important;
    padding-bottom: 80px !important;
  }
  .px-sm-80-px {
    padding-left: 80px !important;
    padding-right: 80px !important;
  }
  .pt-sm-80-px {
    padding-top: 80px !important;
  }
  .pr-sm-80-px {
    padding-right: 80px !important;
  }
  .pb-sm-80-px {
    padding-bottom: 80px !important;
  }
  .pl-sm-80-px {
    padding-left: 80px !important;
  }
}

@media (min-width: 390px) {
  .gap-sm-92 {
    gap: 92px !important;
  }
  .m-sm-92-px {
    margin: 92px !important;
  }
  .my-sm-92-px {
    margin-top: 92px !important;
    margin-bottom: 92px !important;
  }
  .mx-sm-92-px {
    margin-left: 92px !important;
    margin-right: 92px !important;
  }
  .mt-sm-92-px {
    margin-top: 92px !important;
  }
  .mr-sm-92-px {
    margin-right: 92px !important;
  }
  .mb-sm-92-px {
    margin-bottom: 92px !important;
  }
  .ml-sm-92-px {
    margin-left: 92px !important;
  }
  .p-sm-92-px {
    padding: 92px !important;
  }
  .py-sm-92-px {
    padding-top: 92px !important;
    padding-bottom: 92px !important;
  }
  .px-sm-92-px {
    padding-left: 92px !important;
    padding-right: 92px !important;
  }
  .pt-sm-92-px {
    padding-top: 92px !important;
  }
  .pr-sm-92-px {
    padding-right: 92px !important;
  }
  .pb-sm-92-px {
    padding-bottom: 92px !important;
  }
  .pl-sm-92-px {
    padding-left: 92px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-0 {
    gap: 0px !important;
  }
  .m-md-0-px {
    margin: 0px !important;
  }
  .my-md-0-px {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  .mx-md-0-px {
    margin-left: 0px !important;
    margin-right: 0px !important;
  }
  .mt-md-0-px {
    margin-top: 0px !important;
  }
  .mr-md-0-px {
    margin-right: 0px !important;
  }
  .mb-md-0-px {
    margin-bottom: 0px !important;
  }
  .ml-md-0-px {
    margin-left: 0px !important;
  }
  .p-md-0-px {
    padding: 0px !important;
  }
  .py-md-0-px {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }
  .px-md-0-px {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .pt-md-0-px {
    padding-top: 0px !important;
  }
  .pr-md-0-px {
    padding-right: 0px !important;
  }
  .pb-md-0-px {
    padding-bottom: 0px !important;
  }
  .pl-md-0-px {
    padding-left: 0px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-2 {
    gap: 2px !important;
  }
  .m-md-2-px {
    margin: 2px !important;
  }
  .my-md-2-px {
    margin-top: 2px !important;
    margin-bottom: 2px !important;
  }
  .mx-md-2-px {
    margin-left: 2px !important;
    margin-right: 2px !important;
  }
  .mt-md-2-px {
    margin-top: 2px !important;
  }
  .mr-md-2-px {
    margin-right: 2px !important;
  }
  .mb-md-2-px {
    margin-bottom: 2px !important;
  }
  .ml-md-2-px {
    margin-left: 2px !important;
  }
  .p-md-2-px {
    padding: 2px !important;
  }
  .py-md-2-px {
    padding-top: 2px !important;
    padding-bottom: 2px !important;
  }
  .px-md-2-px {
    padding-left: 2px !important;
    padding-right: 2px !important;
  }
  .pt-md-2-px {
    padding-top: 2px !important;
  }
  .pr-md-2-px {
    padding-right: 2px !important;
  }
  .pb-md-2-px {
    padding-bottom: 2px !important;
  }
  .pl-md-2-px {
    padding-left: 2px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-4 {
    gap: 4px !important;
  }
  .m-md-4-px {
    margin: 4px !important;
  }
  .my-md-4-px {
    margin-top: 4px !important;
    margin-bottom: 4px !important;
  }
  .mx-md-4-px {
    margin-left: 4px !important;
    margin-right: 4px !important;
  }
  .mt-md-4-px {
    margin-top: 4px !important;
  }
  .mr-md-4-px {
    margin-right: 4px !important;
  }
  .mb-md-4-px {
    margin-bottom: 4px !important;
  }
  .ml-md-4-px {
    margin-left: 4px !important;
  }
  .p-md-4-px {
    padding: 4px !important;
  }
  .py-md-4-px {
    padding-top: 4px !important;
    padding-bottom: 4px !important;
  }
  .px-md-4-px {
    padding-left: 4px !important;
    padding-right: 4px !important;
  }
  .pt-md-4-px {
    padding-top: 4px !important;
  }
  .pr-md-4-px {
    padding-right: 4px !important;
  }
  .pb-md-4-px {
    padding-bottom: 4px !important;
  }
  .pl-md-4-px {
    padding-left: 4px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-6 {
    gap: 6px !important;
  }
  .m-md-6-px {
    margin: 6px !important;
  }
  .my-md-6-px {
    margin-top: 6px !important;
    margin-bottom: 6px !important;
  }
  .mx-md-6-px {
    margin-left: 6px !important;
    margin-right: 6px !important;
  }
  .mt-md-6-px {
    margin-top: 6px !important;
  }
  .mr-md-6-px {
    margin-right: 6px !important;
  }
  .mb-md-6-px {
    margin-bottom: 6px !important;
  }
  .ml-md-6-px {
    margin-left: 6px !important;
  }
  .p-md-6-px {
    padding: 6px !important;
  }
  .py-md-6-px {
    padding-top: 6px !important;
    padding-bottom: 6px !important;
  }
  .px-md-6-px {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }
  .pt-md-6-px {
    padding-top: 6px !important;
  }
  .pr-md-6-px {
    padding-right: 6px !important;
  }
  .pb-md-6-px {
    padding-bottom: 6px !important;
  }
  .pl-md-6-px {
    padding-left: 6px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-8 {
    gap: 8px !important;
  }
  .m-md-8-px {
    margin: 8px !important;
  }
  .my-md-8-px {
    margin-top: 8px !important;
    margin-bottom: 8px !important;
  }
  .mx-md-8-px {
    margin-left: 8px !important;
    margin-right: 8px !important;
  }
  .mt-md-8-px {
    margin-top: 8px !important;
  }
  .mr-md-8-px {
    margin-right: 8px !important;
  }
  .mb-md-8-px {
    margin-bottom: 8px !important;
  }
  .ml-md-8-px {
    margin-left: 8px !important;
  }
  .p-md-8-px {
    padding: 8px !important;
  }
  .py-md-8-px {
    padding-top: 8px !important;
    padding-bottom: 8px !important;
  }
  .px-md-8-px {
    padding-left: 8px !important;
    padding-right: 8px !important;
  }
  .pt-md-8-px {
    padding-top: 8px !important;
  }
  .pr-md-8-px {
    padding-right: 8px !important;
  }
  .pb-md-8-px {
    padding-bottom: 8px !important;
  }
  .pl-md-8-px {
    padding-left: 8px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-9 {
    gap: 9px !important;
  }
  .m-md-9-px {
    margin: 9px !important;
  }
  .my-md-9-px {
    margin-top: 9px !important;
    margin-bottom: 9px !important;
  }
  .mx-md-9-px {
    margin-left: 9px !important;
    margin-right: 9px !important;
  }
  .mt-md-9-px {
    margin-top: 9px !important;
  }
  .mr-md-9-px {
    margin-right: 9px !important;
  }
  .mb-md-9-px {
    margin-bottom: 9px !important;
  }
  .ml-md-9-px {
    margin-left: 9px !important;
  }
  .p-md-9-px {
    padding: 9px !important;
  }
  .py-md-9-px {
    padding-top: 9px !important;
    padding-bottom: 9px !important;
  }
  .px-md-9-px {
    padding-left: 9px !important;
    padding-right: 9px !important;
  }
  .pt-md-9-px {
    padding-top: 9px !important;
  }
  .pr-md-9-px {
    padding-right: 9px !important;
  }
  .pb-md-9-px {
    padding-bottom: 9px !important;
  }
  .pl-md-9-px {
    padding-left: 9px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-10 {
    gap: 10px !important;
  }
  .m-md-10-px {
    margin: 10px !important;
  }
  .my-md-10-px {
    margin-top: 10px !important;
    margin-bottom: 10px !important;
  }
  .mx-md-10-px {
    margin-left: 10px !important;
    margin-right: 10px !important;
  }
  .mt-md-10-px {
    margin-top: 10px !important;
  }
  .mr-md-10-px {
    margin-right: 10px !important;
  }
  .mb-md-10-px {
    margin-bottom: 10px !important;
  }
  .ml-md-10-px {
    margin-left: 10px !important;
  }
  .p-md-10-px {
    padding: 10px !important;
  }
  .py-md-10-px {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
  }
  .px-md-10-px {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }
  .pt-md-10-px {
    padding-top: 10px !important;
  }
  .pr-md-10-px {
    padding-right: 10px !important;
  }
  .pb-md-10-px {
    padding-bottom: 10px !important;
  }
  .pl-md-10-px {
    padding-left: 10px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-12 {
    gap: 12px !important;
  }
  .m-md-12-px {
    margin: 12px !important;
  }
  .my-md-12-px {
    margin-top: 12px !important;
    margin-bottom: 12px !important;
  }
  .mx-md-12-px {
    margin-left: 12px !important;
    margin-right: 12px !important;
  }
  .mt-md-12-px {
    margin-top: 12px !important;
  }
  .mr-md-12-px {
    margin-right: 12px !important;
  }
  .mb-md-12-px {
    margin-bottom: 12px !important;
  }
  .ml-md-12-px {
    margin-left: 12px !important;
  }
  .p-md-12-px {
    padding: 12px !important;
  }
  .py-md-12-px {
    padding-top: 12px !important;
    padding-bottom: 12px !important;
  }
  .px-md-12-px {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
  .pt-md-12-px {
    padding-top: 12px !important;
  }
  .pr-md-12-px {
    padding-right: 12px !important;
  }
  .pb-md-12-px {
    padding-bottom: 12px !important;
  }
  .pl-md-12-px {
    padding-left: 12px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-16 {
    gap: 16px !important;
  }
  .m-md-16-px {
    margin: 16px !important;
  }
  .my-md-16-px {
    margin-top: 16px !important;
    margin-bottom: 16px !important;
  }
  .mx-md-16-px {
    margin-left: 16px !important;
    margin-right: 16px !important;
  }
  .mt-md-16-px {
    margin-top: 16px !important;
  }
  .mr-md-16-px {
    margin-right: 16px !important;
  }
  .mb-md-16-px {
    margin-bottom: 16px !important;
  }
  .ml-md-16-px {
    margin-left: 16px !important;
  }
  .p-md-16-px {
    padding: 16px !important;
  }
  .py-md-16-px {
    padding-top: 16px !important;
    padding-bottom: 16px !important;
  }
  .px-md-16-px {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  .pt-md-16-px {
    padding-top: 16px !important;
  }
  .pr-md-16-px {
    padding-right: 16px !important;
  }
  .pb-md-16-px {
    padding-bottom: 16px !important;
  }
  .pl-md-16-px {
    padding-left: 16px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-20 {
    gap: 20px !important;
  }
  .m-md-20-px {
    margin: 20px !important;
  }
  .my-md-20-px {
    margin-top: 20px !important;
    margin-bottom: 20px !important;
  }
  .mx-md-20-px {
    margin-left: 20px !important;
    margin-right: 20px !important;
  }
  .mt-md-20-px {
    margin-top: 20px !important;
  }
  .mr-md-20-px {
    margin-right: 20px !important;
  }
  .mb-md-20-px {
    margin-bottom: 20px !important;
  }
  .ml-md-20-px {
    margin-left: 20px !important;
  }
  .p-md-20-px {
    padding: 20px !important;
  }
  .py-md-20-px {
    padding-top: 20px !important;
    padding-bottom: 20px !important;
  }
  .px-md-20-px {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  .pt-md-20-px {
    padding-top: 20px !important;
  }
  .pr-md-20-px {
    padding-right: 20px !important;
  }
  .pb-md-20-px {
    padding-bottom: 20px !important;
  }
  .pl-md-20-px {
    padding-left: 20px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-24 {
    gap: 24px !important;
  }
  .m-md-24-px {
    margin: 24px !important;
  }
  .my-md-24-px {
    margin-top: 24px !important;
    margin-bottom: 24px !important;
  }
  .mx-md-24-px {
    margin-left: 24px !important;
    margin-right: 24px !important;
  }
  .mt-md-24-px {
    margin-top: 24px !important;
  }
  .mr-md-24-px {
    margin-right: 24px !important;
  }
  .mb-md-24-px {
    margin-bottom: 24px !important;
  }
  .ml-md-24-px {
    margin-left: 24px !important;
  }
  .p-md-24-px {
    padding: 24px !important;
  }
  .py-md-24-px {
    padding-top: 24px !important;
    padding-bottom: 24px !important;
  }
  .px-md-24-px {
    padding-left: 24px !important;
    padding-right: 24px !important;
  }
  .pt-md-24-px {
    padding-top: 24px !important;
  }
  .pr-md-24-px {
    padding-right: 24px !important;
  }
  .pb-md-24-px {
    padding-bottom: 24px !important;
  }
  .pl-md-24-px {
    padding-left: 24px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-25 {
    gap: 25px !important;
  }
  .m-md-25-px {
    margin: 25px !important;
  }
  .my-md-25-px {
    margin-top: 25px !important;
    margin-bottom: 25px !important;
  }
  .mx-md-25-px {
    margin-left: 25px !important;
    margin-right: 25px !important;
  }
  .mt-md-25-px {
    margin-top: 25px !important;
  }
  .mr-md-25-px {
    margin-right: 25px !important;
  }
  .mb-md-25-px {
    margin-bottom: 25px !important;
  }
  .ml-md-25-px {
    margin-left: 25px !important;
  }
  .p-md-25-px {
    padding: 25px !important;
  }
  .py-md-25-px {
    padding-top: 25px !important;
    padding-bottom: 25px !important;
  }
  .px-md-25-px {
    padding-left: 25px !important;
    padding-right: 25px !important;
  }
  .pt-md-25-px {
    padding-top: 25px !important;
  }
  .pr-md-25-px {
    padding-right: 25px !important;
  }
  .pb-md-25-px {
    padding-bottom: 25px !important;
  }
  .pl-md-25-px {
    padding-left: 25px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-26 {
    gap: 26px !important;
  }
  .m-md-26-px {
    margin: 26px !important;
  }
  .my-md-26-px {
    margin-top: 26px !important;
    margin-bottom: 26px !important;
  }
  .mx-md-26-px {
    margin-left: 26px !important;
    margin-right: 26px !important;
  }
  .mt-md-26-px {
    margin-top: 26px !important;
  }
  .mr-md-26-px {
    margin-right: 26px !important;
  }
  .mb-md-26-px {
    margin-bottom: 26px !important;
  }
  .ml-md-26-px {
    margin-left: 26px !important;
  }
  .p-md-26-px {
    padding: 26px !important;
  }
  .py-md-26-px {
    padding-top: 26px !important;
    padding-bottom: 26px !important;
  }
  .px-md-26-px {
    padding-left: 26px !important;
    padding-right: 26px !important;
  }
  .pt-md-26-px {
    padding-top: 26px !important;
  }
  .pr-md-26-px {
    padding-right: 26px !important;
  }
  .pb-md-26-px {
    padding-bottom: 26px !important;
  }
  .pl-md-26-px {
    padding-left: 26px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-28 {
    gap: 28px !important;
  }
  .m-md-28-px {
    margin: 28px !important;
  }
  .my-md-28-px {
    margin-top: 28px !important;
    margin-bottom: 28px !important;
  }
  .mx-md-28-px {
    margin-left: 28px !important;
    margin-right: 28px !important;
  }
  .mt-md-28-px {
    margin-top: 28px !important;
  }
  .mr-md-28-px {
    margin-right: 28px !important;
  }
  .mb-md-28-px {
    margin-bottom: 28px !important;
  }
  .ml-md-28-px {
    margin-left: 28px !important;
  }
  .p-md-28-px {
    padding: 28px !important;
  }
  .py-md-28-px {
    padding-top: 28px !important;
    padding-bottom: 28px !important;
  }
  .px-md-28-px {
    padding-left: 28px !important;
    padding-right: 28px !important;
  }
  .pt-md-28-px {
    padding-top: 28px !important;
  }
  .pr-md-28-px {
    padding-right: 28px !important;
  }
  .pb-md-28-px {
    padding-bottom: 28px !important;
  }
  .pl-md-28-px {
    padding-left: 28px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-30 {
    gap: 30px !important;
  }
  .m-md-30-px {
    margin: 30px !important;
  }
  .my-md-30-px {
    margin-top: 30px !important;
    margin-bottom: 30px !important;
  }
  .mx-md-30-px {
    margin-left: 30px !important;
    margin-right: 30px !important;
  }
  .mt-md-30-px {
    margin-top: 30px !important;
  }
  .mr-md-30-px {
    margin-right: 30px !important;
  }
  .mb-md-30-px {
    margin-bottom: 30px !important;
  }
  .ml-md-30-px {
    margin-left: 30px !important;
  }
  .p-md-30-px {
    padding: 30px !important;
  }
  .py-md-30-px {
    padding-top: 30px !important;
    padding-bottom: 30px !important;
  }
  .px-md-30-px {
    padding-left: 30px !important;
    padding-right: 30px !important;
  }
  .pt-md-30-px {
    padding-top: 30px !important;
  }
  .pr-md-30-px {
    padding-right: 30px !important;
  }
  .pb-md-30-px {
    padding-bottom: 30px !important;
  }
  .pl-md-30-px {
    padding-left: 30px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-32 {
    gap: 32px !important;
  }
  .m-md-32-px {
    margin: 32px !important;
  }
  .my-md-32-px {
    margin-top: 32px !important;
    margin-bottom: 32px !important;
  }
  .mx-md-32-px {
    margin-left: 32px !important;
    margin-right: 32px !important;
  }
  .mt-md-32-px {
    margin-top: 32px !important;
  }
  .mr-md-32-px {
    margin-right: 32px !important;
  }
  .mb-md-32-px {
    margin-bottom: 32px !important;
  }
  .ml-md-32-px {
    margin-left: 32px !important;
  }
  .p-md-32-px, .info-page-card, .feedback-card {
    padding: 32px !important;
  }
  .py-md-32-px, .address-card .address-card-content {
    padding-top: 32px !important;
    padding-bottom: 32px !important;
  }
  .px-md-32-px {
    padding-left: 32px !important;
    padding-right: 32px !important;
  }
  .pt-md-32-px {
    padding-top: 32px !important;
  }
  .pr-md-32-px {
    padding-right: 32px !important;
  }
  .pb-md-32-px {
    padding-bottom: 32px !important;
  }
  .pl-md-32-px {
    padding-left: 32px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-40 {
    gap: 40px !important;
  }
  .m-md-40-px {
    margin: 40px !important;
  }
  .my-md-40-px {
    margin-top: 40px !important;
    margin-bottom: 40px !important;
  }
  .mx-md-40-px {
    margin-left: 40px !important;
    margin-right: 40px !important;
  }
  .mt-md-40-px {
    margin-top: 40px !important;
  }
  .mr-md-40-px {
    margin-right: 40px !important;
  }
  .mb-md-40-px {
    margin-bottom: 40px !important;
  }
  .ml-md-40-px {
    margin-left: 40px !important;
  }
  .p-md-40-px {
    padding: 40px !important;
  }
  .py-md-40-px {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
  }
  .px-md-40-px {
    padding-left: 40px !important;
    padding-right: 40px !important;
  }
  .pt-md-40-px {
    padding-top: 40px !important;
  }
  .pr-md-40-px {
    padding-right: 40px !important;
  }
  .pb-md-40-px {
    padding-bottom: 40px !important;
  }
  .pl-md-40-px {
    padding-left: 40px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-48 {
    gap: 48px !important;
  }
  .m-md-48-px {
    margin: 48px !important;
  }
  .my-md-48-px {
    margin-top: 48px !important;
    margin-bottom: 48px !important;
  }
  .mx-md-48-px {
    margin-left: 48px !important;
    margin-right: 48px !important;
  }
  .mt-md-48-px {
    margin-top: 48px !important;
  }
  .mr-md-48-px {
    margin-right: 48px !important;
  }
  .mb-md-48-px {
    margin-bottom: 48px !important;
  }
  .ml-md-48-px {
    margin-left: 48px !important;
  }
  .p-md-48-px {
    padding: 48px !important;
  }
  .py-md-48-px {
    padding-top: 48px !important;
    padding-bottom: 48px !important;
  }
  .px-md-48-px {
    padding-left: 48px !important;
    padding-right: 48px !important;
  }
  .pt-md-48-px {
    padding-top: 48px !important;
  }
  .pr-md-48-px {
    padding-right: 48px !important;
  }
  .pb-md-48-px {
    padding-bottom: 48px !important;
  }
  .pl-md-48-px {
    padding-left: 48px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-64 {
    gap: 64px !important;
  }
  .m-md-64-px {
    margin: 64px !important;
  }
  .my-md-64-px {
    margin-top: 64px !important;
    margin-bottom: 64px !important;
  }
  .mx-md-64-px {
    margin-left: 64px !important;
    margin-right: 64px !important;
  }
  .mt-md-64-px {
    margin-top: 64px !important;
  }
  .mr-md-64-px {
    margin-right: 64px !important;
  }
  .mb-md-64-px {
    margin-bottom: 64px !important;
  }
  .ml-md-64-px {
    margin-left: 64px !important;
  }
  .p-md-64-px {
    padding: 64px !important;
  }
  .py-md-64-px {
    padding-top: 64px !important;
    padding-bottom: 64px !important;
  }
  .px-md-64-px {
    padding-left: 64px !important;
    padding-right: 64px !important;
  }
  .pt-md-64-px {
    padding-top: 64px !important;
  }
  .pr-md-64-px {
    padding-right: 64px !important;
  }
  .pb-md-64-px {
    padding-bottom: 64px !important;
  }
  .pl-md-64-px {
    padding-left: 64px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-80 {
    gap: 80px !important;
  }
  .m-md-80-px {
    margin: 80px !important;
  }
  .my-md-80-px {
    margin-top: 80px !important;
    margin-bottom: 80px !important;
  }
  .mx-md-80-px {
    margin-left: 80px !important;
    margin-right: 80px !important;
  }
  .mt-md-80-px {
    margin-top: 80px !important;
  }
  .mr-md-80-px {
    margin-right: 80px !important;
  }
  .mb-md-80-px {
    margin-bottom: 80px !important;
  }
  .ml-md-80-px {
    margin-left: 80px !important;
  }
  .p-md-80-px {
    padding: 80px !important;
  }
  .py-md-80-px {
    padding-top: 80px !important;
    padding-bottom: 80px !important;
  }
  .px-md-80-px {
    padding-left: 80px !important;
    padding-right: 80px !important;
  }
  .pt-md-80-px {
    padding-top: 80px !important;
  }
  .pr-md-80-px {
    padding-right: 80px !important;
  }
  .pb-md-80-px {
    padding-bottom: 80px !important;
  }
  .pl-md-80-px {
    padding-left: 80px !important;
  }
}

@media (min-width: 600px) {
  .gap-md-92 {
    gap: 92px !important;
  }
  .m-md-92-px {
    margin: 92px !important;
  }
  .my-md-92-px {
    margin-top: 92px !important;
    margin-bottom: 92px !important;
  }
  .mx-md-92-px {
    margin-left: 92px !important;
    margin-right: 92px !important;
  }
  .mt-md-92-px {
    margin-top: 92px !important;
  }
  .mr-md-92-px {
    margin-right: 92px !important;
  }
  .mb-md-92-px {
    margin-bottom: 92px !important;
  }
  .ml-md-92-px {
    margin-left: 92px !important;
  }
  .p-md-92-px {
    padding: 92px !important;
  }
  .py-md-92-px {
    padding-top: 92px !important;
    padding-bottom: 92px !important;
  }
  .px-md-92-px {
    padding-left: 92px !important;
    padding-right: 92px !important;
  }
  .pt-md-92-px {
    padding-top: 92px !important;
  }
  .pr-md-92-px {
    padding-right: 92px !important;
  }
  .pb-md-92-px {
    padding-bottom: 92px !important;
  }
  .pl-md-92-px {
    padding-left: 92px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-0 {
    gap: 0px !important;
  }
  .m-lg-0-px {
    margin: 0px !important;
  }
  .my-lg-0-px {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  .mx-lg-0-px {
    margin-left: 0px !important;
    margin-right: 0px !important;
  }
  .mt-lg-0-px {
    margin-top: 0px !important;
  }
  .mr-lg-0-px {
    margin-right: 0px !important;
  }
  .mb-lg-0-px {
    margin-bottom: 0px !important;
  }
  .ml-lg-0-px {
    margin-left: 0px !important;
  }
  .p-lg-0-px {
    padding: 0px !important;
  }
  .py-lg-0-px {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }
  .px-lg-0-px {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .pt-lg-0-px {
    padding-top: 0px !important;
  }
  .pr-lg-0-px {
    padding-right: 0px !important;
  }
  .pb-lg-0-px {
    padding-bottom: 0px !important;
  }
  .pl-lg-0-px {
    padding-left: 0px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-2 {
    gap: 2px !important;
  }
  .m-lg-2-px {
    margin: 2px !important;
  }
  .my-lg-2-px {
    margin-top: 2px !important;
    margin-bottom: 2px !important;
  }
  .mx-lg-2-px {
    margin-left: 2px !important;
    margin-right: 2px !important;
  }
  .mt-lg-2-px {
    margin-top: 2px !important;
  }
  .mr-lg-2-px {
    margin-right: 2px !important;
  }
  .mb-lg-2-px {
    margin-bottom: 2px !important;
  }
  .ml-lg-2-px {
    margin-left: 2px !important;
  }
  .p-lg-2-px {
    padding: 2px !important;
  }
  .py-lg-2-px {
    padding-top: 2px !important;
    padding-bottom: 2px !important;
  }
  .px-lg-2-px {
    padding-left: 2px !important;
    padding-right: 2px !important;
  }
  .pt-lg-2-px {
    padding-top: 2px !important;
  }
  .pr-lg-2-px {
    padding-right: 2px !important;
  }
  .pb-lg-2-px {
    padding-bottom: 2px !important;
  }
  .pl-lg-2-px {
    padding-left: 2px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-4 {
    gap: 4px !important;
  }
  .m-lg-4-px {
    margin: 4px !important;
  }
  .my-lg-4-px {
    margin-top: 4px !important;
    margin-bottom: 4px !important;
  }
  .mx-lg-4-px {
    margin-left: 4px !important;
    margin-right: 4px !important;
  }
  .mt-lg-4-px {
    margin-top: 4px !important;
  }
  .mr-lg-4-px {
    margin-right: 4px !important;
  }
  .mb-lg-4-px {
    margin-bottom: 4px !important;
  }
  .ml-lg-4-px {
    margin-left: 4px !important;
  }
  .p-lg-4-px {
    padding: 4px !important;
  }
  .py-lg-4-px {
    padding-top: 4px !important;
    padding-bottom: 4px !important;
  }
  .px-lg-4-px {
    padding-left: 4px !important;
    padding-right: 4px !important;
  }
  .pt-lg-4-px {
    padding-top: 4px !important;
  }
  .pr-lg-4-px {
    padding-right: 4px !important;
  }
  .pb-lg-4-px {
    padding-bottom: 4px !important;
  }
  .pl-lg-4-px {
    padding-left: 4px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-6 {
    gap: 6px !important;
  }
  .m-lg-6-px {
    margin: 6px !important;
  }
  .my-lg-6-px {
    margin-top: 6px !important;
    margin-bottom: 6px !important;
  }
  .mx-lg-6-px {
    margin-left: 6px !important;
    margin-right: 6px !important;
  }
  .mt-lg-6-px {
    margin-top: 6px !important;
  }
  .mr-lg-6-px {
    margin-right: 6px !important;
  }
  .mb-lg-6-px {
    margin-bottom: 6px !important;
  }
  .ml-lg-6-px {
    margin-left: 6px !important;
  }
  .p-lg-6-px {
    padding: 6px !important;
  }
  .py-lg-6-px {
    padding-top: 6px !important;
    padding-bottom: 6px !important;
  }
  .px-lg-6-px {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }
  .pt-lg-6-px {
    padding-top: 6px !important;
  }
  .pr-lg-6-px {
    padding-right: 6px !important;
  }
  .pb-lg-6-px {
    padding-bottom: 6px !important;
  }
  .pl-lg-6-px {
    padding-left: 6px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-8 {
    gap: 8px !important;
  }
  .m-lg-8-px {
    margin: 8px !important;
  }
  .my-lg-8-px {
    margin-top: 8px !important;
    margin-bottom: 8px !important;
  }
  .mx-lg-8-px {
    margin-left: 8px !important;
    margin-right: 8px !important;
  }
  .mt-lg-8-px {
    margin-top: 8px !important;
  }
  .mr-lg-8-px {
    margin-right: 8px !important;
  }
  .mb-lg-8-px {
    margin-bottom: 8px !important;
  }
  .ml-lg-8-px {
    margin-left: 8px !important;
  }
  .p-lg-8-px {
    padding: 8px !important;
  }
  .py-lg-8-px {
    padding-top: 8px !important;
    padding-bottom: 8px !important;
  }
  .px-lg-8-px {
    padding-left: 8px !important;
    padding-right: 8px !important;
  }
  .pt-lg-8-px {
    padding-top: 8px !important;
  }
  .pr-lg-8-px {
    padding-right: 8px !important;
  }
  .pb-lg-8-px {
    padding-bottom: 8px !important;
  }
  .pl-lg-8-px {
    padding-left: 8px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-9 {
    gap: 9px !important;
  }
  .m-lg-9-px {
    margin: 9px !important;
  }
  .my-lg-9-px {
    margin-top: 9px !important;
    margin-bottom: 9px !important;
  }
  .mx-lg-9-px {
    margin-left: 9px !important;
    margin-right: 9px !important;
  }
  .mt-lg-9-px {
    margin-top: 9px !important;
  }
  .mr-lg-9-px {
    margin-right: 9px !important;
  }
  .mb-lg-9-px {
    margin-bottom: 9px !important;
  }
  .ml-lg-9-px {
    margin-left: 9px !important;
  }
  .p-lg-9-px {
    padding: 9px !important;
  }
  .py-lg-9-px {
    padding-top: 9px !important;
    padding-bottom: 9px !important;
  }
  .px-lg-9-px {
    padding-left: 9px !important;
    padding-right: 9px !important;
  }
  .pt-lg-9-px {
    padding-top: 9px !important;
  }
  .pr-lg-9-px {
    padding-right: 9px !important;
  }
  .pb-lg-9-px {
    padding-bottom: 9px !important;
  }
  .pl-lg-9-px {
    padding-left: 9px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-10 {
    gap: 10px !important;
  }
  .m-lg-10-px {
    margin: 10px !important;
  }
  .my-lg-10-px {
    margin-top: 10px !important;
    margin-bottom: 10px !important;
  }
  .mx-lg-10-px {
    margin-left: 10px !important;
    margin-right: 10px !important;
  }
  .mt-lg-10-px {
    margin-top: 10px !important;
  }
  .mr-lg-10-px {
    margin-right: 10px !important;
  }
  .mb-lg-10-px {
    margin-bottom: 10px !important;
  }
  .ml-lg-10-px {
    margin-left: 10px !important;
  }
  .p-lg-10-px {
    padding: 10px !important;
  }
  .py-lg-10-px {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
  }
  .px-lg-10-px {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }
  .pt-lg-10-px {
    padding-top: 10px !important;
  }
  .pr-lg-10-px {
    padding-right: 10px !important;
  }
  .pb-lg-10-px {
    padding-bottom: 10px !important;
  }
  .pl-lg-10-px {
    padding-left: 10px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-12 {
    gap: 12px !important;
  }
  .m-lg-12-px {
    margin: 12px !important;
  }
  .my-lg-12-px {
    margin-top: 12px !important;
    margin-bottom: 12px !important;
  }
  .mx-lg-12-px {
    margin-left: 12px !important;
    margin-right: 12px !important;
  }
  .mt-lg-12-px {
    margin-top: 12px !important;
  }
  .mr-lg-12-px {
    margin-right: 12px !important;
  }
  .mb-lg-12-px {
    margin-bottom: 12px !important;
  }
  .ml-lg-12-px {
    margin-left: 12px !important;
  }
  .p-lg-12-px {
    padding: 12px !important;
  }
  .py-lg-12-px {
    padding-top: 12px !important;
    padding-bottom: 12px !important;
  }
  .px-lg-12-px {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
  .pt-lg-12-px {
    padding-top: 12px !important;
  }
  .pr-lg-12-px {
    padding-right: 12px !important;
  }
  .pb-lg-12-px {
    padding-bottom: 12px !important;
  }
  .pl-lg-12-px {
    padding-left: 12px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-16 {
    gap: 16px !important;
  }
  .m-lg-16-px {
    margin: 16px !important;
  }
  .my-lg-16-px {
    margin-top: 16px !important;
    margin-bottom: 16px !important;
  }
  .mx-lg-16-px {
    margin-left: 16px !important;
    margin-right: 16px !important;
  }
  .mt-lg-16-px {
    margin-top: 16px !important;
  }
  .mr-lg-16-px {
    margin-right: 16px !important;
  }
  .mb-lg-16-px {
    margin-bottom: 16px !important;
  }
  .ml-lg-16-px {
    margin-left: 16px !important;
  }
  .p-lg-16-px {
    padding: 16px !important;
  }
  .py-lg-16-px {
    padding-top: 16px !important;
    padding-bottom: 16px !important;
  }
  .px-lg-16-px {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  .pt-lg-16-px {
    padding-top: 16px !important;
  }
  .pr-lg-16-px {
    padding-right: 16px !important;
  }
  .pb-lg-16-px {
    padding-bottom: 16px !important;
  }
  .pl-lg-16-px {
    padding-left: 16px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-20 {
    gap: 20px !important;
  }
  .m-lg-20-px {
    margin: 20px !important;
  }
  .my-lg-20-px {
    margin-top: 20px !important;
    margin-bottom: 20px !important;
  }
  .mx-lg-20-px {
    margin-left: 20px !important;
    margin-right: 20px !important;
  }
  .mt-lg-20-px {
    margin-top: 20px !important;
  }
  .mr-lg-20-px {
    margin-right: 20px !important;
  }
  .mb-lg-20-px {
    margin-bottom: 20px !important;
  }
  .ml-lg-20-px {
    margin-left: 20px !important;
  }
  .p-lg-20-px {
    padding: 20px !important;
  }
  .py-lg-20-px {
    padding-top: 20px !important;
    padding-bottom: 20px !important;
  }
  .px-lg-20-px {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  .pt-lg-20-px {
    padding-top: 20px !important;
  }
  .pr-lg-20-px {
    padding-right: 20px !important;
  }
  .pb-lg-20-px {
    padding-bottom: 20px !important;
  }
  .pl-lg-20-px {
    padding-left: 20px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-24 {
    gap: 24px !important;
  }
  .m-lg-24-px {
    margin: 24px !important;
  }
  .my-lg-24-px {
    margin-top: 24px !important;
    margin-bottom: 24px !important;
  }
  .mx-lg-24-px {
    margin-left: 24px !important;
    margin-right: 24px !important;
  }
  .mt-lg-24-px {
    margin-top: 24px !important;
  }
  .mr-lg-24-px {
    margin-right: 24px !important;
  }
  .mb-lg-24-px {
    margin-bottom: 24px !important;
  }
  .ml-lg-24-px {
    margin-left: 24px !important;
  }
  .p-lg-24-px {
    padding: 24px !important;
  }
  .py-lg-24-px {
    padding-top: 24px !important;
    padding-bottom: 24px !important;
  }
  .px-lg-24-px {
    padding-left: 24px !important;
    padding-right: 24px !important;
  }
  .pt-lg-24-px {
    padding-top: 24px !important;
  }
  .pr-lg-24-px {
    padding-right: 24px !important;
  }
  .pb-lg-24-px {
    padding-bottom: 24px !important;
  }
  .pl-lg-24-px {
    padding-left: 24px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-25 {
    gap: 25px !important;
  }
  .m-lg-25-px {
    margin: 25px !important;
  }
  .my-lg-25-px {
    margin-top: 25px !important;
    margin-bottom: 25px !important;
  }
  .mx-lg-25-px {
    margin-left: 25px !important;
    margin-right: 25px !important;
  }
  .mt-lg-25-px {
    margin-top: 25px !important;
  }
  .mr-lg-25-px {
    margin-right: 25px !important;
  }
  .mb-lg-25-px {
    margin-bottom: 25px !important;
  }
  .ml-lg-25-px {
    margin-left: 25px !important;
  }
  .p-lg-25-px {
    padding: 25px !important;
  }
  .py-lg-25-px {
    padding-top: 25px !important;
    padding-bottom: 25px !important;
  }
  .px-lg-25-px {
    padding-left: 25px !important;
    padding-right: 25px !important;
  }
  .pt-lg-25-px {
    padding-top: 25px !important;
  }
  .pr-lg-25-px {
    padding-right: 25px !important;
  }
  .pb-lg-25-px {
    padding-bottom: 25px !important;
  }
  .pl-lg-25-px {
    padding-left: 25px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-26 {
    gap: 26px !important;
  }
  .m-lg-26-px {
    margin: 26px !important;
  }
  .my-lg-26-px {
    margin-top: 26px !important;
    margin-bottom: 26px !important;
  }
  .mx-lg-26-px {
    margin-left: 26px !important;
    margin-right: 26px !important;
  }
  .mt-lg-26-px {
    margin-top: 26px !important;
  }
  .mr-lg-26-px {
    margin-right: 26px !important;
  }
  .mb-lg-26-px {
    margin-bottom: 26px !important;
  }
  .ml-lg-26-px {
    margin-left: 26px !important;
  }
  .p-lg-26-px {
    padding: 26px !important;
  }
  .py-lg-26-px {
    padding-top: 26px !important;
    padding-bottom: 26px !important;
  }
  .px-lg-26-px {
    padding-left: 26px !important;
    padding-right: 26px !important;
  }
  .pt-lg-26-px {
    padding-top: 26px !important;
  }
  .pr-lg-26-px {
    padding-right: 26px !important;
  }
  .pb-lg-26-px {
    padding-bottom: 26px !important;
  }
  .pl-lg-26-px {
    padding-left: 26px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-28 {
    gap: 28px !important;
  }
  .m-lg-28-px {
    margin: 28px !important;
  }
  .my-lg-28-px {
    margin-top: 28px !important;
    margin-bottom: 28px !important;
  }
  .mx-lg-28-px {
    margin-left: 28px !important;
    margin-right: 28px !important;
  }
  .mt-lg-28-px {
    margin-top: 28px !important;
  }
  .mr-lg-28-px {
    margin-right: 28px !important;
  }
  .mb-lg-28-px {
    margin-bottom: 28px !important;
  }
  .ml-lg-28-px {
    margin-left: 28px !important;
  }
  .p-lg-28-px {
    padding: 28px !important;
  }
  .py-lg-28-px {
    padding-top: 28px !important;
    padding-bottom: 28px !important;
  }
  .px-lg-28-px {
    padding-left: 28px !important;
    padding-right: 28px !important;
  }
  .pt-lg-28-px {
    padding-top: 28px !important;
  }
  .pr-lg-28-px {
    padding-right: 28px !important;
  }
  .pb-lg-28-px {
    padding-bottom: 28px !important;
  }
  .pl-lg-28-px {
    padding-left: 28px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-30 {
    gap: 30px !important;
  }
  .m-lg-30-px {
    margin: 30px !important;
  }
  .my-lg-30-px {
    margin-top: 30px !important;
    margin-bottom: 30px !important;
  }
  .mx-lg-30-px {
    margin-left: 30px !important;
    margin-right: 30px !important;
  }
  .mt-lg-30-px {
    margin-top: 30px !important;
  }
  .mr-lg-30-px {
    margin-right: 30px !important;
  }
  .mb-lg-30-px {
    margin-bottom: 30px !important;
  }
  .ml-lg-30-px {
    margin-left: 30px !important;
  }
  .p-lg-30-px {
    padding: 30px !important;
  }
  .py-lg-30-px {
    padding-top: 30px !important;
    padding-bottom: 30px !important;
  }
  .px-lg-30-px {
    padding-left: 30px !important;
    padding-right: 30px !important;
  }
  .pt-lg-30-px {
    padding-top: 30px !important;
  }
  .pr-lg-30-px {
    padding-right: 30px !important;
  }
  .pb-lg-30-px {
    padding-bottom: 30px !important;
  }
  .pl-lg-30-px {
    padding-left: 30px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-32 {
    gap: 32px !important;
  }
  .m-lg-32-px {
    margin: 32px !important;
  }
  .my-lg-32-px {
    margin-top: 32px !important;
    margin-bottom: 32px !important;
  }
  .mx-lg-32-px {
    margin-left: 32px !important;
    margin-right: 32px !important;
  }
  .mt-lg-32-px {
    margin-top: 32px !important;
  }
  .mr-lg-32-px {
    margin-right: 32px !important;
  }
  .mb-lg-32-px {
    margin-bottom: 32px !important;
  }
  .ml-lg-32-px {
    margin-left: 32px !important;
  }
  .p-lg-32-px {
    padding: 32px !important;
  }
  .py-lg-32-px {
    padding-top: 32px !important;
    padding-bottom: 32px !important;
  }
  .px-lg-32-px, .shorts-modal-body-content {
    padding-left: 32px !important;
    padding-right: 32px !important;
  }
  .pt-lg-32-px {
    padding-top: 32px !important;
  }
  .pr-lg-32-px {
    padding-right: 32px !important;
  }
  .pb-lg-32-px, .shorts-modal-body-content {
    padding-bottom: 32px !important;
  }
  .pl-lg-32-px {
    padding-left: 32px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-40, .info-page-container, .info-page-container-invert {
    gap: 40px !important;
  }
  .m-lg-40-px {
    margin: 40px !important;
  }
  .my-lg-40-px {
    margin-top: 40px !important;
    margin-bottom: 40px !important;
  }
  .mx-lg-40-px {
    margin-left: 40px !important;
    margin-right: 40px !important;
  }
  .mt-lg-40-px {
    margin-top: 40px !important;
  }
  .mr-lg-40-px {
    margin-right: 40px !important;
  }
  .mb-lg-40-px {
    margin-bottom: 40px !important;
  }
  .ml-lg-40-px {
    margin-left: 40px !important;
  }
  .p-lg-40-px, .info-page-card.article, .article.feedback-card {
    padding: 40px !important;
  }
  .py-lg-40-px {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
  }
  .px-lg-40-px {
    padding-left: 40px !important;
    padding-right: 40px !important;
  }
  .pt-lg-40-px {
    padding-top: 40px !important;
  }
  .pr-lg-40-px {
    padding-right: 40px !important;
  }
  .pb-lg-40-px {
    padding-bottom: 40px !important;
  }
  .pl-lg-40-px {
    padding-left: 40px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-48 {
    gap: 48px !important;
  }
  .m-lg-48-px {
    margin: 48px !important;
  }
  .my-lg-48-px {
    margin-top: 48px !important;
    margin-bottom: 48px !important;
  }
  .mx-lg-48-px {
    margin-left: 48px !important;
    margin-right: 48px !important;
  }
  .mt-lg-48-px {
    margin-top: 48px !important;
  }
  .mr-lg-48-px {
    margin-right: 48px !important;
  }
  .mb-lg-48-px {
    margin-bottom: 48px !important;
  }
  .ml-lg-48-px {
    margin-left: 48px !important;
  }
  .p-lg-48-px {
    padding: 48px !important;
  }
  .py-lg-48-px {
    padding-top: 48px !important;
    padding-bottom: 48px !important;
  }
  .px-lg-48-px {
    padding-left: 48px !important;
    padding-right: 48px !important;
  }
  .pt-lg-48-px {
    padding-top: 48px !important;
  }
  .pr-lg-48-px {
    padding-right: 48px !important;
  }
  .pb-lg-48-px {
    padding-bottom: 48px !important;
  }
  .pl-lg-48-px {
    padding-left: 48px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-64 {
    gap: 64px !important;
  }
  .m-lg-64-px {
    margin: 64px !important;
  }
  .my-lg-64-px {
    margin-top: 64px !important;
    margin-bottom: 64px !important;
  }
  .mx-lg-64-px {
    margin-left: 64px !important;
    margin-right: 64px !important;
  }
  .mt-lg-64-px {
    margin-top: 64px !important;
  }
  .mr-lg-64-px {
    margin-right: 64px !important;
  }
  .mb-lg-64-px {
    margin-bottom: 64px !important;
  }
  .ml-lg-64-px {
    margin-left: 64px !important;
  }
  .p-lg-64-px {
    padding: 64px !important;
  }
  .py-lg-64-px {
    padding-top: 64px !important;
    padding-bottom: 64px !important;
  }
  .px-lg-64-px {
    padding-left: 64px !important;
    padding-right: 64px !important;
  }
  .pt-lg-64-px {
    padding-top: 64px !important;
  }
  .pr-lg-64-px {
    padding-right: 64px !important;
  }
  .pb-lg-64-px {
    padding-bottom: 64px !important;
  }
  .pl-lg-64-px {
    padding-left: 64px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-80 {
    gap: 80px !important;
  }
  .m-lg-80-px {
    margin: 80px !important;
  }
  .my-lg-80-px {
    margin-top: 80px !important;
    margin-bottom: 80px !important;
  }
  .mx-lg-80-px {
    margin-left: 80px !important;
    margin-right: 80px !important;
  }
  .mt-lg-80-px {
    margin-top: 80px !important;
  }
  .mr-lg-80-px {
    margin-right: 80px !important;
  }
  .mb-lg-80-px {
    margin-bottom: 80px !important;
  }
  .ml-lg-80-px {
    margin-left: 80px !important;
  }
  .p-lg-80-px {
    padding: 80px !important;
  }
  .py-lg-80-px {
    padding-top: 80px !important;
    padding-bottom: 80px !important;
  }
  .px-lg-80-px {
    padding-left: 80px !important;
    padding-right: 80px !important;
  }
  .pt-lg-80-px {
    padding-top: 80px !important;
  }
  .pr-lg-80-px {
    padding-right: 80px !important;
  }
  .pb-lg-80-px {
    padding-bottom: 80px !important;
  }
  .pl-lg-80-px {
    padding-left: 80px !important;
  }
}

@media (min-width: 1000px) {
  .gap-lg-92 {
    gap: 92px !important;
  }
  .m-lg-92-px {
    margin: 92px !important;
  }
  .my-lg-92-px {
    margin-top: 92px !important;
    margin-bottom: 92px !important;
  }
  .mx-lg-92-px {
    margin-left: 92px !important;
    margin-right: 92px !important;
  }
  .mt-lg-92-px {
    margin-top: 92px !important;
  }
  .mr-lg-92-px {
    margin-right: 92px !important;
  }
  .mb-lg-92-px {
    margin-bottom: 92px !important;
  }
  .ml-lg-92-px {
    margin-left: 92px !important;
  }
  .p-lg-92-px {
    padding: 92px !important;
  }
  .py-lg-92-px {
    padding-top: 92px !important;
    padding-bottom: 92px !important;
  }
  .px-lg-92-px {
    padding-left: 92px !important;
    padding-right: 92px !important;
  }
  .pt-lg-92-px {
    padding-top: 92px !important;
  }
  .pr-lg-92-px {
    padding-right: 92px !important;
  }
  .pb-lg-92-px {
    padding-bottom: 92px !important;
  }
  .pl-lg-92-px {
    padding-left: 92px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-0 {
    gap: 0px !important;
  }
  .m-xl-0-px {
    margin: 0px !important;
  }
  .my-xl-0-px {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  .mx-xl-0-px {
    margin-left: 0px !important;
    margin-right: 0px !important;
  }
  .mt-xl-0-px {
    margin-top: 0px !important;
  }
  .mr-xl-0-px {
    margin-right: 0px !important;
  }
  .mb-xl-0-px {
    margin-bottom: 0px !important;
  }
  .ml-xl-0-px {
    margin-left: 0px !important;
  }
  .p-xl-0-px {
    padding: 0px !important;
  }
  .py-xl-0-px {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }
  .px-xl-0-px {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .pt-xl-0-px {
    padding-top: 0px !important;
  }
  .pr-xl-0-px {
    padding-right: 0px !important;
  }
  .pb-xl-0-px {
    padding-bottom: 0px !important;
  }
  .pl-xl-0-px {
    padding-left: 0px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-2 {
    gap: 2px !important;
  }
  .m-xl-2-px {
    margin: 2px !important;
  }
  .my-xl-2-px {
    margin-top: 2px !important;
    margin-bottom: 2px !important;
  }
  .mx-xl-2-px {
    margin-left: 2px !important;
    margin-right: 2px !important;
  }
  .mt-xl-2-px {
    margin-top: 2px !important;
  }
  .mr-xl-2-px {
    margin-right: 2px !important;
  }
  .mb-xl-2-px {
    margin-bottom: 2px !important;
  }
  .ml-xl-2-px {
    margin-left: 2px !important;
  }
  .p-xl-2-px {
    padding: 2px !important;
  }
  .py-xl-2-px {
    padding-top: 2px !important;
    padding-bottom: 2px !important;
  }
  .px-xl-2-px {
    padding-left: 2px !important;
    padding-right: 2px !important;
  }
  .pt-xl-2-px {
    padding-top: 2px !important;
  }
  .pr-xl-2-px {
    padding-right: 2px !important;
  }
  .pb-xl-2-px {
    padding-bottom: 2px !important;
  }
  .pl-xl-2-px {
    padding-left: 2px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-4 {
    gap: 4px !important;
  }
  .m-xl-4-px {
    margin: 4px !important;
  }
  .my-xl-4-px {
    margin-top: 4px !important;
    margin-bottom: 4px !important;
  }
  .mx-xl-4-px {
    margin-left: 4px !important;
    margin-right: 4px !important;
  }
  .mt-xl-4-px {
    margin-top: 4px !important;
  }
  .mr-xl-4-px {
    margin-right: 4px !important;
  }
  .mb-xl-4-px {
    margin-bottom: 4px !important;
  }
  .ml-xl-4-px {
    margin-left: 4px !important;
  }
  .p-xl-4-px {
    padding: 4px !important;
  }
  .py-xl-4-px {
    padding-top: 4px !important;
    padding-bottom: 4px !important;
  }
  .px-xl-4-px {
    padding-left: 4px !important;
    padding-right: 4px !important;
  }
  .pt-xl-4-px {
    padding-top: 4px !important;
  }
  .pr-xl-4-px {
    padding-right: 4px !important;
  }
  .pb-xl-4-px {
    padding-bottom: 4px !important;
  }
  .pl-xl-4-px {
    padding-left: 4px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-6 {
    gap: 6px !important;
  }
  .m-xl-6-px {
    margin: 6px !important;
  }
  .my-xl-6-px {
    margin-top: 6px !important;
    margin-bottom: 6px !important;
  }
  .mx-xl-6-px {
    margin-left: 6px !important;
    margin-right: 6px !important;
  }
  .mt-xl-6-px {
    margin-top: 6px !important;
  }
  .mr-xl-6-px {
    margin-right: 6px !important;
  }
  .mb-xl-6-px {
    margin-bottom: 6px !important;
  }
  .ml-xl-6-px {
    margin-left: 6px !important;
  }
  .p-xl-6-px {
    padding: 6px !important;
  }
  .py-xl-6-px {
    padding-top: 6px !important;
    padding-bottom: 6px !important;
  }
  .px-xl-6-px {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }
  .pt-xl-6-px {
    padding-top: 6px !important;
  }
  .pr-xl-6-px {
    padding-right: 6px !important;
  }
  .pb-xl-6-px {
    padding-bottom: 6px !important;
  }
  .pl-xl-6-px {
    padding-left: 6px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-8 {
    gap: 8px !important;
  }
  .m-xl-8-px {
    margin: 8px !important;
  }
  .my-xl-8-px {
    margin-top: 8px !important;
    margin-bottom: 8px !important;
  }
  .mx-xl-8-px {
    margin-left: 8px !important;
    margin-right: 8px !important;
  }
  .mt-xl-8-px {
    margin-top: 8px !important;
  }
  .mr-xl-8-px {
    margin-right: 8px !important;
  }
  .mb-xl-8-px {
    margin-bottom: 8px !important;
  }
  .ml-xl-8-px {
    margin-left: 8px !important;
  }
  .p-xl-8-px {
    padding: 8px !important;
  }
  .py-xl-8-px {
    padding-top: 8px !important;
    padding-bottom: 8px !important;
  }
  .px-xl-8-px {
    padding-left: 8px !important;
    padding-right: 8px !important;
  }
  .pt-xl-8-px {
    padding-top: 8px !important;
  }
  .pr-xl-8-px {
    padding-right: 8px !important;
  }
  .pb-xl-8-px {
    padding-bottom: 8px !important;
  }
  .pl-xl-8-px {
    padding-left: 8px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-9 {
    gap: 9px !important;
  }
  .m-xl-9-px {
    margin: 9px !important;
  }
  .my-xl-9-px {
    margin-top: 9px !important;
    margin-bottom: 9px !important;
  }
  .mx-xl-9-px {
    margin-left: 9px !important;
    margin-right: 9px !important;
  }
  .mt-xl-9-px {
    margin-top: 9px !important;
  }
  .mr-xl-9-px {
    margin-right: 9px !important;
  }
  .mb-xl-9-px {
    margin-bottom: 9px !important;
  }
  .ml-xl-9-px {
    margin-left: 9px !important;
  }
  .p-xl-9-px {
    padding: 9px !important;
  }
  .py-xl-9-px {
    padding-top: 9px !important;
    padding-bottom: 9px !important;
  }
  .px-xl-9-px {
    padding-left: 9px !important;
    padding-right: 9px !important;
  }
  .pt-xl-9-px {
    padding-top: 9px !important;
  }
  .pr-xl-9-px {
    padding-right: 9px !important;
  }
  .pb-xl-9-px {
    padding-bottom: 9px !important;
  }
  .pl-xl-9-px {
    padding-left: 9px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-10 {
    gap: 10px !important;
  }
  .m-xl-10-px {
    margin: 10px !important;
  }
  .my-xl-10-px {
    margin-top: 10px !important;
    margin-bottom: 10px !important;
  }
  .mx-xl-10-px {
    margin-left: 10px !important;
    margin-right: 10px !important;
  }
  .mt-xl-10-px {
    margin-top: 10px !important;
  }
  .mr-xl-10-px {
    margin-right: 10px !important;
  }
  .mb-xl-10-px {
    margin-bottom: 10px !important;
  }
  .ml-xl-10-px {
    margin-left: 10px !important;
  }
  .p-xl-10-px {
    padding: 10px !important;
  }
  .py-xl-10-px {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
  }
  .px-xl-10-px {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }
  .pt-xl-10-px {
    padding-top: 10px !important;
  }
  .pr-xl-10-px {
    padding-right: 10px !important;
  }
  .pb-xl-10-px {
    padding-bottom: 10px !important;
  }
  .pl-xl-10-px {
    padding-left: 10px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-12 {
    gap: 12px !important;
  }
  .m-xl-12-px {
    margin: 12px !important;
  }
  .my-xl-12-px {
    margin-top: 12px !important;
    margin-bottom: 12px !important;
  }
  .mx-xl-12-px {
    margin-left: 12px !important;
    margin-right: 12px !important;
  }
  .mt-xl-12-px {
    margin-top: 12px !important;
  }
  .mr-xl-12-px {
    margin-right: 12px !important;
  }
  .mb-xl-12-px {
    margin-bottom: 12px !important;
  }
  .ml-xl-12-px {
    margin-left: 12px !important;
  }
  .p-xl-12-px {
    padding: 12px !important;
  }
  .py-xl-12-px {
    padding-top: 12px !important;
    padding-bottom: 12px !important;
  }
  .px-xl-12-px {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
  .pt-xl-12-px {
    padding-top: 12px !important;
  }
  .pr-xl-12-px {
    padding-right: 12px !important;
  }
  .pb-xl-12-px {
    padding-bottom: 12px !important;
  }
  .pl-xl-12-px {
    padding-left: 12px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-16 {
    gap: 16px !important;
  }
  .m-xl-16-px {
    margin: 16px !important;
  }
  .my-xl-16-px {
    margin-top: 16px !important;
    margin-bottom: 16px !important;
  }
  .mx-xl-16-px {
    margin-left: 16px !important;
    margin-right: 16px !important;
  }
  .mt-xl-16-px {
    margin-top: 16px !important;
  }
  .mr-xl-16-px {
    margin-right: 16px !important;
  }
  .mb-xl-16-px {
    margin-bottom: 16px !important;
  }
  .ml-xl-16-px {
    margin-left: 16px !important;
  }
  .p-xl-16-px {
    padding: 16px !important;
  }
  .py-xl-16-px {
    padding-top: 16px !important;
    padding-bottom: 16px !important;
  }
  .px-xl-16-px {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  .pt-xl-16-px {
    padding-top: 16px !important;
  }
  .pr-xl-16-px {
    padding-right: 16px !important;
  }
  .pb-xl-16-px {
    padding-bottom: 16px !important;
  }
  .pl-xl-16-px {
    padding-left: 16px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-20 {
    gap: 20px !important;
  }
  .m-xl-20-px {
    margin: 20px !important;
  }
  .my-xl-20-px {
    margin-top: 20px !important;
    margin-bottom: 20px !important;
  }
  .mx-xl-20-px {
    margin-left: 20px !important;
    margin-right: 20px !important;
  }
  .mt-xl-20-px {
    margin-top: 20px !important;
  }
  .mr-xl-20-px {
    margin-right: 20px !important;
  }
  .mb-xl-20-px {
    margin-bottom: 20px !important;
  }
  .ml-xl-20-px {
    margin-left: 20px !important;
  }
  .p-xl-20-px {
    padding: 20px !important;
  }
  .py-xl-20-px {
    padding-top: 20px !important;
    padding-bottom: 20px !important;
  }
  .px-xl-20-px {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  .pt-xl-20-px {
    padding-top: 20px !important;
  }
  .pr-xl-20-px {
    padding-right: 20px !important;
  }
  .pb-xl-20-px {
    padding-bottom: 20px !important;
  }
  .pl-xl-20-px {
    padding-left: 20px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-24 {
    gap: 24px !important;
  }
  .m-xl-24-px {
    margin: 24px !important;
  }
  .my-xl-24-px {
    margin-top: 24px !important;
    margin-bottom: 24px !important;
  }
  .mx-xl-24-px {
    margin-left: 24px !important;
    margin-right: 24px !important;
  }
  .mt-xl-24-px {
    margin-top: 24px !important;
  }
  .mr-xl-24-px {
    margin-right: 24px !important;
  }
  .mb-xl-24-px {
    margin-bottom: 24px !important;
  }
  .ml-xl-24-px {
    margin-left: 24px !important;
  }
  .p-xl-24-px {
    padding: 24px !important;
  }
  .py-xl-24-px {
    padding-top: 24px !important;
    padding-bottom: 24px !important;
  }
  .px-xl-24-px {
    padding-left: 24px !important;
    padding-right: 24px !important;
  }
  .pt-xl-24-px {
    padding-top: 24px !important;
  }
  .pr-xl-24-px {
    padding-right: 24px !important;
  }
  .pb-xl-24-px {
    padding-bottom: 24px !important;
  }
  .pl-xl-24-px {
    padding-left: 24px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-25 {
    gap: 25px !important;
  }
  .m-xl-25-px {
    margin: 25px !important;
  }
  .my-xl-25-px {
    margin-top: 25px !important;
    margin-bottom: 25px !important;
  }
  .mx-xl-25-px {
    margin-left: 25px !important;
    margin-right: 25px !important;
  }
  .mt-xl-25-px {
    margin-top: 25px !important;
  }
  .mr-xl-25-px {
    margin-right: 25px !important;
  }
  .mb-xl-25-px {
    margin-bottom: 25px !important;
  }
  .ml-xl-25-px {
    margin-left: 25px !important;
  }
  .p-xl-25-px {
    padding: 25px !important;
  }
  .py-xl-25-px {
    padding-top: 25px !important;
    padding-bottom: 25px !important;
  }
  .px-xl-25-px {
    padding-left: 25px !important;
    padding-right: 25px !important;
  }
  .pt-xl-25-px {
    padding-top: 25px !important;
  }
  .pr-xl-25-px {
    padding-right: 25px !important;
  }
  .pb-xl-25-px {
    padding-bottom: 25px !important;
  }
  .pl-xl-25-px {
    padding-left: 25px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-26 {
    gap: 26px !important;
  }
  .m-xl-26-px {
    margin: 26px !important;
  }
  .my-xl-26-px {
    margin-top: 26px !important;
    margin-bottom: 26px !important;
  }
  .mx-xl-26-px {
    margin-left: 26px !important;
    margin-right: 26px !important;
  }
  .mt-xl-26-px {
    margin-top: 26px !important;
  }
  .mr-xl-26-px {
    margin-right: 26px !important;
  }
  .mb-xl-26-px {
    margin-bottom: 26px !important;
  }
  .ml-xl-26-px {
    margin-left: 26px !important;
  }
  .p-xl-26-px {
    padding: 26px !important;
  }
  .py-xl-26-px {
    padding-top: 26px !important;
    padding-bottom: 26px !important;
  }
  .px-xl-26-px {
    padding-left: 26px !important;
    padding-right: 26px !important;
  }
  .pt-xl-26-px {
    padding-top: 26px !important;
  }
  .pr-xl-26-px {
    padding-right: 26px !important;
  }
  .pb-xl-26-px {
    padding-bottom: 26px !important;
  }
  .pl-xl-26-px {
    padding-left: 26px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-28 {
    gap: 28px !important;
  }
  .m-xl-28-px {
    margin: 28px !important;
  }
  .my-xl-28-px {
    margin-top: 28px !important;
    margin-bottom: 28px !important;
  }
  .mx-xl-28-px {
    margin-left: 28px !important;
    margin-right: 28px !important;
  }
  .mt-xl-28-px {
    margin-top: 28px !important;
  }
  .mr-xl-28-px {
    margin-right: 28px !important;
  }
  .mb-xl-28-px {
    margin-bottom: 28px !important;
  }
  .ml-xl-28-px {
    margin-left: 28px !important;
  }
  .p-xl-28-px {
    padding: 28px !important;
  }
  .py-xl-28-px {
    padding-top: 28px !important;
    padding-bottom: 28px !important;
  }
  .px-xl-28-px {
    padding-left: 28px !important;
    padding-right: 28px !important;
  }
  .pt-xl-28-px {
    padding-top: 28px !important;
  }
  .pr-xl-28-px {
    padding-right: 28px !important;
  }
  .pb-xl-28-px {
    padding-bottom: 28px !important;
  }
  .pl-xl-28-px {
    padding-left: 28px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-30 {
    gap: 30px !important;
  }
  .m-xl-30-px {
    margin: 30px !important;
  }
  .my-xl-30-px {
    margin-top: 30px !important;
    margin-bottom: 30px !important;
  }
  .mx-xl-30-px {
    margin-left: 30px !important;
    margin-right: 30px !important;
  }
  .mt-xl-30-px {
    margin-top: 30px !important;
  }
  .mr-xl-30-px {
    margin-right: 30px !important;
  }
  .mb-xl-30-px {
    margin-bottom: 30px !important;
  }
  .ml-xl-30-px {
    margin-left: 30px !important;
  }
  .p-xl-30-px {
    padding: 30px !important;
  }
  .py-xl-30-px {
    padding-top: 30px !important;
    padding-bottom: 30px !important;
  }
  .px-xl-30-px {
    padding-left: 30px !important;
    padding-right: 30px !important;
  }
  .pt-xl-30-px {
    padding-top: 30px !important;
  }
  .pr-xl-30-px {
    padding-right: 30px !important;
  }
  .pb-xl-30-px {
    padding-bottom: 30px !important;
  }
  .pl-xl-30-px {
    padding-left: 30px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-32 {
    gap: 32px !important;
  }
  .m-xl-32-px {
    margin: 32px !important;
  }
  .my-xl-32-px {
    margin-top: 32px !important;
    margin-bottom: 32px !important;
  }
  .mx-xl-32-px {
    margin-left: 32px !important;
    margin-right: 32px !important;
  }
  .mt-xl-32-px {
    margin-top: 32px !important;
  }
  .mr-xl-32-px {
    margin-right: 32px !important;
  }
  .mb-xl-32-px {
    margin-bottom: 32px !important;
  }
  .ml-xl-32-px {
    margin-left: 32px !important;
  }
  .p-xl-32-px {
    padding: 32px !important;
  }
  .py-xl-32-px {
    padding-top: 32px !important;
    padding-bottom: 32px !important;
  }
  .px-xl-32-px {
    padding-left: 32px !important;
    padding-right: 32px !important;
  }
  .pt-xl-32-px {
    padding-top: 32px !important;
  }
  .pr-xl-32-px {
    padding-right: 32px !important;
  }
  .pb-xl-32-px {
    padding-bottom: 32px !important;
  }
  .pl-xl-32-px {
    padding-left: 32px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-40 {
    gap: 40px !important;
  }
  .m-xl-40-px {
    margin: 40px !important;
  }
  .my-xl-40-px {
    margin-top: 40px !important;
    margin-bottom: 40px !important;
  }
  .mx-xl-40-px {
    margin-left: 40px !important;
    margin-right: 40px !important;
  }
  .mt-xl-40-px {
    margin-top: 40px !important;
  }
  .mr-xl-40-px {
    margin-right: 40px !important;
  }
  .mb-xl-40-px {
    margin-bottom: 40px !important;
  }
  .ml-xl-40-px {
    margin-left: 40px !important;
  }
  .p-xl-40-px {
    padding: 40px !important;
  }
  .py-xl-40-px {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
  }
  .px-xl-40-px {
    padding-left: 40px !important;
    padding-right: 40px !important;
  }
  .pt-xl-40-px {
    padding-top: 40px !important;
  }
  .pr-xl-40-px {
    padding-right: 40px !important;
  }
  .pb-xl-40-px {
    padding-bottom: 40px !important;
  }
  .pl-xl-40-px {
    padding-left: 40px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-48 {
    gap: 48px !important;
  }
  .m-xl-48-px {
    margin: 48px !important;
  }
  .my-xl-48-px {
    margin-top: 48px !important;
    margin-bottom: 48px !important;
  }
  .mx-xl-48-px {
    margin-left: 48px !important;
    margin-right: 48px !important;
  }
  .mt-xl-48-px {
    margin-top: 48px !important;
  }
  .mr-xl-48-px {
    margin-right: 48px !important;
  }
  .mb-xl-48-px {
    margin-bottom: 48px !important;
  }
  .ml-xl-48-px {
    margin-left: 48px !important;
  }
  .p-xl-48-px {
    padding: 48px !important;
  }
  .py-xl-48-px {
    padding-top: 48px !important;
    padding-bottom: 48px !important;
  }
  .px-xl-48-px {
    padding-left: 48px !important;
    padding-right: 48px !important;
  }
  .pt-xl-48-px {
    padding-top: 48px !important;
  }
  .pr-xl-48-px {
    padding-right: 48px !important;
  }
  .pb-xl-48-px {
    padding-bottom: 48px !important;
  }
  .pl-xl-48-px {
    padding-left: 48px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-64, .info-page-container, .info-page-container-invert {
    gap: 64px !important;
  }
  .m-xl-64-px {
    margin: 64px !important;
  }
  .my-xl-64-px {
    margin-top: 64px !important;
    margin-bottom: 64px !important;
  }
  .mx-xl-64-px {
    margin-left: 64px !important;
    margin-right: 64px !important;
  }
  .mt-xl-64-px {
    margin-top: 64px !important;
  }
  .mr-xl-64-px {
    margin-right: 64px !important;
  }
  .mb-xl-64-px {
    margin-bottom: 64px !important;
  }
  .ml-xl-64-px {
    margin-left: 64px !important;
  }
  .p-xl-64-px, .info-page-card.article, .article.feedback-card {
    padding: 64px !important;
  }
  .py-xl-64-px {
    padding-top: 64px !important;
    padding-bottom: 64px !important;
  }
  .px-xl-64-px {
    padding-left: 64px !important;
    padding-right: 64px !important;
  }
  .pt-xl-64-px {
    padding-top: 64px !important;
  }
  .pr-xl-64-px {
    padding-right: 64px !important;
  }
  .pb-xl-64-px {
    padding-bottom: 64px !important;
  }
  .pl-xl-64-px {
    padding-left: 64px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-80 {
    gap: 80px !important;
  }
  .m-xl-80-px {
    margin: 80px !important;
  }
  .my-xl-80-px {
    margin-top: 80px !important;
    margin-bottom: 80px !important;
  }
  .mx-xl-80-px {
    margin-left: 80px !important;
    margin-right: 80px !important;
  }
  .mt-xl-80-px {
    margin-top: 80px !important;
  }
  .mr-xl-80-px {
    margin-right: 80px !important;
  }
  .mb-xl-80-px {
    margin-bottom: 80px !important;
  }
  .ml-xl-80-px {
    margin-left: 80px !important;
  }
  .p-xl-80-px {
    padding: 80px !important;
  }
  .py-xl-80-px {
    padding-top: 80px !important;
    padding-bottom: 80px !important;
  }
  .px-xl-80-px {
    padding-left: 80px !important;
    padding-right: 80px !important;
  }
  .pt-xl-80-px {
    padding-top: 80px !important;
  }
  .pr-xl-80-px {
    padding-right: 80px !important;
  }
  .pb-xl-80-px {
    padding-bottom: 80px !important;
  }
  .pl-xl-80-px {
    padding-left: 80px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xl-92 {
    gap: 92px !important;
  }
  .m-xl-92-px {
    margin: 92px !important;
  }
  .my-xl-92-px {
    margin-top: 92px !important;
    margin-bottom: 92px !important;
  }
  .mx-xl-92-px {
    margin-left: 92px !important;
    margin-right: 92px !important;
  }
  .mt-xl-92-px {
    margin-top: 92px !important;
  }
  .mr-xl-92-px {
    margin-right: 92px !important;
  }
  .mb-xl-92-px {
    margin-bottom: 92px !important;
  }
  .ml-xl-92-px {
    margin-left: 92px !important;
  }
  .p-xl-92-px {
    padding: 92px !important;
  }
  .py-xl-92-px {
    padding-top: 92px !important;
    padding-bottom: 92px !important;
  }
  .px-xl-92-px {
    padding-left: 92px !important;
    padding-right: 92px !important;
  }
  .pt-xl-92-px {
    padding-top: 92px !important;
  }
  .pr-xl-92-px {
    padding-right: 92px !important;
  }
  .pb-xl-92-px {
    padding-bottom: 92px !important;
  }
  .pl-xl-92-px {
    padding-left: 92px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-0 {
    gap: 0px !important;
  }
  .m-xxl-0-px {
    margin: 0px !important;
  }
  .my-xxl-0-px {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  .mx-xxl-0-px {
    margin-left: 0px !important;
    margin-right: 0px !important;
  }
  .mt-xxl-0-px {
    margin-top: 0px !important;
  }
  .mr-xxl-0-px {
    margin-right: 0px !important;
  }
  .mb-xxl-0-px {
    margin-bottom: 0px !important;
  }
  .ml-xxl-0-px {
    margin-left: 0px !important;
  }
  .p-xxl-0-px {
    padding: 0px !important;
  }
  .py-xxl-0-px {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }
  .px-xxl-0-px {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .pt-xxl-0-px {
    padding-top: 0px !important;
  }
  .pr-xxl-0-px {
    padding-right: 0px !important;
  }
  .pb-xxl-0-px {
    padding-bottom: 0px !important;
  }
  .pl-xxl-0-px {
    padding-left: 0px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-2 {
    gap: 2px !important;
  }
  .m-xxl-2-px {
    margin: 2px !important;
  }
  .my-xxl-2-px {
    margin-top: 2px !important;
    margin-bottom: 2px !important;
  }
  .mx-xxl-2-px {
    margin-left: 2px !important;
    margin-right: 2px !important;
  }
  .mt-xxl-2-px {
    margin-top: 2px !important;
  }
  .mr-xxl-2-px {
    margin-right: 2px !important;
  }
  .mb-xxl-2-px {
    margin-bottom: 2px !important;
  }
  .ml-xxl-2-px {
    margin-left: 2px !important;
  }
  .p-xxl-2-px {
    padding: 2px !important;
  }
  .py-xxl-2-px {
    padding-top: 2px !important;
    padding-bottom: 2px !important;
  }
  .px-xxl-2-px {
    padding-left: 2px !important;
    padding-right: 2px !important;
  }
  .pt-xxl-2-px {
    padding-top: 2px !important;
  }
  .pr-xxl-2-px {
    padding-right: 2px !important;
  }
  .pb-xxl-2-px {
    padding-bottom: 2px !important;
  }
  .pl-xxl-2-px {
    padding-left: 2px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-4 {
    gap: 4px !important;
  }
  .m-xxl-4-px {
    margin: 4px !important;
  }
  .my-xxl-4-px {
    margin-top: 4px !important;
    margin-bottom: 4px !important;
  }
  .mx-xxl-4-px {
    margin-left: 4px !important;
    margin-right: 4px !important;
  }
  .mt-xxl-4-px {
    margin-top: 4px !important;
  }
  .mr-xxl-4-px {
    margin-right: 4px !important;
  }
  .mb-xxl-4-px {
    margin-bottom: 4px !important;
  }
  .ml-xxl-4-px {
    margin-left: 4px !important;
  }
  .p-xxl-4-px {
    padding: 4px !important;
  }
  .py-xxl-4-px {
    padding-top: 4px !important;
    padding-bottom: 4px !important;
  }
  .px-xxl-4-px {
    padding-left: 4px !important;
    padding-right: 4px !important;
  }
  .pt-xxl-4-px {
    padding-top: 4px !important;
  }
  .pr-xxl-4-px {
    padding-right: 4px !important;
  }
  .pb-xxl-4-px {
    padding-bottom: 4px !important;
  }
  .pl-xxl-4-px {
    padding-left: 4px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-6 {
    gap: 6px !important;
  }
  .m-xxl-6-px {
    margin: 6px !important;
  }
  .my-xxl-6-px {
    margin-top: 6px !important;
    margin-bottom: 6px !important;
  }
  .mx-xxl-6-px {
    margin-left: 6px !important;
    margin-right: 6px !important;
  }
  .mt-xxl-6-px {
    margin-top: 6px !important;
  }
  .mr-xxl-6-px {
    margin-right: 6px !important;
  }
  .mb-xxl-6-px {
    margin-bottom: 6px !important;
  }
  .ml-xxl-6-px {
    margin-left: 6px !important;
  }
  .p-xxl-6-px {
    padding: 6px !important;
  }
  .py-xxl-6-px {
    padding-top: 6px !important;
    padding-bottom: 6px !important;
  }
  .px-xxl-6-px {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }
  .pt-xxl-6-px {
    padding-top: 6px !important;
  }
  .pr-xxl-6-px {
    padding-right: 6px !important;
  }
  .pb-xxl-6-px {
    padding-bottom: 6px !important;
  }
  .pl-xxl-6-px {
    padding-left: 6px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-8 {
    gap: 8px !important;
  }
  .m-xxl-8-px {
    margin: 8px !important;
  }
  .my-xxl-8-px {
    margin-top: 8px !important;
    margin-bottom: 8px !important;
  }
  .mx-xxl-8-px {
    margin-left: 8px !important;
    margin-right: 8px !important;
  }
  .mt-xxl-8-px {
    margin-top: 8px !important;
  }
  .mr-xxl-8-px {
    margin-right: 8px !important;
  }
  .mb-xxl-8-px {
    margin-bottom: 8px !important;
  }
  .ml-xxl-8-px {
    margin-left: 8px !important;
  }
  .p-xxl-8-px {
    padding: 8px !important;
  }
  .py-xxl-8-px {
    padding-top: 8px !important;
    padding-bottom: 8px !important;
  }
  .px-xxl-8-px {
    padding-left: 8px !important;
    padding-right: 8px !important;
  }
  .pt-xxl-8-px {
    padding-top: 8px !important;
  }
  .pr-xxl-8-px {
    padding-right: 8px !important;
  }
  .pb-xxl-8-px {
    padding-bottom: 8px !important;
  }
  .pl-xxl-8-px {
    padding-left: 8px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-9 {
    gap: 9px !important;
  }
  .m-xxl-9-px {
    margin: 9px !important;
  }
  .my-xxl-9-px {
    margin-top: 9px !important;
    margin-bottom: 9px !important;
  }
  .mx-xxl-9-px {
    margin-left: 9px !important;
    margin-right: 9px !important;
  }
  .mt-xxl-9-px {
    margin-top: 9px !important;
  }
  .mr-xxl-9-px {
    margin-right: 9px !important;
  }
  .mb-xxl-9-px {
    margin-bottom: 9px !important;
  }
  .ml-xxl-9-px {
    margin-left: 9px !important;
  }
  .p-xxl-9-px {
    padding: 9px !important;
  }
  .py-xxl-9-px {
    padding-top: 9px !important;
    padding-bottom: 9px !important;
  }
  .px-xxl-9-px {
    padding-left: 9px !important;
    padding-right: 9px !important;
  }
  .pt-xxl-9-px {
    padding-top: 9px !important;
  }
  .pr-xxl-9-px {
    padding-right: 9px !important;
  }
  .pb-xxl-9-px {
    padding-bottom: 9px !important;
  }
  .pl-xxl-9-px {
    padding-left: 9px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-10 {
    gap: 10px !important;
  }
  .m-xxl-10-px {
    margin: 10px !important;
  }
  .my-xxl-10-px {
    margin-top: 10px !important;
    margin-bottom: 10px !important;
  }
  .mx-xxl-10-px {
    margin-left: 10px !important;
    margin-right: 10px !important;
  }
  .mt-xxl-10-px {
    margin-top: 10px !important;
  }
  .mr-xxl-10-px {
    margin-right: 10px !important;
  }
  .mb-xxl-10-px {
    margin-bottom: 10px !important;
  }
  .ml-xxl-10-px {
    margin-left: 10px !important;
  }
  .p-xxl-10-px {
    padding: 10px !important;
  }
  .py-xxl-10-px {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
  }
  .px-xxl-10-px {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }
  .pt-xxl-10-px {
    padding-top: 10px !important;
  }
  .pr-xxl-10-px {
    padding-right: 10px !important;
  }
  .pb-xxl-10-px {
    padding-bottom: 10px !important;
  }
  .pl-xxl-10-px {
    padding-left: 10px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-12 {
    gap: 12px !important;
  }
  .m-xxl-12-px {
    margin: 12px !important;
  }
  .my-xxl-12-px {
    margin-top: 12px !important;
    margin-bottom: 12px !important;
  }
  .mx-xxl-12-px {
    margin-left: 12px !important;
    margin-right: 12px !important;
  }
  .mt-xxl-12-px {
    margin-top: 12px !important;
  }
  .mr-xxl-12-px {
    margin-right: 12px !important;
  }
  .mb-xxl-12-px {
    margin-bottom: 12px !important;
  }
  .ml-xxl-12-px {
    margin-left: 12px !important;
  }
  .p-xxl-12-px {
    padding: 12px !important;
  }
  .py-xxl-12-px {
    padding-top: 12px !important;
    padding-bottom: 12px !important;
  }
  .px-xxl-12-px {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
  .pt-xxl-12-px {
    padding-top: 12px !important;
  }
  .pr-xxl-12-px {
    padding-right: 12px !important;
  }
  .pb-xxl-12-px {
    padding-bottom: 12px !important;
  }
  .pl-xxl-12-px {
    padding-left: 12px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-16 {
    gap: 16px !important;
  }
  .m-xxl-16-px {
    margin: 16px !important;
  }
  .my-xxl-16-px {
    margin-top: 16px !important;
    margin-bottom: 16px !important;
  }
  .mx-xxl-16-px {
    margin-left: 16px !important;
    margin-right: 16px !important;
  }
  .mt-xxl-16-px {
    margin-top: 16px !important;
  }
  .mr-xxl-16-px {
    margin-right: 16px !important;
  }
  .mb-xxl-16-px {
    margin-bottom: 16px !important;
  }
  .ml-xxl-16-px {
    margin-left: 16px !important;
  }
  .p-xxl-16-px {
    padding: 16px !important;
  }
  .py-xxl-16-px {
    padding-top: 16px !important;
    padding-bottom: 16px !important;
  }
  .px-xxl-16-px {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  .pt-xxl-16-px {
    padding-top: 16px !important;
  }
  .pr-xxl-16-px {
    padding-right: 16px !important;
  }
  .pb-xxl-16-px {
    padding-bottom: 16px !important;
  }
  .pl-xxl-16-px {
    padding-left: 16px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-20 {
    gap: 20px !important;
  }
  .m-xxl-20-px {
    margin: 20px !important;
  }
  .my-xxl-20-px {
    margin-top: 20px !important;
    margin-bottom: 20px !important;
  }
  .mx-xxl-20-px {
    margin-left: 20px !important;
    margin-right: 20px !important;
  }
  .mt-xxl-20-px {
    margin-top: 20px !important;
  }
  .mr-xxl-20-px {
    margin-right: 20px !important;
  }
  .mb-xxl-20-px {
    margin-bottom: 20px !important;
  }
  .ml-xxl-20-px {
    margin-left: 20px !important;
  }
  .p-xxl-20-px {
    padding: 20px !important;
  }
  .py-xxl-20-px {
    padding-top: 20px !important;
    padding-bottom: 20px !important;
  }
  .px-xxl-20-px {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  .pt-xxl-20-px {
    padding-top: 20px !important;
  }
  .pr-xxl-20-px {
    padding-right: 20px !important;
  }
  .pb-xxl-20-px {
    padding-bottom: 20px !important;
  }
  .pl-xxl-20-px {
    padding-left: 20px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-24 {
    gap: 24px !important;
  }
  .m-xxl-24-px {
    margin: 24px !important;
  }
  .my-xxl-24-px {
    margin-top: 24px !important;
    margin-bottom: 24px !important;
  }
  .mx-xxl-24-px {
    margin-left: 24px !important;
    margin-right: 24px !important;
  }
  .mt-xxl-24-px {
    margin-top: 24px !important;
  }
  .mr-xxl-24-px {
    margin-right: 24px !important;
  }
  .mb-xxl-24-px {
    margin-bottom: 24px !important;
  }
  .ml-xxl-24-px {
    margin-left: 24px !important;
  }
  .p-xxl-24-px {
    padding: 24px !important;
  }
  .py-xxl-24-px {
    padding-top: 24px !important;
    padding-bottom: 24px !important;
  }
  .px-xxl-24-px {
    padding-left: 24px !important;
    padding-right: 24px !important;
  }
  .pt-xxl-24-px {
    padding-top: 24px !important;
  }
  .pr-xxl-24-px {
    padding-right: 24px !important;
  }
  .pb-xxl-24-px {
    padding-bottom: 24px !important;
  }
  .pl-xxl-24-px {
    padding-left: 24px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-25 {
    gap: 25px !important;
  }
  .m-xxl-25-px {
    margin: 25px !important;
  }
  .my-xxl-25-px {
    margin-top: 25px !important;
    margin-bottom: 25px !important;
  }
  .mx-xxl-25-px {
    margin-left: 25px !important;
    margin-right: 25px !important;
  }
  .mt-xxl-25-px {
    margin-top: 25px !important;
  }
  .mr-xxl-25-px {
    margin-right: 25px !important;
  }
  .mb-xxl-25-px {
    margin-bottom: 25px !important;
  }
  .ml-xxl-25-px {
    margin-left: 25px !important;
  }
  .p-xxl-25-px {
    padding: 25px !important;
  }
  .py-xxl-25-px {
    padding-top: 25px !important;
    padding-bottom: 25px !important;
  }
  .px-xxl-25-px {
    padding-left: 25px !important;
    padding-right: 25px !important;
  }
  .pt-xxl-25-px {
    padding-top: 25px !important;
  }
  .pr-xxl-25-px {
    padding-right: 25px !important;
  }
  .pb-xxl-25-px {
    padding-bottom: 25px !important;
  }
  .pl-xxl-25-px {
    padding-left: 25px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-26 {
    gap: 26px !important;
  }
  .m-xxl-26-px {
    margin: 26px !important;
  }
  .my-xxl-26-px {
    margin-top: 26px !important;
    margin-bottom: 26px !important;
  }
  .mx-xxl-26-px {
    margin-left: 26px !important;
    margin-right: 26px !important;
  }
  .mt-xxl-26-px {
    margin-top: 26px !important;
  }
  .mr-xxl-26-px {
    margin-right: 26px !important;
  }
  .mb-xxl-26-px {
    margin-bottom: 26px !important;
  }
  .ml-xxl-26-px {
    margin-left: 26px !important;
  }
  .p-xxl-26-px {
    padding: 26px !important;
  }
  .py-xxl-26-px {
    padding-top: 26px !important;
    padding-bottom: 26px !important;
  }
  .px-xxl-26-px {
    padding-left: 26px !important;
    padding-right: 26px !important;
  }
  .pt-xxl-26-px {
    padding-top: 26px !important;
  }
  .pr-xxl-26-px {
    padding-right: 26px !important;
  }
  .pb-xxl-26-px {
    padding-bottom: 26px !important;
  }
  .pl-xxl-26-px {
    padding-left: 26px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-28 {
    gap: 28px !important;
  }
  .m-xxl-28-px {
    margin: 28px !important;
  }
  .my-xxl-28-px {
    margin-top: 28px !important;
    margin-bottom: 28px !important;
  }
  .mx-xxl-28-px {
    margin-left: 28px !important;
    margin-right: 28px !important;
  }
  .mt-xxl-28-px {
    margin-top: 28px !important;
  }
  .mr-xxl-28-px {
    margin-right: 28px !important;
  }
  .mb-xxl-28-px {
    margin-bottom: 28px !important;
  }
  .ml-xxl-28-px {
    margin-left: 28px !important;
  }
  .p-xxl-28-px {
    padding: 28px !important;
  }
  .py-xxl-28-px {
    padding-top: 28px !important;
    padding-bottom: 28px !important;
  }
  .px-xxl-28-px {
    padding-left: 28px !important;
    padding-right: 28px !important;
  }
  .pt-xxl-28-px {
    padding-top: 28px !important;
  }
  .pr-xxl-28-px {
    padding-right: 28px !important;
  }
  .pb-xxl-28-px {
    padding-bottom: 28px !important;
  }
  .pl-xxl-28-px {
    padding-left: 28px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-30 {
    gap: 30px !important;
  }
  .m-xxl-30-px {
    margin: 30px !important;
  }
  .my-xxl-30-px {
    margin-top: 30px !important;
    margin-bottom: 30px !important;
  }
  .mx-xxl-30-px {
    margin-left: 30px !important;
    margin-right: 30px !important;
  }
  .mt-xxl-30-px {
    margin-top: 30px !important;
  }
  .mr-xxl-30-px {
    margin-right: 30px !important;
  }
  .mb-xxl-30-px {
    margin-bottom: 30px !important;
  }
  .ml-xxl-30-px {
    margin-left: 30px !important;
  }
  .p-xxl-30-px {
    padding: 30px !important;
  }
  .py-xxl-30-px {
    padding-top: 30px !important;
    padding-bottom: 30px !important;
  }
  .px-xxl-30-px {
    padding-left: 30px !important;
    padding-right: 30px !important;
  }
  .pt-xxl-30-px {
    padding-top: 30px !important;
  }
  .pr-xxl-30-px {
    padding-right: 30px !important;
  }
  .pb-xxl-30-px {
    padding-bottom: 30px !important;
  }
  .pl-xxl-30-px {
    padding-left: 30px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-32 {
    gap: 32px !important;
  }
  .m-xxl-32-px {
    margin: 32px !important;
  }
  .my-xxl-32-px {
    margin-top: 32px !important;
    margin-bottom: 32px !important;
  }
  .mx-xxl-32-px {
    margin-left: 32px !important;
    margin-right: 32px !important;
  }
  .mt-xxl-32-px {
    margin-top: 32px !important;
  }
  .mr-xxl-32-px {
    margin-right: 32px !important;
  }
  .mb-xxl-32-px {
    margin-bottom: 32px !important;
  }
  .ml-xxl-32-px {
    margin-left: 32px !important;
  }
  .p-xxl-32-px {
    padding: 32px !important;
  }
  .py-xxl-32-px {
    padding-top: 32px !important;
    padding-bottom: 32px !important;
  }
  .px-xxl-32-px {
    padding-left: 32px !important;
    padding-right: 32px !important;
  }
  .pt-xxl-32-px {
    padding-top: 32px !important;
  }
  .pr-xxl-32-px {
    padding-right: 32px !important;
  }
  .pb-xxl-32-px {
    padding-bottom: 32px !important;
  }
  .pl-xxl-32-px {
    padding-left: 32px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-40 {
    gap: 40px !important;
  }
  .m-xxl-40-px {
    margin: 40px !important;
  }
  .my-xxl-40-px {
    margin-top: 40px !important;
    margin-bottom: 40px !important;
  }
  .mx-xxl-40-px {
    margin-left: 40px !important;
    margin-right: 40px !important;
  }
  .mt-xxl-40-px {
    margin-top: 40px !important;
  }
  .mr-xxl-40-px {
    margin-right: 40px !important;
  }
  .mb-xxl-40-px {
    margin-bottom: 40px !important;
  }
  .ml-xxl-40-px {
    margin-left: 40px !important;
  }
  .p-xxl-40-px {
    padding: 40px !important;
  }
  .py-xxl-40-px {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
  }
  .px-xxl-40-px {
    padding-left: 40px !important;
    padding-right: 40px !important;
  }
  .pt-xxl-40-px {
    padding-top: 40px !important;
  }
  .pr-xxl-40-px {
    padding-right: 40px !important;
  }
  .pb-xxl-40-px {
    padding-bottom: 40px !important;
  }
  .pl-xxl-40-px {
    padding-left: 40px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-48 {
    gap: 48px !important;
  }
  .m-xxl-48-px {
    margin: 48px !important;
  }
  .my-xxl-48-px {
    margin-top: 48px !important;
    margin-bottom: 48px !important;
  }
  .mx-xxl-48-px {
    margin-left: 48px !important;
    margin-right: 48px !important;
  }
  .mt-xxl-48-px {
    margin-top: 48px !important;
  }
  .mr-xxl-48-px {
    margin-right: 48px !important;
  }
  .mb-xxl-48-px {
    margin-bottom: 48px !important;
  }
  .ml-xxl-48-px {
    margin-left: 48px !important;
  }
  .p-xxl-48-px {
    padding: 48px !important;
  }
  .py-xxl-48-px {
    padding-top: 48px !important;
    padding-bottom: 48px !important;
  }
  .px-xxl-48-px {
    padding-left: 48px !important;
    padding-right: 48px !important;
  }
  .pt-xxl-48-px {
    padding-top: 48px !important;
  }
  .pr-xxl-48-px {
    padding-right: 48px !important;
  }
  .pb-xxl-48-px {
    padding-bottom: 48px !important;
  }
  .pl-xxl-48-px {
    padding-left: 48px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-64 {
    gap: 64px !important;
  }
  .m-xxl-64-px {
    margin: 64px !important;
  }
  .my-xxl-64-px {
    margin-top: 64px !important;
    margin-bottom: 64px !important;
  }
  .mx-xxl-64-px {
    margin-left: 64px !important;
    margin-right: 64px !important;
  }
  .mt-xxl-64-px {
    margin-top: 64px !important;
  }
  .mr-xxl-64-px {
    margin-right: 64px !important;
  }
  .mb-xxl-64-px {
    margin-bottom: 64px !important;
  }
  .ml-xxl-64-px {
    margin-left: 64px !important;
  }
  .p-xxl-64-px {
    padding: 64px !important;
  }
  .py-xxl-64-px {
    padding-top: 64px !important;
    padding-bottom: 64px !important;
  }
  .px-xxl-64-px {
    padding-left: 64px !important;
    padding-right: 64px !important;
  }
  .pt-xxl-64-px {
    padding-top: 64px !important;
  }
  .pr-xxl-64-px {
    padding-right: 64px !important;
  }
  .pb-xxl-64-px {
    padding-bottom: 64px !important;
  }
  .pl-xxl-64-px {
    padding-left: 64px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-80 {
    gap: 80px !important;
  }
  .m-xxl-80-px {
    margin: 80px !important;
  }
  .my-xxl-80-px {
    margin-top: 80px !important;
    margin-bottom: 80px !important;
  }
  .mx-xxl-80-px {
    margin-left: 80px !important;
    margin-right: 80px !important;
  }
  .mt-xxl-80-px {
    margin-top: 80px !important;
  }
  .mr-xxl-80-px {
    margin-right: 80px !important;
  }
  .mb-xxl-80-px {
    margin-bottom: 80px !important;
  }
  .ml-xxl-80-px {
    margin-left: 80px !important;
  }
  .p-xxl-80-px {
    padding: 80px !important;
  }
  .py-xxl-80-px {
    padding-top: 80px !important;
    padding-bottom: 80px !important;
  }
  .px-xxl-80-px {
    padding-left: 80px !important;
    padding-right: 80px !important;
  }
  .pt-xxl-80-px {
    padding-top: 80px !important;
  }
  .pr-xxl-80-px {
    padding-right: 80px !important;
  }
  .pb-xxl-80-px {
    padding-bottom: 80px !important;
  }
  .pl-xxl-80-px {
    padding-left: 80px !important;
  }
}

@media (min-width: 1500px) {
  .gap-xxl-92 {
    gap: 92px !important;
  }
  .m-xxl-92-px {
    margin: 92px !important;
  }
  .my-xxl-92-px {
    margin-top: 92px !important;
    margin-bottom: 92px !important;
  }
  .mx-xxl-92-px {
    margin-left: 92px !important;
    margin-right: 92px !important;
  }
  .mt-xxl-92-px {
    margin-top: 92px !important;
  }
  .mr-xxl-92-px {
    margin-right: 92px !important;
  }
  .mb-xxl-92-px {
    margin-bottom: 92px !important;
  }
  .ml-xxl-92-px {
    margin-left: 92px !important;
  }
  .p-xxl-92-px {
    padding: 92px !important;
  }
  .py-xxl-92-px {
    padding-top: 92px !important;
    padding-bottom: 92px !important;
  }
  .px-xxl-92-px {
    padding-left: 92px !important;
    padding-right: 92px !important;
  }
  .pt-xxl-92-px {
    padding-top: 92px !important;
  }
  .pr-xxl-92-px {
    padding-right: 92px !important;
  }
  .pb-xxl-92-px {
    padding-bottom: 92px !important;
  }
  .pl-xxl-92-px {
    padding-left: 92px !important;
  }
}
.text-caption, .feedback-card-footer, .text-caption-accent, .call-back-modal .call-back-modal-location-button-text, .order-status {
    font-weight: 500 !important;
    font-size: 12px !important;
    line-height: 14px !important;
}
.text-secondary, .feedback-card-footer, .reviews-drawer-title > sup {
    color: var(--secondary-text-color) !important;
    margin-top: 20px;
}
.checkbox-control {
    font-size: 16px;
    line-height: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}
.checkbox-control input[type=checkbox] {
    appearance: none;
    position: relative;
    height: 24px;
    width: 24px;
    min-width: 24px;
    visibility: visible;  /* просто уберите/переопределите visibility:hidden */
    margin: 0;
}
.checkbox-control input[type=checkbox]:not(.checkbox-input-colored):before {
    background-color: var(--foreground-color);
}
.checkbox-control input[type=checkbox]:checked:not(.checkbox-input-colored):before {
    background-color: var(--primary-color);
}
.checkbox-control input[type=checkbox]:checked:after {
    visibility: visible;
    content: "";
    background-image: url(data:image/svg+xml,%3csvg%20width='12'%20height='10'%20viewBox='0%200%2012%2010'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M10.7992%201.40039L3.6397%208.60039L1.19922%206.14611'%20stroke='%23212121'%20stroke-width='2'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: absolute;
    width: 12px;
    height: 10px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.feedback-card {
    border-radius: 45px;
    position:relative; 
    overflow: visible;
    padding:32px; 
    border-radius:8px; 
    box-shadow:0 4px 16px rgba(0,0,0,0.1); 
    background:#fff;

}
.corp-form-col{
  flex: 0 0 25%;
  max-width: 25%;
  min-width: 320px; /* чтобы влезала капча */
}
.cards_corp {
  flex: 1 1 0;
  min-width: 0;
}
.checkbox-control input[type=checkbox]:before {
    visibility: visible;
    content: "";
    display: flex;
    justify-content: center;
    line-height: 25px;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    border-radius: 6px;
    border: 1px solid var(--border-color);
    background-color: inherit;
}
.feedback-card .feedback-card-form .checkbox-control span {
    font-size: 12px;
    line-height: normal;
}
.feedback-card-footer a {
    text-decoration: underline;
    text-underline-offset: 3px;
}


.text-large-accent {
  font-weight: 600 !important;
}

.text-disabled {
  opacity: 0.35;
}

.text-stroke {
  text-decoration: line-through;
}

.text-ellipsis {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.article {
  display: flex;
  flex-direction: column;
}

.article p {
  margin-bottom: 16px;
}

@media (min-width: 600px) {
  .article p {
    margin-bottom: 32px;
  }
}

.article h1, .article h3 {
  margin: 16px 0;
}

@media (min-width: 600px) {
  .article h1, .article h3 {
    margin-bottom: 20px;
  }
}

.article h2 {
  font-weight: 600;
  font-size: 30px;
  line-height: 34px;
  margin: 32px 0;
}

.article ul {
  padding-left: 24px;
  display: flex;
  flex-direction: column;
  gap: 16px;
  margin: 0 0 24px 0;
}

.article ul li::marker {
  color: var(--primary-color);
  font-size: 24px;
}

@media (min-width: 600px) {
  .article ul {
    gap: 20px;
  }
}

@media (min-width: 1000px) {
  .article ul {
    margin-bottom: 32px;
  }
}

@media (min-width: 1500px) {
  .article ul {
    margin-bottom: 40px;
  }
}

.article ul.check-list {
  padding-left: 0;
}

.article ul.check-list li {
  background: url("data:image/svg+xml,%3csvg%20width='25'%20height='24'%20viewBox='0%200%2025%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M3.5%2012C3.5%207.02944%207.52944%203%2012.5%203C17.4706%203%2021.5%207.02944%2021.5%2012C21.5%2016.9706%2017.4706%2021%2012.5%2021C7.52944%2021%203.5%2016.9706%203.5%2012Z'%20fill='%23FFE63F'/%3e%3cpath%20d='M15.642%209.98299L11.375%2014.25L9.92049%2012.7955M12.5%203C7.52944%203%203.5%207.02944%203.5%2012C3.5%2016.9706%207.52944%2021%2012.5%2021C17.4706%2021%2021.5%2016.9706%2021.5%2012C21.5%207.02944%2017.4706%203%2012.5%203Z'%20stroke='%23212121'%20stroke-width='2'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e") no-repeat 2px 2px;
  list-style-type: none;
  padding-left: 46px;
}

.article ol {
  padding: 0;
  margin: 0 0 24px 0;
  display: flex;
  flex-direction: column;
  gap: 16px;
}

@media (min-width: 600px) {
  .article ol {
    gap: 20px;
  }
}

@media (min-width: 1000px) {
  .article ol {
    margin-bottom: 32px;
  }
}

@media (min-width: 1500px) {
  .article ol {
    margin-bottom: 40px;
  }
}

.article ol li {
  list-style: none;
  display: flex;
  gap: 12px;
  align-items: start;
}

.article ol li .list-number {
  min-width: 28px;
  width: 28px;
  height: 28px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  border: 1px solid var(--text-color);
  font-weight: 600;
  font-size: 14px;
  line-height: 16px;
  text-align: center;
}

@media (min-width: 600px) {
  .article ol li {
    gap: 16px;
  }
  .article ol li .list-number {
    min-width: 30px;
    width: 30px;
    height: 30px;
  }
}

.article p, .article ul, .article ol {
  font-weight: 400;
  font-size: 18px;
  line-height: 28px;
}

@media (min-width: 600px) {
  .article p, .article ul, .article ol {
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
  }
}

.article .article-no-margins > * {
  margin: 0 !important;
}

table.article-table {
  border-collapse: collapse;
  margin-bottom: 24px;
}

@media (min-width: 1000px) {
  table.article-table {
    margin-bottom: 40px;
  }
}

table.article-table tr {
  border-bottom: 1px solid var(--border-color);
}

table.article-table td {
  padding: 16px 16px 16px 0;
}

table.article-table td:first-of-type {
  font-weight: 600;
}

table.article-table td:last-of-type {
  padding-right: 0;
}

.drawer {
  position: fixed;
  height: 100%;
  width: 100%;
  top: 0;
  z-index: var(--z-index-drawer);
  background-color: var(--overlay-bg-color);
  opacity: 0;
  pointer-events: none;
  transition: opacity 50ms linear;
}

.drawer.drawer-left {
  left: 0;
}

.drawer.drawer-left .drawer-content {
  left: 0;
  transform: translateX(-100%);
}

.drawer.drawer-right {
  right: 0;
}

.drawer.drawer-right .drawer-content {
  right: 0;
  transform: translateX(100%);
}

.drawer .drawer-content {
  z-index: var(--z-index-drawer-content);
  position: absolute;
  height: 100%;
  top: 0;
  transition: transform 200ms;
  background-color: var(--foreground-color);
  width: calc(100% - 17px);
  max-width: 440px;
  display: flex;
  flex-direction: column;
}
.drawer .drawer-content.drawer-content-full-width {
  width: 100%;
}

@media (max-width: 999.98px) {
  .drawer .drawer-content.drawer-content-full-width-up-to-md {
    max-width: none;
    width: 100%;
  }
}

.drawer .drawer-content .drawer-body {
  overflow-y: auto;
  flex-grow: 1;
  padding: 16px 16px;
}
    </style>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var form = document.querySelector('.js-corp-client-form');
  if (!form) {
    return;
  }

  var phoneInput = form.querySelector('input[name="phone"]');
  var emailInput = form.querySelector('input[name="email"]');
  var submitButton = form.querySelector('button[type="submit"]');
  var errorBlock = form.querySelector('.js-corp-client-error');
  function clearError() {
    errorBlock.textContent = '';
    errorBlock.classList.remove('is-visible');
  }

  function showError(message) {
    errorBlock.textContent = message;
    errorBlock.classList.add('is-visible');
  }

  function normalizePhone(value) {
    var digits = value.replace(/\D/g, '');
    if (!digits.length) {
      return '';
    }
    if (digits.charAt(0) === '8') {
      digits = '7' + digits.slice(1);
    }
    if (digits.charAt(0) !== '7') {
      digits = '7' + digits;
    }
    return digits.slice(0, 11);
  }

  function formatPhone(value) {
    var digits = normalizePhone(value);
    if (!digits) {
      return '';
    }

    var parts = ['+7'];
    if (digits.length > 1) {
      parts.push(' (' + digits.slice(1, 4));
    }
    if (digits.length >= 4) {
      parts[1] += ')';
    }
    if (digits.length > 4) {
      parts.push(' ' + digits.slice(4, 7));
    }
    if (digits.length > 7) {
      parts.push('-' + digits.slice(7, 9));
    }
    if (digits.length > 9) {
      parts.push('-' + digits.slice(9, 11));
    }
    return parts.join('');
  }

  function isValidPhone(value) {
    return /^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/.test(value);
  }

  phoneInput.addEventListener('input', function () {
    phoneInput.value = formatPhone(phoneInput.value);
  });

  phoneInput.addEventListener('blur', function () {
    if (phoneInput.value && !isValidPhone(phoneInput.value)) {
      phoneInput.setCustomValidity('Введите телефон в формате +7 (999) 999-99-99');
    } else {
      phoneInput.setCustomValidity('');
    }
  });

  emailInput.addEventListener('blur', function () {
    if (emailInput.value && !emailInput.checkValidity()) {
      emailInput.setCustomValidity('Укажите корректный email');
    } else {
      emailInput.setCustomValidity('');
    }
  });

  form.addEventListener('submit', function (event) {
    event.preventDefault();
    clearError();

    phoneInput.dispatchEvent(new Event('blur'));
    emailInput.dispatchEvent(new Event('blur'));

    if (!form.reportValidity()) {
      return;
    }

    submitButton.disabled = true;
    var body = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: body,
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (result) {
        if (result && result.success) {
          form.classList.add('is-success');
          clearError();
          return;
        }

        if (result && result.error) {
          showError(result.error);
        } else {
          showError('Не удалось отправить заявку. Попробуйте ещё раз.');
        }

      })
      .catch(function () {
        showError('Не удалось отправить заявку. Попробуйте ещё раз.');
      })
      .finally(function () {
        submitButton.disabled = false;
      });
  });
});
</script>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
