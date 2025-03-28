<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

// Если результат пустой, возвращаем пустую строку
if (empty($arResult)) return "";

$strReturn = '';

// Подключение FontAwesome, если не загружен
$css = $APPLICATION->GetCSSArray();
if (!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css)) {
    $strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

// Новый блок с фоновым изображением
$strReturn .= '
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('.SITE_TEMPLATE_PATH.'/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2">'.$APPLICATION->GetTitle().'</h1>
                <div>';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $arrow = ($index > 0 ? '<span class="mx-2 text-white">&bullet;</span>' : '');

    // Добавление выделения для главной страницы (первого элемента)
    $class = ($index == 0) ? 'class="text-orange"' : 'class="text-white"';

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize-1) {
        $strReturn .= '
            '.$arrow.'
            <a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item" '.$class.'>
                <span itemprop="name">'.$title.'</span>
            </a>';
    } else {
        $strReturn .= '
            '.$arrow.'
            <span '.$class.'>'.$title.'</span>';
    }
}

$strReturn .= '</div>
            </div>
        </div>
    </div>
</div>';

return $strReturn;
?>
