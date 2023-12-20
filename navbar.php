<?php 



// check language
$selected_locale = '';
if (isset($_SESSION['locale'])) {
    $selected_locale = $_SESSION['locale'];
}
if ($selected_locale === 'en' ) {
  ?>

<header class=" desktop-header" id="header">
  <div class="container">
    <nav>
      <ul>
        <li>

          <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Home
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <ul class="mainmenulist">
              <?php
              // Specify the menu location
              $menu_location = 'custom_menu';

              // Get the menu object by location
              $menu_object = get_nav_menu_locations();
              $menu_id = isset($menu_object[$menu_location]) ? $menu_object[$menu_location] : null;

              // Check if the menu ID exists
              if ($menu_id) {
                // Get menu items from the specified menu
                $menu_items = wp_get_nav_menu_items($menu_id);

                // Check if there are menu items
                if ($menu_items) {
                 
                    $subitems=[];
                  foreach($menu_items as $menu_item){
                      if($menu_item->menu_item_parent !== '0'){
                          $subitemarray=array("id"=>$menu_item->menu_item_parent , "item"=>$menu_item );
                        array_push($subitems,$subitemarray);
                      }
                  }
                  $currentitemid='';
                  foreach ($menu_items as $index => $menu_item) {
                    // Get the text and link (URL) of the menu item
                    $text = $menu_item->title;
                    $link = $menu_item->url;
                    // Output or use the text and link as needed
                    if($menu_item->menu_item_parent == '0' ){
                        if($menu_items[$index + 1]->menu_item_parent == '0'){
                           echo '<li><a class="dropdown-item" href="' . esc_html($link) . '">' . esc_html($text) . '</a> </li>';      
                        }
                        else{
                          echo '<li><a class="dropdown-item" href="' . esc_html($link) . '">' . esc_html($text) . '</a>';      
                        }
                    }
                    else{
                       
                        if($menu_item->menu_item_parent === $currentitemid){
                              continue;
                     }
                     else{
                          echo "<ul class='submenulist'>";
                         foreach($subitems as $subitem){
                         if($subitem["id"] == $menu_item->menu_item_parent){
                          echo '<li> <a class="dropdown-item" href="' . esc_html($subitem['item']->url) . '">' . esc_html($subitem['item']->title) . '</a> </li>';   
                         } 
                        } 
                     }
                        echo "</ul> </li>";
                        $currentitemid=$menu_item->menu_item_parent;
                    }
                 
                  }
                }
              }
              ?>
              </ul>
            </div>
          </div>
        </li>

        <li>
          <?php
          $logo_url = get_theme_mod('theme_transparent_logo', '');
          ?>
          <a href="/"><img src="<?php echo esc_url($logo_url); ?>" class="black-logo" alt="logo" /></a>
        </li>

        <li class="d-flex justify-content-end">
          <a href="<?php echo get_home_url();?>/contact-us/">
            <button class="contact-btn">Contact us</button>
          </a>
          <form action="" method="POST">
            <select class="lang-select" name="locale" onchange="this.form.submit()">
              <option value="ar" <?php selected($_SESSION['locale'], 'ar'); ?>>عربي</option>
              <option value="en" <?php selected($_SESSION['locale'], 'en'); ?>>English</option>
       
            </select>
          </form>
        </li>
        <!-- <li>
            <?php /** echo do_shortcode('[gtranslate]'); */ ?>
            </li> -->
      </ul>
    </nav>
  </div>
</header>

<header class="p-0 mobile-header" id="header">
  <div class="container">
    <ul class="d-flex justify-content-center pt-4 mb-4">
      <li>
        <?php
        $logo_url = get_theme_mod('theme_transparent_logo', '');
        ?>
        <a href="/"><img src="<?php echo esc_url($logo_url); ?>" class="black-logo" alt="logo" /></a>
      </li>
    </ul>
    <nav>
      <ul>
        <li>
          <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Home
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                
              <?php
              // Specify the menu location
              $menu_location = 'custom_menu';

              // Get the menu object by location
              $menu_object = get_nav_menu_locations();
              $menu_id = isset($menu_object[$menu_location]) ? $menu_object[$menu_location] : null;

              // Check if the menu ID exists
              if ($menu_id) {
                // Get menu items from the specified menu
                $menu_items = wp_get_nav_menu_items($menu_id);

                // Check if there are menu items
                if ($menu_items) {
                  foreach ($menu_items as $menu_item) {
                    // Get the text and link (URL) of the menu item
                    $text = $menu_item->title;
                    $link = $menu_item->url;

                    // Output or use the text and link as needed
                    echo '<a class="dropdown-item" href="' . esc_html($link) . '"> ' . esc_html($text) . '</a> ';
                  }
                }
              }
              ?>
            </div>
          </div>
        </li>
        <li class="d-flex justify-content-end">
          <a href="<?php echo get_home_url();?>/contact-us/">
            <button class="contact-btn">Contact us</button>
          </a>
          <form action="" method="POST">
            <select class="lang-select" name="locale" onchange="this.form.submit()">
                
              <option value="ar" <?php selected($_SESSION['locale'], 'ar'); ?>>عربي</option>
              <option value="en" <?php selected($_SESSION['locale'], 'en'); ?>>English</option>
            </select>
          </form>
        </li>
      </ul>
    </nav>
  </div>
</header>
<?php }
else if($selected_locale === 'ar'|| $selected_locale === ''){
 ?>
<div class="arabic">
  <header class="desktop-header" id="header">
    <nav>
      <ul>
        <li>
        <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            الرئيسية
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <ul class="mainmenulist">
              <?php
              // Specify the menu location
              $menu_location = 'custom_menu_ar';

              // Get the menu object by location
              $menu_object = get_nav_menu_locations();
              $menu_id = isset($menu_object[$menu_location]) ? $menu_object[$menu_location] : null;


              if ($menu_id) {
                // Get menu items from the specified menu
                $menu_items = wp_get_nav_menu_items($menu_id);

                // Check if there are menu items
                if ($menu_items) {
                          
                    $subitems=[];
                  foreach($menu_items as $menu_item){
                      if($menu_item->menu_item_parent !== '0'){
                          $subitemarray=array("id"=>$menu_item->menu_item_parent , "item"=>$menu_item );
                        array_push($subitems,$subitemarray);
                      }
                  }
                  $currentitemid='';
                  foreach ($menu_items as $index => $menu_item) {
                    // Get the text and link (URL) of the menu item
                    $text = $menu_item->title;
                    $link = $menu_item->url;
                    // Output or use the text and link as needed
                    if($menu_item->menu_item_parent == '0' ){
                        if($menu_items[$index + 1]->menu_item_parent == '0'){
                           echo '<li><a class="dropdown-item" href="' . esc_html($link) . '">' . esc_html($text) . '</a> </li>';      
                        }
                        else{
                          echo '<li><a class="dropdown-item" href="' . esc_html($link) . '">' . esc_html($text) . '</a>';      
                        }
                    }
                    else{
                       
                        if($menu_item->menu_item_parent === $currentitemid){
                              continue;
                     }
                     else{
                          echo "<ul class='submenulist'>";
                         foreach($subitems as $subitem){
                         if($subitem["id"] == $menu_item->menu_item_parent){
                          echo '<li> <a class="dropdown-item" href="' . esc_html($subitem['item']->url) . '">' . esc_html($subitem['item']->title) . '</a> </li>';   
                         } 
                        } 
                     }
                        echo "</ul> </li>";
                        $currentitemid=$menu_item->menu_item_parent;
                    }
                 
                  }
                }
              }
              ?>
              </ul>
            </div>
          </div>
        </li>
        <li>
        <?php
          $logo_url = get_theme_mod('theme_transparent_logo', '');
          ?>
          <a href="/"><img src="<?php echo esc_url($logo_url); ?>" class="black-logo" alt="logo" /></a>
        </li>
        <li class="d-flex justify-content-end">
          <a href="<?php echo get_home_url();?>/contact-us/">
            <button class="contact-btn">اتصل بنا</button>
          </a>
          <form action="" method="POST">
            <select class="lang-select" name="locale" onchange="this.form.submit()">
              <option value="ar" <?php selected($_SESSION['locale'], 'ar'); ?>>عربي</option>
              <option value="en" <?php selected($_SESSION['locale'], 'en'); ?>>English</option>
            </select>
          </form>
        </li>
      </ul>
    </nav>
  </header>

  <header class="p-0 mobile-header" id="header">
    <ul class="d-flex justify-content-center pt-4 mb-4">
      <li>
      <?php
          $logo_url = get_theme_mod('theme_transparent_logo', '');
          ?>
          <a href="/"><img src="<?php echo esc_url($logo_url); ?>" class="black-logo" alt="logo" /></a>
      </li>
    </ul>

    <nav>
      <ul>
        <li>
        <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            الرئيسية
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <?php
              // Specify the menu location
              $menu_location = 'custom_menu_ar';

              // Get the menu object by location
              $menu_object = get_nav_menu_locations();
              $menu_id = isset($menu_object[$menu_location]) ? $menu_object[$menu_location] : null;

              // Check if the menu ID exists
              if ($menu_id) {
                // Get menu items from the specified menu
                $menu_items = wp_get_nav_menu_items($menu_id);

                // Check if there are menu items
                if ($menu_items) {
                  foreach ($menu_items as $menu_item) {
                    // Get the text and link (URL) of the menu item
                    $text = $menu_item->title;
                    $link = $menu_item->url;

                    // Output or use the text and link as needed
                    echo '<a class="dropdown-item" href="' . esc_html($link) . '">| ' . esc_html($text) . '</a> ';
                  }
                }
              }
              ?>
            </div>
          </div>
        </li>

        <li class="d-flex justify-content-end">
          <a href="<?php echo get_home_url();?>/contact-us/">
            <button class="contact-btn">اتصل بنا</button>
          </a>
          <form action="" method="POST">
            <select class="lang-select" name="locale" onchange="this.form.submit()">
              <option value="ar" <?php selected($_SESSION['locale'], 'ar'); ?>>عربي</option>
              <option value="en" <?php selected($_SESSION['locale'], 'en'); ?>>English</option>
            </select>
          </form>
        </li>
      </ul>
    </nav>
  </header>
</div>
<?php
} ?>