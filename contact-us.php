<?php include('langChange.php') ?>

<?php include('header.php') ?>

<body>
  <?php if ($_SESSION['layout'] == 0) : ?>
    <header class="p-0 desktop-header" id="header">
      <div class="container">
        <nav>
          <ul>
            <li>
            <div class="dropdown">
              <button class="dropbtn">
                <a href="index.php">Home <i class="fa-solid fa-angle-down"></i></a>
              </button>
              <div class="dropdown-content">
              <a class="dropdown-item" href="vision-mision.php">| Vision and Mission</a>
                  <a class="dropdown-item" href="about.php">| About Us</a>
                  <a class="dropdown-item" href="our-services.php">| Our Services</a>
                  <a class="dropdown-item" href="wahat-aldamam.php">| Wahat AlDamam</a>
                  <a class="dropdown-item" href="abyatona-lily.php">| Abyatona Lily</a>
                  <a class="dropdown-item" href="abyatona-hill.php">| Abyatona Hills</a>
                  <a class="dropdown-item" href="abyatona-bay.php">| Abyatona Bay</a>
                  <a class="dropdown-item" href="jeddah-heights.php">| Jeddah Heights</a>
                  <a class="dropdown-item" href="contact-us.php">| Contact us</a>
              </div>
            </div>
            </li>

            <li>
              <a href="index.php"><img src="img/black.png" class="black-logo" alt="logo" /></a>
            </li>

            <li class="d-flex justify-content-end">
              <a href="">
                <button class="contact-btn contact-btn-new">Contact us</button>
              </a>

              <form action="" method="POST">
                <select class="lang-select drop-bg" name="locale" onchange="this.form.submit()">

                  <option value="en" <?php if ($_SESSION['locale'] == 'en') echo 'selected';
                                      ?>>English</option>
                  <option value="ar" <?php if ($_SESSION['locale'] == 'ar') echo 'selected';
                                      ?>>عربي</option>


                </select>

              </form>
            </li>

          </ul>
        </nav>
      </div>
    </header>

    <header class="p-0 mobile-header" id="header">
      <div class="container">
            
            <ul class="d-flex justify-content-center pt-4 mb-4">
           <li>
           <a href="index.php"><img src="img/black.png" class="black-logo" alt="logo" /></a>
            </li>
        </ul>

        <nav>
          <ul>
            <li>
              <div class="dropdown">
                <button class="dropdown-toggle drop-bg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Home
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="vision-mision.php">| Vision and Mission</a>
                  <a class="dropdown-item" href="about.php">| About Us</a>
                  <a class="dropdown-item" href="#">| Our Services</a>
                  <a class="dropdown-item" href="#">| Wahat AlDamam</a>
                  <a class="dropdown-item" href="#">| Abyatona Lily</a>
                  <a class="dropdown-item" href="#">| Abyatona Hills</a>
                  <a class="dropdown-item" href="#">| Jeddah Heights</a>
                  <a class="dropdown-item" href="#">| Contact us</a>

                </div>

              </div>
            </li>

            

            <li class="d-flex justify-content-end">
              <a href="">
                <button class="contact-btn contact-btn-new">Contact us</button>
              </a>

              <form action="" method="POST">
                <select class="lang-select drop-bg" name="locale" onchange="this.form.submit()">

                  <option value="en" <?php if ($_SESSION['locale'] == 'en') echo 'selected';
                                      ?>>English</option>
                  <option value="ar" <?php if ($_SESSION['locale'] == 'ar') echo 'selected';
                                      ?>>عربي</option>


                </select>

              </form>
            </li>

          </ul>
        </nav>
      </div>
    </header>

    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 p-lg-0">
            <div class="form">
              <form action="">
                <label for="">Name</label>
                <br>
                <input type="text">
                <br>
                <label for="">Phone number</label>
                <br>
                <input type="text">
                <br>
                <label for="">Email</label>
                <br>
                <input type="text">
                <br>
                <label for="">Message</label>
                <br>
                <input type="text">
                <br>
                <input type="submit" class="submit" value="Send">


                <ul class="mt-4">
                  <li><i class="fa-solid fa-phone"></i></li>
                  <li><a href="tel:920007200">920007200</a></li>
                </ul>
                <ul>
                  <li><i class="fa-solid fa-envelope"></i></li>
                  <li><a href="mailto:cs@abyatona.com">cs@abyatona.com</a></li>
                </ul>
                <ul>
                  <li><i class="fa-solid fa-location-dot"></i></li>
                  <li><a href="mailto:cs@abyatona.com">Abdullah bin Sulaiman Al-Hamdan, Sulaymaniyah, Riyadh 12223</a></li>
                </ul>
              </form>
            </div>
          </div>
          <div class="col-lg-7 p-lg-0">
            <div class="contact-map">
              <img src="img/map1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>



  <?php elseif ($_SESSION['layout'] == 1) : ?>
    <header class="p-0 desktop-header" id="header">
      <div class="container">
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

            <li>
              <a href="index.php"><img src="img/black.png" class="black-logo" alt="logo" /></a>
            </li>

            <li class="d-flex justify-content-end">
              <a href="">
                <button class="contact-btn contact-btn-new">اتصل بنا</button>
              </a>

              <form action="" method="POST">
                <select class="lang-select drop-bg" name="locale" onchange="this.form.submit()">
                  <option value="en" <?php //if ($_SESSION['locale'] == 'en') echo 'selected'; 
                                      ?>>English</option>
                  <option value="ar" <?php //if ($_SESSION['locale'] == 'ar') echo 'selected'; 
                                      ?>>عربي</option>
                </select>
              </form>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <header class="p-0 mobile-header" id="header">
      <div class="container">
      <ul class="d-flex justify-content-center pt-4 mb-4">
           <li>
           <a href="index.php"><img src="img/black.png" class="black-logo" alt="logo" /></a>
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
                <button class="contact-btn contact-btn-new">اتصل بنا</button>
              </a>

              <form action="" method="POST">
                <select class="lang-select drop-bg" name="locale" onchange="this.form.submit()">
                  <option value="en" <?php //if ($_SESSION['locale'] == 'en') echo 'selected'; 
                                      ?>>English</option>
                  <option value="ar" <?php //if ($_SESSION['locale'] == 'ar') echo 'selected'; 
                                      ?>>عربي</option>
                </select>
              </form>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 p-lg-0">
            <div class="form">
              <form action="">
                <label for="">الاسم</label>
                <br>
                <input type="text">
                <br>
                <label for="">رقم الهاتف</label>
                <br>
                <input type="text">
                <br>
                <label for="">البريد الإلكتروني</label>
                <br>
                <input type="text">
                <br>
                <label for="">الرسالة</label>
                <br>
                <input type="text">
                <br>
                <div class="d-flex justify-content-end">
                <input type="submit" class="submit" value="إرسال">
                </div>

                <ul class="mt-4">
                  
                  <li><a href="tel:920007200">920007200</a></li>
                  <li><i class="fa-solid fa-phone"></i></li>
                </ul>
                <ul>
                  
                  <li><a href="mailto:cs@abyatona.com">cs@abyatona.com</a></li>
                  <li><i class="fa-solid fa-envelope"></i></li>
                </ul>
                <ul>
                  
                  <li><a href="mailto:cs@abyatona.com">عبد الله بن سليمان الحمدان، السليمانية، الرياض 12223</a></li>
                  <li><i class="fa-solid fa-location-dot"></i></li>
                </ul>
              </form>
            </div>
          </div>
          <div class="col-lg-7 p-lg-0">
            <div class="contact-map">
              <img src="img/map1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php endif; ?>

  <?php include('footer.php') ?>