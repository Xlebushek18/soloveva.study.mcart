<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="row">
    <?php foreach ($arResult["ITEMS"] as $key => $arItem): ?>
        <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), [
                "CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')
            ]);
        ?>
        <div class="col-md-6 col-lg-4 mb-5" id="<?= $this->GetEditAreaId($arItem['ID']) ?>" data-aos="fade-up" data-aos-delay="<?= ($key + 1) * 100 ?>">
            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= htmlspecialchars($arItem["NAME"]) ?>" class="img-fluid">
            </a>
            <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase">
                    <?= FormatDate("d F Y", MakeTimeStamp($arItem["DATE_CREATE"])) ?>
                </span>
                <h2 class="h5 text-black mb-3">
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                        <?= htmlspecialchars($arItem["NAME"]) ?>
                    </a>
                </h2>
                <p><?= htmlspecialchars($arItem["PREVIEW_TEXT"]) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
