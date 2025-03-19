


<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "COMPOSITE_FRAME_MODE" => "A",
              "COMPOSITE_FRAME_TYPE" => "AUTO",
              "EDIT_TEMPLATE" => "",
              "PATH" => "local/templates/home/components/footer/about.php"
            )
          );?>
          </div>



        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
            <?$APPLICATION->IncludeComponent(
              "bitrix:menu", 
              "new_footer", 
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
                "COMPONENT_TEMPLATE" => "new_footer",
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

        

        <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "EDIT_TEMPLATE" => "",
            "PATH" => "local/templates/home/components/footer/follow.php"
          )
        );?>



        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "EDIT_TEMPLATE" => "",
            "PATH" => "local/templates/home/components/footer/text.php"
          )
        );?>
        </div>

      </div>
    </div>
  </footer>

  </div>


</body>

</html>
