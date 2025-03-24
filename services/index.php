<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?>

<div class="site-section border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
      <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => SITE_TEMPLATE_PATH . "/components/services/image.php"
          )
        );?>
			</div>
			<div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
				<div class="site-section-title mb-3">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => SITE_TEMPLATE_PATH . "/components/services/title.php"
          )
        );?>
				</div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "PATH" => SITE_TEMPLATE_PATH . "/components/services/text.php"
          )
        );?>
			</div>
		</div>
	</div>
</div>
<br>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>