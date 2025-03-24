<?php 
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>

<div class="footer-container row">
    <div class="col-md-6 col-lg-6">
        <h3 class="footer-heading mb-4"><?= GetMessage("FOOTER_NAME") ?></h3>
        <ul class="list-unstyled">
            <li><a href="/"><?= GetMessage("FOOTER_HOME") ?></a></li>
            <li><a href="/ads/"><?= GetMessage("FOOTER_ADS") ?></a></li>
            <li><a href="/news/"><?= GetMessage("FOOTER_SERVICE_NEWS") ?></a></li>
            <li><a href="/agents/"><?= GetMessage("FOOTER_SERVICE_AGENTS") ?></a></li>
        </ul>
    </div>

    <div class="col-md-6 col-lg-6">
        <!-- Пустой заголовок для выравнивания -->
        <h3 class="footer-heading mb-4" style="visibility: hidden;">&nbsp;</h3>
        <ul class="list-unstyled">
            <li><a href="/servise/vacancies/"><?= GetMessage("FOOTER_SERVICE_VACANCIES") ?></a></li>
            <li><a href="/servise/contacts/"><?= GetMessage("FOOTER_SERVICE_CONTACTS") ?></a></li>
            <li><a href="/servise/contacts/feedback.php"><?= GetMessage("FOOTER_SERVICE_CONTACTS_ROUTINE_CONNECT") ?></a></li>
        </ul>
    </div>
</div>
