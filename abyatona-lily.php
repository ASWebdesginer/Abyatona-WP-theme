<?php include('langChange.php') ?>
<?php include('header.php') ?>

<body>

  <?php if ($_SESSION['layout'] == 0) : ?>

    <section class="banner lily-banner" id="banner">
      <div class="container">
      <?php include('navbar.php')?>

        <div class="content">
          
          
          <img src="img/lily.png" alt="">
          <h1>
          Abyatona Lily
          </h1>
        </div>


        <div class="row">
          <div class="col-lg-9">
            <section id="slider">
              <div class="container">

                <div class="slider">
                  <div class="owl-carousel">
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">Jeddah Heights</h5>
                      <p class="text-white">villa and house</p>
                      <div class="slide-images">
                        <img src="img/lily-new.png" alt="">
                      </div>
                    </div>
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">Jeddah Heights</h5>
                      <p class="text-white">villa and house</p>
                      <div class="slide-images">
                      <img src="img/home-new.png" alt="">
                      </div>
                    </div>

                    <div class="slider-card">

                      <h5 class="mb-0 text-white">Jeddah Heights</h5>
                      <p class="text-white">villa and house</p>
                      <div class="slide-images">
                      <img src="img/IMG_5777.JPG" alt="">
                      </div>
                    </div>
                    
                  </div>

                  <button class="button-newly">Book Your Villa Now</button>
                </div>

              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    <section class="lily-about">
      <div class="container">
      <img src="img/Vector40.png" class="vector-img-40" alt="">
        <div class="row">
          <div class="col-lg-7">
            <div class="content">
              <img src="img/2.png" class="yellow-lily" alt="">
              <h3>Abyatona Lily</h3>
              <p>Lorem ipsum dolor sit amet consectetur. Vitae vel odio sit bibendum aliquet urna pellentesque etiam. Nisi
                eu feugiat quisque vel felis. Vel tincidunt tellus etiam in posuere dui augue sed.</p>
              <p>Lorem ipsum dolor sit amet consectetur. Vitae vel odio sit bibendum aliquet urna pellentesque etiam. Nisi
                eu feugiat quisque vel felis. Vel tincidunt tellus etiam in posuere dui augue sed.</p>
              <p>Lorem ipsum dolor sit amet consectetur. Vitae vel odio sit bibendum aliquet urna pellentesque etiam. Nisi
                eu feugiat quisque vel felis. Vel tincidunt tellus etiam in posuere dui augue sed.</p>

              <ul class="d-flex mt-4 align-items-center">
                <li>
                  <img src="img/book.svg" alt="">
                  <span>Abyatona Lily brochure</span>
                </li>

                <li>
                  <button class="button-newly-new"><span>3D</span><br> Wahat AlDamam 3D</button>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5">
            <img src="img/little.png" class="little-img" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="map">
      <div class="container">
        <div class="map-location">
          <h3>Project Location</h3>
          <img src="img/map.png" class="img-fluid" alt="">
        </div>
      </div>
    </section>

    <section class="project">
    <img src="img/Vector40.png" class="vector-img-40" alt="">
      <div class="container">
        <div class="heading">
          <h3>Project Features</h3>
        </div>

        <ul class="d-flex mt-5 gallery">
          <li class="image-box first">
            <div class="project-box  project-box-new">
              <h3>Healthy Environment</h3>
              <h4>Healthy Environment</h4>
              <p>Lorem ipsum dolor sit amet consectetur. Facilisis sit malesuada dui sed orci. Praesent ac gravida morbi
                massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a tellus dui
                ultrices.</p>
            </div>
          </li>

          <li class="image-box second">
            <div class=" project-box project-box-second project-box-new">
              <h3>Shopping</h3>
              <h4>Shopping</h4>
              <p>Lorem ipsum dolor sit amet consectetur. Facilisis sit malesuada dui sed orci. Praesent ac gravida morbi
                massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a tellus dui
                ultrices.</p>
            </div>
          </li>

          <li class="image-box third">
            <div class=" project-box project-box-third project-box-new">
              <h3>Entertainment</h3>
              <h4>Entertainment</h4>
              <p>Lorem ipsum dolor sit amet consectetur. Facilisis sit malesuada dui sed orci. Praesent ac gravida morbi
                massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a tellus dui
                ultrices.</p>
            </div>
          </li>

          <li class="image-box fourth">
            <div class=" project-box project-box-fourth project-box-new">
              <h3>Halls</h3>
              <h4>Halls</h4>
              <p>Lorem ipsum dolor sit amet consectetur. Facilisis sit malesuada dui sed orci. Praesent ac gravida morbi
                massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a tellus dui
                ultrices.</p>
            </div>
          </li>

          <li class="image-box fifth">
            <div class="project-box project-box-fifth project-box-new">
              <h3>Mosques</h3>
              <h4>Mosques</h4>
              <p>Lorem ipsum dolor sit amet consectetur. Facilisis sit malesuada dui sed orci. Praesent ac gravida morbi
                massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a tellus dui
                ultrices.</p>
            </div>
          </li>
          <li class="image-box sixth">
            <div class="project-box project-box-sixth project-box-new">
              <h3>Schools</h3>
              <h4>Schools</h4>
              <p>Lorem ipsum dolor sit amet consectetur. Facilisis sit malesuada dui sed orci. Praesent ac gravida morbi
                massa ut ac velit eget aliquet. Ut lorem sit felis nec congue at. Ipsum et porttitor etiam a tellus dui
                ultrices.</p>
            </div>
          </li>


        </ul>
      </div>
    </section>

    <section class="partner partner-new">
    <img src="img/Vector40.png" class="vector-img-40" alt="">
      <div class="container">
        <div class="heading">
          <h3 class="text-black">Partners</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3">
            <div class="partner-box partner-box-new">

              <p>Lorem Ipsum is</p>

              <div class="partner-logo">
                <img src="img/Group.png" alt="">
              </div>
            </div>


          </div>
          <div class="col-lg-3">
            <div class="partner-box partner-box-new">

              <p>Lorem Ipsum is</p>

              <div class="partner-logo">
                <img src="img/group1.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="partner-box partner-box-new">

              <p>Lorem Ipsum is</p>

              <div class="partner-logo">
                <img src="img/nhc.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="build partner-new">
      <div class="container">
      <img src="img/Vector40.png" class="vector-img-40" alt="">
        <div class="heading">
          <h3>Other Projects</h3>

        </div>

        <div class="build-slider">
          <div class="care-slider-sec">
            <div class="container">
              <div class="ourCliendslider">
                <div id="marketingBannerSlider1" class="marketingBannerSlider1 owl-carousel owl-theme">
                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box">
                      <div class="img">
                        <img src="img/co.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Jeddah Heights</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-01">
                      <div class="img">
                        <img src="img/co1.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Aِbyatona Lily</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon bottom-icon-new">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-02">
                      <div class="img">
                        <img src="img/co2.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Wahat AlDamam</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box">
                      <div class="img">
                        <img src="img/co.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Jeddah Heights</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-01">
                      <div class="img">
                        <img src="img/co1.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Aِbyatona Lily</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon bottom-icon-new">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-02">
                      <div class="img">
                        <img src="img/co2.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Wahat AlDamam</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box">
                      <div class="img">
                        <img src="img/co.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Jeddah Heights</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-01">
                      <div class="img">
                        <img src="img/co1.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Aِbyatona Lily</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon bottom-icon-new">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-02">
                      <div class="img">
                        <img src="img/co2.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>Wahat AlDamam</h3>
                          <p>villa and house</p>
                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php elseif ($_SESSION['layout'] == 1) : ?>

    <section class="banner lily-banner hill-banner" id="banner">
      <div class="container">
      <?php include('navbar.php')?>
        <div class="content">
          <div class="ban-img">
           <img src="img/3.png" alt="">
          </div>
          <h1>
            أبياتونا باي
          </h1>
          <p>لوريم إيبسوم دولور سيت آميت <br> كونسيكتيتور.</p>
        </div>
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-9">
          <section class="desktop-slider" id="slider">
              <div class="container">

                <div class="slider">
                  <div class="owl-carousel">
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/lily-new.png" alt="">
                      </div>
                    </div>
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/lily-new.png" alt="">
                      </div>
                    </div>

                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                      <img src="img/IMG_5777.JPG" alt="">
                      </div>
                    </div>
                   

                  </div>

                  <div class="d-flex justify-content-end">
                  <button class="button-newly">احجز فيلتك الآن</button>
                  </div>
                </div>

              </div>
            </section>

            <section class="mobile-slider" id="slider">
              <div class="container">

                <div class="slider">
                  <div class="owl-carousel owl-carousel-new">
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/lily-new.png" alt="">
                      </div>
                    </div>
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/lily-new.png" alt="">
                      </div>
                    </div>

                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/lily-new.png" alt="">
                      </div>
                    </div>
                    <div class="slider-card">

                      <h5 class="mb-0 text-white">أبراج جدة</h5>
                      <p class="text-white">فيلات ومنازل</p>
                      <div class="slide-images">
                        <img src="img/lily-new.png" alt="">
                      </div>
                    </div>

                  </div>

                  <div class="d-flex justify-content-end">
                  <button class="button-newly">احجز فيلتك الآن</button>
                  </div>
                </div>

              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    <section class="lily-about">
      <div class="container">
      <img src="img/Vector40.png" class="vector-img-40" alt="">
        <div class="row">
          <div class="col-lg-7">
            <div class="content">
              <img src="img/2.png" class="yellow-lily" alt="">
              <h3>أبياتونا باي</h3>
              <p>لوريم إيبسوم دولور سيت آميت كونسيكتيتور. فيتاي فيل أوديو سيت بيبندوم أليكويت أورنا بيلينتيسكويت إتيام. نيسي
                أو فوغيات كويسك فيل فليس. فيل تينسيدونت تيلوس إتيام إن بوسوير دوي أوغيه سيد.</p>
              <p>لوريم إيبسوم دولور سيت آميت كونسيكتيتور. فيتاي فيل أوديو سيت بيبندوم أليكويت أورنا بيلينتيسكويت إتيام. نيسي
                أو فوغيات كويسك فيل فليس. فيل تينسيدونت تيلوس إتيام إن بوسوير دوي أوغيه سيد.</p>
              <p>لوريم إيبسوم دولور سيت آميت كونسيكتيتور. فيتاي فيل أوديو سيت بيبندوم أليكويت أورنا بيلينتيسكويت إتيام. نيسي
                أو فوغيات كويسك فيل فليس. فيل تينسيدونت تيلوس إتيام إن بوسوير دوي أوغيه سيد.</p>

              <ul class="d-flex mt-4 align-items-center">
                <li>
                  <img src="img/book.svg" alt="">
                  <span>كتيب أبياتونا ليلي</span>
                </li>

                <li>
                  <button class="button-newly-new"><span>3D</span><br> واحة الدمام ثلاثي الأبعاد</button>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5">
            <img src="img/little.png" class="little-img" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="map">
      <div class="container">
        <div class="map-location">
          <h3>موقع المشروع</h3>
          <img src="img/map.png" class="img-fluid" alt="">
        </div>
      </div>
    </section>

    <section class="project">
    <img src="img/Vector40.png" class="vector-img-40" alt="">
      <div class="container">
        <div class="heading">
          <h3>مميزات المشروع</h3>
        </div>

        <ul class="d-flex mt-5">
          <li>
            <div class="project-box">
              <h3>بيئة صحية</h3>
              <p>لوريم إيبسوم دولور سيت آميت كونسيكتيتور. فيتاي فيل أوديو سيت بيبندوم أليكويت أورنا بيلينتيسكويت إتيام.
                نيسي
                أو فوغيات كويسك فيل فليس. فيل تينسيدونت تيلوس إتيام إن بوسوير دوي أوغيه سيد.</p>
            </div>
          </li>

          <li>
            <div class="project-box project-box-new">
              <h3>تسوق</h3>
            </div>
          </li>

          <li>
            <div class="project-box project-box-new">
              <h3>ترفيه</h3>
            </div>
          </li>

          <li>
            <div class="project-box project-box-new">
              <h3>قاعات</h3>
            </div>
          </li>

          <li>
            <div class="project-box project-box-new">
              <h3>مساجد</h3>
            </div>
          </li>
          <li>
            <div class="project-box project-box-new">
              <h3>مدارس</h3>
            </div>
          </li>

        </ul>
      </div>
    </section>


    <section class="partner partner-new">
    <img src="img/Vector40.png" class="vector-img-40" alt="">
      <div class="container">
        <div class="heading">
          <h3 class="text-black">الشركاء</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3">
            <div class="partner-box partner-box-new">

              <p>لوريم إيبسوم هو</p>

              <div class="partner-logo">
                <img src="img/Group.png" alt="">
              </div>
            </div>


          </div>
          <div class="col-lg-3">
            <div class="partner-box partner-box-new">

              <p>لوريم إيبسوم هو</p>

              <div class="partner-logo">
                <img src="img/group1.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="partner-box partner-box-new">

              <p>لوريم إيبسوم هو</p>

              <div class="partner-logo">
                <img src="img/nhc.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="build partner-new">
      <div class="container">
      <img src="img/Vector40.png" class="vector-img-40" alt="">
        <div class="heading">
          <h3>مشاريع أخرى</h3>
        </div>

        <div class="build-slider">
          <div class="care-slider-sec">
            <div class="container">


              <div class="ourCliendslider">
                <div id="marketingBannerSlider1" class="marketingBannerSlider1 owl-carousel owl-theme">
                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box">
                      <div class="img">
                        <img src="img/co.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>جدة هايتس</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-01">
                      <div class="img">
                        <img src="img/co1.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>أبياتونا ليلي</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>

                      <div class="bottom-icon bottom-icon-new">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-02">
                      <div class="img">
                        <img src="img/co2.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>واحة الدمام</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box">
                      <div class="img">
                        <img src="img/co.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>جدة هايتس</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-01">
                      <div class="img">
                        <img src="img/co1.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>أبياتونا ليلي</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>

                      <div class="bottom-icon bottom-icon-new">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-02">
                      <div class="img">
                        <img src="img/co2.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>واحة الدمام</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box">
                      <div class="img">
                        <img src="img/co.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>جدة هايتس</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>

                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-01">
                      <div class="img">
                        <img src="img/co1.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>أبياتونا ليلي</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>

                      <div class="bottom-icon bottom-icon-new">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>

                  <div class="marketingBannerSliderBx item">
                    <div class="slider-box slider-box-02">
                      <div class="img">
                        <img src="img/co2.png" alt="co img" />
                      </div>

                      <div class="content">
                        <div>
                          <h3>واحة الدمام</h3>
                          <p>فيلا ومنزل</p>

                        </div>
                      </div>



                      <div class="bottom-icon">
                        <img src="img/Vector-arrow.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php endif ?>

  <?php include('footer.php') ?>