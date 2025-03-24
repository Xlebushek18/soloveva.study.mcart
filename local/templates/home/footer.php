<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/components/footer/about.php"
                    )
                );?>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "new_footer",
                            array(
                                "ROOT_MENU_TYPE" => "top",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "36000000"
                            )
                        );?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/components/footer/follow.php"
                    )
                );?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
