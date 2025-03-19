<?php if (!empty($arResult["ITEMS"])): ?> 
    <div class="slide-one-item home-slider owl-carousel">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), [
                    "CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')
                ]);
            ?>
            <div class="site-blocks-cover" id="<?= $this->GetEditAreaId($arItem['ID']) ?>" 
                 style="background-image: url(<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>);" 
                 data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="text">
                    <h2><?= $arItem['NAME'] ?></h2>
                    <p class="location">
                        <span class="property-icon icon-room"></span>
                        <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                    <p class="mb-2"><strong><?= $arItem['PROPERTIES']['PRICE']['VALUE'] ?></strong></p>
                    <p class="mb-0">
                        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="text-uppercase small letter-spacing-1 font-weight-bold">
                            More Details
                        </a>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
