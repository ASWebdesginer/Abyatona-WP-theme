<header class="p-0 desktop-header" id="header">
      <div class="container">
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
                        echo '<a class="dropdown-item" href="' . esc_html($link) . '">| ' . esc_html($text) . '</a> ';
                      }
                    }
                  }
                  ?>

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
              <a href="">
                <button class="contact-btn">Contact us</button>
              </a>
              <form action="" method="POST">
                <select class="lang-select" name="locale" onchange="this.form.submit()">

                  <option value="en">English</option>
                  <option value="ar">عربي</option>


                </select>

              </form>
            </li>
            <!-- <li>
            <?php /* echo do_shortcode('[gtranslate]');*/?>
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
                        echo '<a class="dropdown-item" href="' . esc_html($link) . '">| ' . esc_html($text) . '</a> ';
                      }
                    }
                  }
                  ?>

                </div>

              </div>
            </li>



            <li class="d-flex justify-content-end">
              <a href="">
                <button class="contact-btn">Contact us</button>
              </a>
              <form action="" method="POST">
                <select class="lang-select" name="locale" onchange="this.form.submit()">

                  <option value="en" >English</option>
                  <option value="ar" >عربي</option>


                </select>

              </form>
            </li>
            <li>
            <?php echo do_shortcode('[gtranslate]');?>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="arabic">


      <header class="desktop-header" id="header">
        <nav>
          <ul>
            <li>
              <div class="dropdown">
                <button class="dropbtn">
                  <a href="index.php"> الرئيسية<i class="fa-solid fa-angle-down"></i></a>
                </button>
                <div class="dropdown-content">
                  <a class="dropdown-item" href="vision-mision.php">| الرؤية والرسالة</a>
                  <a class="dropdown-item" href="about.php">| عن الشركة</a>
                  <a class="dropdown-item" href="our-services.php">| خدماتنا</a>
                  <a class="dropdown-item" href="wahat-aldamam.php">| واحة الدمام</a>
                  <a class="dropdown-item" href="abyatona-lily.php">| أبياتونا ليلي</a>
                  <a class="dropdown-item" href="abyatona-hill.php">| أبياتونا هيلز</a>
                  <a class="dropdown-item" href="abyatona-bay.php">| خليج أبياتونا</a>
                  <a class="dropdown-item" href="jeddah-heights.php">| جدة هايتس</a>
                  <a class="dropdown-item" href="contact-us.php">| اتصل بنا</a>
                </div>
              </div>


            </li>
            <li>
              <img src="img/logo.png" alt="شعار" />
            </li>
            <li class="d-flex justify-content-end">
              <a href="">
                <button class="contact-btn">اتصل بنا</button>
              </a>
              <form action="" method="POST">
                <select class="lang-select" name="locale" onchange="this.form.submit()">

                  <option value="en" <?php if ($_SESSION['locale'] == 'en') echo 'selected'; ?>>English</option>
                  <option value="ar" <?php if ($_SESSION['locale'] == 'ar') echo 'selected'; ?>>عربي</option>


                </select>

              </form>
            </li>
          </ul>
        </nav>
      </header>

      <header class="p-0 mobile-header" id="header">
        <ul class="d-flex justify-content-center pt-4 mb-4">
          <li>
            <a href="index.php"><img src="img/logo.png" class="black-logo" alt="logo" /></a>
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
                  <a class="dropdown-item" href="vision-mision.php">| الرؤية والرسالة</a>
                  <a class="dropdown-item" href="about.php">| عن الشركة</a>
                  <a class="dropdown-item" href="our-services.php">| خدماتنا</a>
                  <a class="dropdown-item" href="wahat-aldamam.php">| واحة الدمام</a>
                  <a class="dropdown-item" href="abyatona-lily.php">| أبياتونا ليلي</a>
                  <a class="dropdown-item" href="abyatona-hill.php">| أبياتونا هيلز</a>
                  <a class="dropdown-item" href="abyatona-bay.php">| خليج أبياتونا</a>
                  <a class="dropdown-item" href="jeddah-heights.php">| جدة هايتس</a>
                  <a class="dropdown-item" href="contact-us.php">| اتصل بنا</a>
                </div>
              </div>
            </li>

            <li class="d-flex justify-content-end">
              <a href="">
                <button class="contact-btn">اتصل بنا</button>
              </a>
              <form action="" method="POST">
                <select class="lang-select" name="locale" onchange="this.form.submit()">

                  <option value="en" <?php if ($_SESSION['locale'] == 'en') echo 'selected'; ?>>English</option>
                  <option value="ar" <?php if ($_SESSION['locale'] == 'ar') echo 'selected'; ?>>عربي</option>


                </select>

              </form>
            </li>
          </ul>
        </nav>
      </header>
    </div>