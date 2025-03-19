<?if (!empty($arResult["ITEMS"])):?> 
    <div class="row mb-5">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
            <div class="col-md-4 col-lg-4 mb-4 d-flex align-items-stretch" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block w-100">
                    <figure>
                        <img alt="Image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">
                                ₽<?=isset($arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]) ? number_format($arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"], 0, '.', ',') : 'N/A'?>
                            </span>
                            <h3 class="title"><?=$arItem["NAME"]?></h3>
                            <p class="location"><?=$arItem["PREVIEW_TEXT"]?></p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <?=GetMessage("AREA")?>: <strong><?=isset($arItem["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"]) 
                                        ? $arItem["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"] 
                                        : GetMessage("N_A")?>m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <?=GetMessage("BEDS")?>: <strong><?=isset($arItem["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"]) 
                                        ? $arItem["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"] 
                                        : GetMessage("N_A")?></strong>
                                </div>
                                <div class="col">
                                    <?=GetMessage("BATHS")?>: <strong><?=isset($arItem["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"]) 
                                        ? $arItem["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"] 
                                        : GetMessage("N_A")?></strong>
                                </div>
                                <div class="col">
                                    <?=GetMessage("GARAGES")?>: <strong><?=isset($arItem["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"]) 
                                        ? $arItem["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"] 
                                        : GetMessage("N_A")?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?endforeach;?>
    </div>
<?endif;?>
