<?php include('langChange.php')?>
<?php include('header.php') ?>

<style>
    * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  /* cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  transition: background-color 0.6s ease; */
  display: inline-block;
  cursor: pointer;
}

/* .active, .dot:hover {
  background-color: #717171;
} */

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<?php if($_SESSION['layout']==0):?>

  <section class="new-banner" id="new-banner">
      <div class="container">
      <?php include('navbar.php')?>

        <div class="content">
          <h1>
            vision and mission
          </h1>
        </div>


        
      </div>
</section>


<section class="tab-align">
   <div class="container">
   <img src="img/Vector30.png" class="vector-img-30" alt="vector">
   <div class="heading">
     <h3>Goals</h3>
     <h5>Seeking Through Defined Innovation</h5>
  </div>

  <div class="row">
    <div class="col-lg-3">
      <div class="content">
         <p>Abyatona company, is focused on promising investments in smart industries.</p>
      </div>
    </div>
    <div class="col-lg-3">
    <div class="content">
         <p>Providing the priority in building an innovative Saudi team to lead Abyatona group of companies within a specified timeframe of three years.</p>
      </div>
    </div>
    <div class="col-lg-3">
    <div class="content">
         <p>Building an effective working partnership by creating a productive work environment within a fostering a language of communication with high confidence.</p>
      </div>
    </div>
    <div class="col-lg-3">
    <div class="content">
         <p>Establishing an approach to strengthen the company assets and increase sustainable revenues with the aim of maintaining the balance within Abyatona group.</p>
      </div>
    </div>
  </div>
   </div>
</section>


<section class="who-we-are">
    <div class="container">
        <div class="row justify-content-center">
         
          <div class="col-lg-5 d-lg-flex align-items-center">
            <div class="content">
              <h3>Our Vision</h3>
              <p>Empowering citizens to live sustainably and providing healthy energy solutions in the Kingdom of Saudi Arabia.</p>
            </div>
          </div>

          <div class="col-lg-5">
               <!-- <img src="img/Group 1000007167.png"  class="img-fluid" alt=""> -->


               <div class="slideshow-container">
                <div class="mySlides">
                
                <div class="row">
                  <div class="col-lg-4 col-4 pr-0">
                    <img src="img/new.png" class="first-slides" alt="">
                  </div>
                  <div class="col-lg-4 col-4 pr-0">
                  <img src="img/image-4.png" class="first-slides third-img" alt="">
                  </div>
                  <div class="col-lg-4 col-4">
                  <img src="img/banner.jpg" class="first-slides" alt="">
                  </div>
                </div>
                
                </div>

                <div class="mySlides">
                
                <div class="row">
                  <div class="col-lg-4 col-4 pr-0">
                    <img src="img/Rectangle2.png" class="first-slides" alt="">
                  </div>
                  <div class="col-lg-4 col-4 pr-0">
                  <img src="img/new.png" class="first-slides third-img" alt="">
                  </div>
                  <div class="col-lg-4 col-4">
                  <img src="img/about.png" class="first-slides" alt="">
                  </div>
                </div>
                
                </div>

                <div class="mySlides">
                
                <div class="row">
                  <div class="col-lg-4 col-4 pr-0">
                    <img src="img/new.png" class="first-slides" alt="">
                  </div>
                  <div class="col-lg-4 col-4 pr-0">
                  <img src="img/image-4.png" class="first-slides third-img" alt="">
                  </div>
                  <div class="col-lg-4 col-4">
                  <img src="img/banner.jpg" class="first-slides" alt="">
                  </div>
                </div>
                
                </div>

                
                </div>
                <br>

                <div style="text-align:center;transform: translateY(-30px);">
                <div class="dot" onclick="currentSlide(1)">
                <img src="img/Group 1000007167.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B">
              </div> 
                <div class="dot" onclick="currentSlide(2)">
                <img src="img/new.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B; margin-left:-15px;"></div> 
                <div class="dot" onclick="currentSlide(3)"><img src="img/Screenshot 2023-11-06 152237.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B; margin-left:-15px;"></div> 
                <!-- <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span>  -->
                </div>
         
          </div>
        </div>
    </div>
</section>


<section class="who-we-are pt-0 pb-0">
    <div class="container">
        <div class="row justify-content-center">
         
          <div class="col-lg-5">
               <img src="img/Screenshot 2023-11-06 152237.png"  class="img-fluid" alt="">
         
          </div>

          <div class="col-lg-5 d-lg-flex align-items-center">
            <div class="content">
              <h3>Our Message</h3>
              <p>Giving priority to the needs and aspirations of our projects, we ensure that the concept of a safe home aligns with your vision for a greener future.</p>
            </div>
          </div>
        </div>
    </div>
</section>

