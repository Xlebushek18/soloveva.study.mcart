<div class="row"> 
    <?php if (!empty($arResult["ITEMS"])): ?>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), [
                    "CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')
                ]);
            ?>
            <div class="col-md-6 col-lg-4 mb-4 d-flex align-items-stretch" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
                <a href="<?= !empty($arItem["PREVIEW_TEXT"]) ? trim($arItem["PREVIEW_TEXT"]) : '#' ?>" 
                   class="service text-center border rounded w-100 d-flex flex-column">
                    <figure class="flex-grow-1 d-flex align-items-center justify-content-center">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" class="img-fluid">
                    </figure>
                    <h2 class="service-heading"><?=$arItem["NAME"]?></h2>
                    <p>
                        <span class="read-more"><?=GetMessage("LEARN_MORE")?></span>
                    </p>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
