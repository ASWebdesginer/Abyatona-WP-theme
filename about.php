<?php include('langChange.php') ?>

<?php include('header.php') ?>

<?php if ($_SESSION['layout'] == 0) : ?>

  <section class="new-banner" id="new-banner">
    <div class="container">
      <?php include('navbar.php')?>

      <div class="content">
        <h1>
          ABOUT US
        </h1>
      </div>



    </div>
  </section>

  <div class="populer populer-new">
    <img src="img/Vector.png" class="vector-img vector-images" alt="vector">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>2,673,815</h4>
            <p>Total Built Up Area m2</p>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>2,351</h4>
            <p>Total Villas</p>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>9,737</h4>
            <p>Total Apartments</p>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>6,250</h4>
            <p>Team Members</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="who-we-are">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="content">
            <h3>WHO WE ARE?</h3>
            <h5>Extended Experience Along Specified Details</h5>
            <p class="mb-3">Abyatona company is based on a demonstrated history in the real estate world that exceeds two decades. It is a company that contributes to changing the housing pattern, its experience extends to more than 25 years of great achievements in real estate development, in the Kingdom of Saudi Arabia.</p>

            <p class="mb-3">To keep up the pace with the Kingdom’s vision 2030 within its growing present, that aims to increase the percentage of housing ownerships for the citizens.</p>

            <p class="mb-3">Abyatona company is confidently ascending to the top of the real estate world with decisive steps and sustainable expertise, aiming to enhance real estate development in the Middle East.</p>
          </div>
        </div>
        <div class="col-lg-6">

          <div class="img-slider-new">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/slider.png" alt="Los Angeles" />
                </div>
                <div class="carousel-item">
                  <img src="img/slider.png" alt="Chicago" />
                </div>
                <div class="carousel-item">
                  <img src="img/slider.png" alt="New York" />
                </div>
                <div class="carousel-item">
                  <img src="img/slider.png" alt="New York" />
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

<?php elseif ($_SESSION['layout'] == 1) : ?>

  <section class="new-banner" id="new-banner">
    <div class="container">
    <?php include('navbar.php')?>
      <div class="content">
        <h1>
          من نحن
        </h1>
      </div>
    </div>
  </section>

  <div class="populer populer-new">
    <img src="img/Vector.png" class="vector-img vector-images" alt="صورة">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>2,673,815</h4>
            <p>إجمالي مساحة البناء متر مربع</p>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>2,351</h4>
            <p>إجمالي الفلل</p>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>9,737</h4>
            <p>إجمالي الشقق</p>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="populer-box">
            <h4>6,250</h4>
            <p>أعضاء الفريق</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="who-we-are">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6">
          <div class="img-slider-new">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
              </ul>
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/slider.png" alt="لوس أنجلوس" />
                </div>
                <div class="carousel-item">
                  <img src="img/slider.png" alt="شيكاغو" />
                </div>
                <div class="carousel-item">
                  <img src="img/slider.png" alt="نيويورك" />
                </div>
                <div class="carousel-item">
                  <img src="img/slider.png" alt="نيويورك" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="content">
            <h3>من نحن؟</h3>
            <h5>تجربة ممتدة مع تفاصيل محددة</h5>
            <p class="mb-3">شركة أبياتونا مبنية على تاريخ مثبت في عالم العقارات يزيد عن عقدين من الزمن. إنها شركة تساهم في تغيير نمط الإسكان، وتمتد خبرتها لأكثر من 25 عامًا من الإنجازات الكبيرة في تطوير العقارات في المملكة العربية السعودية.</p>
            <p class="mb-3">لمواكبة رؤية المملكة 2030 في واقعها المتنامي، التي تهدف إلى زيادة نسبة ملكية الإسكان للمواطنين.</p>
            <p class="mb-3">تتقدم شركة أبياتونا بثقة نحو قمة عالم العقارات بخطوات حازمة وخبرة مستدامة، بهدف تعزيز تطوير العقارات في الشرق الأوسط.</p>
          </div>
        </div>

        
      </div>
    </div>
  </section>

<?php endif; ?>


<?php include('footer.php') ?>