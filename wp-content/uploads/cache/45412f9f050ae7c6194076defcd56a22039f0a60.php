<header>
  <div class="container-fluid">
      <div class="row">
          <div class="col-2 col-md-6 col-lg-2">
              <a href="/"><img src="/wp-content/themes/greenleaf/dist/images/logo.svg" class="main_logo"></a>
          </div>
          <div class="col-8 col-md-8 col-lg-8 d-flex align-items-center justify-content-center text-center mobile-res">
            
              <ul class="main_menu">
                <?php
                $_menu = wp_get_nav_menu_items('Main Menu');
                if(!empty($_menu)){
                  foreach ($_menu as $item) {
                ?>
                <li><a href="<?=$item->url?>" class="link"><?=$item->title?></a></li>
                <?php
                  }
                }
              ?>
              </ul>
          </div>
          <div class="col-2 col-lg-2 d-flex align-items-center justify-content-end mobile-res">
              <div class="social_media">
                  <a href=""><img src="/wp-content/themes/greenleaf/dist/images/twitter.svg"></a>
                  <a href=""><img src="/wp-content/themes/greenleaf/dist/images/facebook.svg"></a>
                  <a href=""><img src="/wp-content/themes/greenleaf/dist/images/instagram.svg"></a>
              </div>
          </div>
          <div class="menu_mobile">
              <img src="/wp-content/themes/greenleaf/dist/images/menu.svg">
          </div>
      </div>
  </div>
  <div class="menu_mobile_modal text-center d-flex align-items-center justify-content-center">
    <div class="close_modal"><img src="/wp-content/themes/greenleaf/dist/images/close.svg"></div>
    <div>
        <ul>
            <?php
            $_menu = wp_get_nav_menu_items('Main Menu');
            if(!empty($_menu)){
              foreach ($_menu as $item) {
            ?>
            <li><a href="<?=$item->url?>" class="link white_text"><?=$item->title?></a></li>
            <?php
              }
            }
          ?>
          </ul>
        <div class="social_media_mobile">
            <a href=""><img src="/wp-content/themes/greenleaf/dist/images/twitter-white.svg"></a>
            <a href=""><img src="/wp-content/themes/greenleaf/dist/images/facebook-white.svg"></a>
            <a href=""><img src="/wp-content/themes/greenleaf/dist/images/instagram-white.svg"></a>
        </div>
    </div>
  </div>
</header>
