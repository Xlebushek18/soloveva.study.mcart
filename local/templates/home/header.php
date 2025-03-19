<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
  <title><?$APPLICATION->ShowTitle()?></title>
  <?$APPLICATION->ShowHead();?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

<?php
  use Bitrix\Main\Page\Asset;
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/fonts/icomoon/style.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/magnific-popup.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/jquery-ui.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.theme.default.min.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-datepicker.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/mediaelementplayer.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/animate.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/fonts/flaticon/font/flaticon.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/fl-bigmug-line.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/aos.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
?>

  <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ui.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/popper.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/mediaelement-and-player.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.stellar.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.countdown.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-datepicker.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/aos.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>

  <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
  
</head>

<body>

  <?$APPLICATION->ShowPanel();?>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "EDIT_TEMPLATE" => "",
                "PATH" => "local/templates/home/components/header/phone.php"
              )
            );?>
              <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "EDIT_TEMPLATE" => "",
                "PATH" => "local/templates/home/components/header/email.php"
              )
            );?>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
          <?$APPLICATION->IncludeComponent(
             "bitrix:main.include",
             "",
             Array(
               "AREA_FILE_SHOW" => "file",
               "AREA_FILE_SUFFIX" => "inc",
               "COMPOSITE_FRAME_MODE" => "A",
               "COMPOSITE_FRAME_TYPE" => "AUTO",
               "EDIT_TEMPLATE" => "",
               "PATH" => "local/templates/home/components/header/social.php"
             )
           );?>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "EDIT_TEMPLATE" => "",
                "PATH" => "local/templates/home/components/header/logo.php"
              )
            );?>
            </h1>
          </div>
          <?$APPLICATION->IncludeComponent(
              "bitrix:menu", 
              "new_menu", 
              array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "3",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "36000000",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "COMPONENT_TEMPLATE" => "new_menu",
                "DELAY" => "Y",
                "ALLOW_MULTI_SELECT" => "N",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "STATIC"
              ),
              false,
              array(
                "ACTIVE_COMPONENT" => "Y"
              )
            );?>


        </div>
      </div>
    </div>
  </div>

