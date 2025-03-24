<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?>
<?$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");?>

 <?php
$arFilter = [
    "PROPERTY_PRIORITY_DEAL_VALUE" => "Да",
    "ACTIVE" => "Y",
];?> 

<?$APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "priority_ads",
  Array(
    "ADD_SECTIONS_CHAIN" => "N",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "3600",
    "CACHE_TYPE" => "N",
    "CHECK_DATES" => "Y",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array("PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_PICTURE",),
    "FILTER_NAME" => "arFilter",
    "IBLOCK_ID" => "6",
    "IBLOCK_TYPE" => "ads",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "NEWS_COUNT" => "5",
    "PAGER_SHOW_ALWAYS" => "N",
    "PROPERTY_CODE" => array("PRIORITY_DEAL","PRICE",),
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SORT_BY1" => "ACTIVE_FROM",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "DESC",
    "SORT_ORDER2" => "ASC"
  )
);?>


 <br>
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/home/components/advantages/advantage1.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/home/components/advantages/advantage2.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "",
		"PATH" => "local/templates/home/components/advantages/advantage3.php"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>New Properties for You</h2>
				</div>
			</div>
		</div>
        <div class="row mb-5">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.line", 
                "custom_ads", 
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "259200",
                    "CACHE_TYPE" => "A",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "",
                    "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT"),
                    "PROPERTY_CODE" => array("PRICE", "TOTAL_AREA", "FLOORS", "BATHROOMS", "GARAGE"),
                    "IBLOCK_TYPE" => "ads",
                    "NEWS_COUNT" => "9",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "COMPONENT_TEMPLATE" => "custom_ads"
                ),
                false
            );?>
        </div>
	</div>
</div>

 

 <br>
<div class="site-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 text-center mb-5">
				<div class="site-section-title">
					<h2>Our Services</h2>
				</div>
			</div>
		</div>
		<div class="row">
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"services", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "7776000",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "LINK",
		),
		"IBLOCK_TYPE" => "servise",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "services",
		"IBLOCKS" => array(
		)
	),
	false
);
		?>		
		</div>
	</div>
</div>


<div class="site-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center">
				<div class="site-section-title">
					<h2>Our Blog</h2>
				</div>
			</div>
		</div>
		<div class="row">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.line", 
			"news", 
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "604800",
				"CACHE_TYPE" => "A",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"DETAIL_URL" => "",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "PREVIEW_TEXT",
					2 => "DATE_CREATE",
					3 => "PREVIEW_PICTURE",
				),
				"IBLOCKS" => array(
					0 => "1",
				),
				"IBLOCK_TYPE" => "news",
				"NEWS_COUNT" => "3",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"COMPONENT_TEMPLATE" => "news"
			),
			false
		);?>
		</div>
	</div>
</div>




 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>