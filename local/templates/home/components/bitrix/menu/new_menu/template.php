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

if (empty($arResult)) {
    return;
}
?>

<div class="col-4 col-md-4 col-lg-8">
    <nav class="site-navigation text-right text-md-right" role="navigation">
        <!-- Мобильное меню -->
        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black">
            </a>
        </div>

        <!-- Основное меню -->
        <ul class="site-menu js-clone-nav d-none d-lg-block">
            <?
            $previousLevel = 0;
            foreach ($arResult as $arItem):
            ?>
                <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                    <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                <?php endif; ?>

                <?php if ($arItem["IS_PARENT"]): ?>
                    <li class="<?= $arItem["SELECTED"] ? 'active' : '' ?> has-children">
                        <a href="<?= $arItem["LINK"] ?>" style="white-space: nowrap; padding-right: 20px;">
                            <?= $arItem["TEXT"] ?>
                        </a>
                        <ul class="dropdown">
                <?php else: ?>
                    <li class="<?= $arItem["SELECTED"] ? 'active' : '' ?>">
                        <a href="<?= $arItem["LINK"] ?>" style="white-space: nowrap; padding-right: 20px;">
                            <?= $arItem["TEXT"] ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
            <?php endforeach; ?>

            <?php if ($previousLevel > 1): ?>
                <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
            <?php endif; ?>
        </ul>
    </nav>
</div>