<section class="who-we-are">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 d-lg-flex align-items-center">
            <div class="content">
              <h3>Our Values</h3>
              <p>Innovation – Greener Living – Social <br> Responsibility – Growth Expansion</p>
            </div>
          </div>
          <div class="col-lg-5">
               <img src="img/new.png" class="new-img" alt="">
         
          </div>
        </div>
    </div>
</section>

<?php elseif($_SESSION['layout']==1):?>
  <section class="new-banner" id="new-banner">
    <div class="container">
    <?php include('navbar.php')?>
        <div class="content">
            <h1>
                الرؤية والرسالة
            </h1>
        </div>
    </div>
</section>

<section class="tab-align">
    <div class="container">
        <div class="heading">
            <h3>الأهداف</h3>
            <h5>السعي من خلال الابتكار المحدد</h5>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="content">
                    <p>تركز شركة أبياتنا على الاستثمارات الواعدة في الصناعات الذكية.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content">
                    <p>تقديم الأفضلية في بناء فريق سعودي مبتكر لقيادة مجموعة شركات أبياتنا في فترة زمنية محددة تبلغ ثلاث سنوات.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content">
                    <p>بناء شراكة عمل فعالة من خلال خلق بيئة عمل منتجة تعزز من لغة الاتصال ذات الثقة العالية.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="content">
                    <p>تطوير نهج لتعزيز أصول الشركة وزيادة الإيرادات المستدامة بهدف الحفاظ على التوازن داخل مجموعة أبياتنا.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="who-we-are">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 d-lg-flex align-items-center">
                <div class="content">
                    <h3>رؤيتنا</h3>
                    <p>تمكين المواطنين للعيش بشكل مستدام وتوفير حلاً صحيًا للطاقة في المملكة العربية السعودية.</p>
                </div>
            </div>
            <div class="col-lg-5">
            
               <!-- <img src="img/Group 1000007167.png"  class="img-fluid" alt=""> -->


               <div class="slideshow-container">
                <div class="mySlides">
                
                <div class="row">
                  <div class="col-lg-4 col-4 pr-0">
                    <img src="img/new.png" class="first-slides" alt="">
                  </div>
                  <div class="col-lg-4 col-4 pr-0">
                  <img src="img/image-4.png" class="first-slides third-img" alt="">
                  </div>
                  <div class="col-lg-4 col-4">
                  <img src="img/banner.jpg" class="first-slides" alt="">
                  </div>
                </div>
                
                </div>

                <div class="mySlides">
                
                <div class="row">
                  <div class="col-lg-4 col-4 pr-0">
                    <img src="img/Rectangle2.png" class="first-slides" alt="">
                  </div>
                  <div class="col-lg-4 col-4 pr-0">
                  <img src="img/new.png" class="first-slides third-img" alt="">
                  </div>
                  <div class="col-lg-4 col-4">
                  <img src="img/about.png" class="first-slides" alt="">
                  </div>
                </div>
                
                </div>

                <div class="mySlides">
                
                <div class="row">
                  <div class="col-lg-4 col-4 pr-0">
                    <img src="img/new.png" class="first-slides" alt="">
                  </div>
                  <div class="col-lg-4 col-4 pr-0">
                  <img src="img/image-4.png" class="first-slides third-img" alt="">
                  </div>
                  <div class="col-lg-4 col-4">
                  <img src="img/banner.jpg" class="first-slides" alt="">
                  </div>
                </div>
                
                </div>

                
                </div>
                <br>

                <div style="text-align:center;transform: translateY(-30px);">
                <div class="dot" onclick="currentSlide(1)">
                <img src="img/Group 1000007167.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B">
              </div> 
                <div class="dot" onclick="currentSlide(2)">
                <img src="img/new.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B; margin-left:-15px;"></div> 
                <div class="dot" onclick="currentSlide(3)"><img src="img/Screenshot 2023-11-06 152237.png" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid #B8833B; margin-left:-15px;"></div> 
                <!-- <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span>  -->
                </div>
         
          </div>
            </div>
        </div>
    </div>
</section>

<section class="who-we-are pt-0 pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <img src="img/Screenshot 2023-11-06 152237.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 d-lg-flex align-items-center">
                <div class="content">
                    <h3>رسالتنا</h3>
                    <p>منح الأولوية لاحتياجات وتطلعات مشاريعنا، نضمن أن مفهوم المنزل الآمن يتوافق مع رؤيتك لمستقبل أخضر.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="who-we-are">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 d-flex align-items-center">
                <div class="content">
                    <h3>قيمنا</h3>
                    <p>الابتكار - العيش الأخضر - المسؤولية الاجتماعية - التوسع في النمو</p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="img/new.png" class="new-img" alt="">
            </div>
        </div>
    </div>
</section>



<?php endif?>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dott");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<?php include('footer.php') ?>