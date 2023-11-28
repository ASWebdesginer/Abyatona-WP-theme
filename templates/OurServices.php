
<?php

/**
 * Template Name: OurService
 *
 * @package Abyatona
 * @subpackage Abyatona
 * @since Abyatona
 */
// include('langChange.php')

get_header();
?>


  <section class="new-banner" id="new-banner" style="background-image:url(<?php echo get_field('hero_background');?>)">
    <div class="container">
    <?php include(PATHLOCAL.'/navbar.php'); ?>
      <div class="content">
        <h1>
        <?php echo get_field('hero_heading');?>
        </h1>
      </div>
    </div>
  </section>
<?php 
$servexp=get_field('experience_section');
if($servexp){
    $expheading=$servexp['section_heading'];
    $expsubheading=$servexp['section_sub_heading'];
    $expdesc=$servexp['section_description'];
    $expimage=$servexp['section_image'];
?>
  <section class="our-services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="content">
            <h3 id="ourservicemih3"><?php echo $expheading;?></h3>
            <h5><?php echo $expsubheading;?></h3></h5>
            <?php echo $expdesc;?></h3>

            <div class="populer populer-new populer-newly">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <div class="populer-box">
                      <h4>2M +</h4>
                      <p>Total Built Up Area m2</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="populer-box">
                      <h4>2K + </h4>
                      <p>Total Villas</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="populer-box">
                      <h4>9K + </h4>
                      <p>Total Apartments</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="populer-box">
                      <h4>6K +</h4>
                      <p>Team Members</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">

          <div class="services-img">
            <img src="<?php echo $expimage;?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
}
?>
<?php 
$ourserv=get_field('our_services');
if($ourserv){
    $ourservheading=$ourserv['section_heading'];
    $ourservsubheading=$ourserv['section_sub_heading'];
    $ourservice=$ourserv['services'];
?>
  <section class="develop">
    <div class="container">
      <div class="develop-box">
        <img src="<?php echo get_template_directory_uri();?>/img/white-vector.svg" class="white-vector" alt="">
        <h3><?php echo $ourservheading;?></h3>
        <p class="p"><?php echo $ourservsubheading;?></p>

        <div class="row">
            <?php 
             foreach($ourservice as $key => $value){

             $serheading=$value['service_name'];
             $serimage=$value['service_image'];
            ?>
          <div class="col-lg-2 col-6">
            <div class="developing">
              <div class="developing-box">
                <img src="<?php echo $serimage;?>" alt="">
              </div>

              <p><?php echo $serheading;?></p>
            </div>

          </div>
          <?php 
             }?>
        </div>
      </div>
    </div>
    </div>
  </section>
  <?php
}
?>
  <section class="build">
    <div class="container">
      <img src="img/Vector.png" class="vector-img" alt="vector" />
      <div class="heading">
        <h3>WHAT WE BUILD</h3>
        <p>Explore our projects</p>
      </div>

      <div class="build-slider">
        <div class="care-slider-sec">
          <div class="container">
            <div class="ourCliendslider">
              <div id="marketingBannerSlider2" class="marketingBannerSlider1 owl-carousel owl-theme">
                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>high quality products</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                </div>

                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>high quality products</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                </div>

                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>high quality products</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                </div>

                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>high quality products</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                </div>

                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>high quality products</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                </div>

                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>high quality products</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                </div>

                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>high quality products</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                </div>

                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>high quality products</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                </div>

                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>high quality products</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="arabic">



  <section class="new-banner" id="new-banner">
    <div class="container">
    <?php include('navbar.php')?>

      <div class="content">
        <h1>
          خدماتنا
        </h1>

      </div>
    </div>
  </section>

  <section class="our-services">
    <div class="container">
      <div class="row">
      <div class="col-lg-6">
          <div class="services-img">
            <img src="img/serv.png" alt="">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="content">
            <h3>25 عامًا من الخبرة في صناعة العقارات</h3>
            <h5>أخلاقيات العقارات وحلول الريادة</h5>
            <p class="mb-3">في شركة أبياتنا، نسعى لتحقيق أعلى معايير الإنتاج المحلي من خلال دمج مراحل التطوير والبناء في جميع مشاريعنا.</p>

            <p class="mb-3">نقدم نظام تطوير يشمل إدارة احترافية وفعالة للاستثمارات المستدامة من خلال الطاقة الصحية والهيدروجين الأخضر وأنظمة الطاقة الشمسية استنادًا إلى الأبحاث والدراسات لخلق طموحات لبيئة صحية.</p>

            <div class="populer populer-new populer-newly">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <div class="populer-box">
                      <h4>2M +</h4>
                      <p>إجمالي مساحة البناء م2</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="populer-box">
                      <h4>2K +</h4>
                      <p>إجمالي الفلل</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="populer-box">
                      <h4>9K +</h4>
                      <p>إجمالي الشقق</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="populer-box">
                      <h4>6K +</h4>
                      <p>أعضاء الفريق</p>
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


  <section class="develop">
    <div class="container">
      <div class="develop-box">
        <img src="img/white-vector.svg" class="white-vector" alt="">
        <h3>ماذا نطور</h3>
        <p class="p">استكشف مشاريعنا</p>

        <div class="row">
          <div class="col-lg-2">
            <div class="developing">
              <div class="developing-box">
                <img src="img/siri.svg" alt="">
              </div>
              <p>الطرق والجسور</p>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="developing">
              <div class="developing-box">
                <img src="img/5.svg" alt="">
              </div>
              <p>خزانات المياه ومعالجة المياه</p>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="developing">
              <div class="developing-box">
                <img src="img/6.svg" alt="">
              </div>
              <p>المستودعات</p>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="developing">
              <div class="developing-box">
                <img src="img/wood.png" alt="">
              </div>
              <p>أنابيب</p>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="developing">
              <div class="developing-box">
                <img src="img/tank.png" alt="">
              </div>
              <p>الحفر والتسوية</p>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="developing">
              <div class="developing-box">
                <img src="img/tree.svg" alt="">
              </div>
              <p>مشاتل</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="build">
    <div class="container">
    <img src="img/Vector 4.png" class="vector-img" alt="فيكتور" />
      <div class="heading">
        <h3>ماذا نبني</h3>
        <p>استكشف مشاريعنا</p>
      </div>


      <div class="build-slider">
        <div class="care-slider-sec">
          <div class="container">
            <div class="ourCliendslider">
              <div id="marketingBannerSlider2" class="marketingBannerSlider1 owl-carousel owl-theme">
                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>منتجات عالية الجودة</h3>
                    <p>لوريم إيبسوم هو نص دمية يُستخدم في صناعة الطباعة والتنسيق. كان النص الدمية هو النص القياسي في هذه الصناعة منذ القرن الخامس عشر، عندما أخذت طابعة مجهولة مجموعة من النوع وقلبتها لتكوين كتاب نموذجي للطباعة.</p>
                  </div>
                </div>


                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>منتجات عالية الجودة</h3>
                    <p>لوريم إيبسوم هو نص دمية يُستخدم في صناعة الطباعة والتنسيق. كان النص الدمية هو النص القياسي في هذه الصناعة منذ القرن الخامس عشر، عندما أخذت طابعة مجهولة مجموعة من النوع وقلبتها لتكوين كتاب نموذجي للطباعة.</p>
                  </div>
                </div>


                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>منتجات عالية الجودة</h3>
                    <p>لوريم إيبسوم هو نص دمية يُستخدم في صناعة الطباعة والتنسيق. كان النص الدمية هو النص القياسي في هذه الصناعة منذ القرن الخامس عشر، عندما أخذت طابعة مجهولة مجموعة من النوع وقلبتها لتكوين كتاب نموذجي للطباعة.</p>
                  </div>
                </div>


                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>منتجات عالية الجودة</h3>
                    <p>لوريم إيبسوم هو نص دمية يُستخدم في صناعة الطباعة والتنسيق. كان النص الدمية هو النص القياسي في هذه الصناعة منذ القرن الخامس عشر، عندما أخذت طابعة مجهولة مجموعة من النوع وقلبتها لتكوين كتاب نموذجي للطباعة.</p>
                  </div>
                </div>


                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>منتجات عالية الجودة</h3>
                    <p>لوريم إيبسوم هو نص دمية يُستخدم في صناعة الطباعة والتنسيق. كان النص الدمية هو النص القياسي في هذه الصناعة منذ القرن الخامس عشر، عندما أخذت طابعة مجهولة مجموعة من النوع وقلبتها لتكوين كتاب نموذجي للطباعة.</p>
                  </div>
                </div>


                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>منتجات عالية الجودة</h3>
                    <p>لوريم إيبسوم هو نص دمية يُستخدم في صناعة الطباعة والتنسيق. كان النص الدمية هو النص القياسي في هذه الصناعة منذ القرن الخامس عشر، عندما أخذت طابعة مجهولة مجموعة من النوع وقلبتها لتكوين كتاب نموذجي للطباعة.</p>
                  </div>
                </div>


                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>منتجات عالية الجودة</h3>
                    <p>لوريم إيبسوم هو نص دمية يُستخدم في صناعة الطباعة والتنسيق. كان النص الدمية هو النص القياسي في هذه الصناعة منذ القرن الخامس عشر، عندما أخذت طابعة مجهولة مجموعة من النوع وقلبتها لتكوين كتاب نموذجي للطباعة.</p>
                  </div>
                </div>


                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>منتجات عالية الجودة</h3>
                    <p>لوريم إيبسوم هو نص دمية يُستخدم في صناعة الطباعة والتنسيق. كان النص الدمية هو النص القياسي في هذه الصناعة منذ القرن الخامس عشر، عندما أخذت طابعة مجهولة مجموعة من النوع وقلبتها لتكوين كتاب نموذجي للطباعة.</p>
                  </div>
                </div>


                <div class="marketingBannerSliderBx item">
                  <div class="our-box">
                    <img src="img/12.png" alt="">
                    <h3>منتجات عالية الجودة</h3>
                    <p>النص التجريبي هو مجرد نص دمية في صناعة الطباعة وتنسيق النصوص. كانت كلمات "Lorem Ipsum" تستخدم منذ القرن الخامس عشر في هذه الصناعة، عندما أخذت طابعة مجهولة مجموعة من النوع وقلبتها لتكوين كتاب نموذجي للطباعة.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
<?php get_footer(); ?>