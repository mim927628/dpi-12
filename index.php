<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href=".">
    <?php wp_head();?>
</head>
<body>
    
<!-- Header Part Start -->
<header class="cont">
    <div class="row">
        <div class="col-lg-6 header_left">
            <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
        </div>
        <div class="col-lg-6 header_right text-end">
            <p>১৮ কার্তিক, ১৪২৯</p>
            <a href="#">English</a>
        </div>
    </div>
</header>
<!-- Header Part End -->

<!-- logo part start -->

<section class="logo cont">
    <div class="row">
        <div class="col-lg-5 logo_left">
            <a href="#"><?php the_custom_logo(); ?></a>
        </div>
        <div class="col-lg-5 logo_search">
            <input type="text" placeholder="খুঁজুন">
            <button>অনুসন্ধান</button>
        </div>
        <div class="col-lg-2 logo_right d-flex justify-contant end">
            <div class="logo1"><a href="#"><img src="./bootstrap/images/header/a2i-logo-footer.png" alt=""></a>
            </div>
            <div class="logo2">
                <p>সাথে থাকুন:</p>
                <a href="#"><img src="./bootstrap/images/header/facebook-icon.png" alt=""></a>
                <a href="#"><img src="./bootstrap/images/header/twitter-blue-icon.png" alt=""></a>
                <a href="#"><img src="./bootstrap/images/header/youtube-icon.png" alt=""></a>
                <a href="#"><img src="./bootstrap/images/header/gplus-icon.png" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- logo part end -->

<!-- menu part start -->
<section class="cont">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                   wp_nav_menu([
                    'menu_location'=>'TM',
                    'menu_class'=>'navbar-nav'
                   ]);

                ?>
                <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">হোম</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">ই-সেবাসমূহ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সেবাখাত</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">ব্যবসা-বাণিজ্য</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">বৈদেশিক বিনিয়োগ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">আইন-বিধি</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">সেবাকুঞ্জ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ফরমস</a>
                  </li>
                </ul>--->
              </div>
            </div>
          </nav>
    </div>
</section>
<!-- menu part end-->

<!-- hero part start -->
<section class="cont">
  <div class="row hero">
    <div class="col-lg-8 hero_main">
        <div class="benner">
            <a href="#">
              <?php dynamic_sidebar('mainbanner');?>
              <!--<img src="./bootstrap/images/padmabanner.jpg" class="d-block w-100" alt="">---></a>
        </div>
        <!-- slider part start -->
        <div class="slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <?php $qry1=new wp_query([
                'post_type'=>'post',
                'category_name'=>'slider'
              ]);?>
                <div class="carousel-inner">
                  <?php 
                  $x=0;
                  while($qry1->have_posts()):$qry1->the_post();
                  $x++; 
                  ?>
                  <div class="carousel-item <?=($x==1)? 'active':''?>">

                    <?php the_post_thumbnail();?>
                  
                    
                  </div>
                     <?php endwhile;?>
                </div>
              </div>
        </div>
        <!-- slider part end -->
        <!-- tab part start -->
        <div class="tab">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-2 tab_1">
                  <a href="#"><img src="./bootstrap/images/tab/agriculture.png" alt=""></a>
                  <a href="#">কৃষি</a>
                </div>
                <div class="col-lg-2 tab_1">
                  <a href="#"><img src="./bootstrap/images/tab/call_center.png" alt=""></a>
                  <a href="#">কল সেন্টার</a>
                </div>
                <div class="col-lg-2 tab_1">
                  <a href="#"><img src="./bootstrap/images/tab/helpdesk.png" alt=""></a>
                  <a href="#">মোবাইল সেবা</a>
                </div>
                <div class="col-lg-2 tab_1">
                  <a href="#"><img src="./bootstrap/images/tab/mobile_service.png" alt=""></a>
                  <a href="#">হেল্পডেস্ক</a>
                </div>
                <div class="col-lg-2 tab_1">
                  <a href="#"><img src="./bootstrap/images/tab/agriculture.png" alt=""></a>
                  <a href="#">মৎস্য ও প্রাণী</a>
              </div>
            </div>
           
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0"></div> <div class="row">
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/agriculture.png" alt=""></a>
                <a href="#">কৃষি</a>
              </div>
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/call_center.png" alt=""></a>
                <a href="#">কল সেন্টার</a>
              </div>
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/helpdesk.png" alt=""></a>
                <a href="#">মোবাইল সেবা</a>
              </div>
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/mobile_service.png" alt=""></a>
                <a href="#">হেল্পডেস্ক</a>
              </div>
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/agriculture.png" alt=""></a>
                <a href="#">মৎস্য ও প্রাণী</a>
            </div>
          </div>
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0"> <div class="row">
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/agriculture.png" alt=""></a>
                <a href="#">কৃষি</a>
              </div>
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/call_center.png" alt=""></a>
                <a href="#">কল সেন্টার</a>
              </div>
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/helpdesk.png" alt=""></a>
                <a href="#">মোবাইল সেবা</a>
              </div>
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/mobile_service.png" alt=""></a>
                <a href="#">হেল্পডেস্ক</a>
              </div>
              <div class="col-lg-2 tab_1">
                <a href="#"><img src="./bootstrap/images/tab/agriculture.png" alt=""></a>
                <a href="#">মৎস্য ও প্রাণী</a>
            </div>
          </div></div>
          </div>
        </div>
        <!-- tab part end-->
        <!-- notice part start -->
        <div class="notice">
          <h4>উদ্যোগ</h4>
          <ul>
            <li><a href="#">
             <?php dynamic_sidebar('list');?> 
            
         </a></li>
            <!-- <li><a href="#"> </a></li>
            <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) </a></li>
            <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) </a></li>
            <li><a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) </a></li> -->
          </ul>

          <div class="row">
            <div class="btn"><button><a id="tt" href="">সকল</a></button></div>
          </div>

        </div>
        <!-- notice part end -->
        <div class="others"></div>
    </div>

<!-- hero side start -->
    <div class="col-lg-4 hero_sidebar">
      <div class="sidebar_img">
        <a href="#">
          <?php dynamic_sidebar('sideimg');?>
        </a>
      </div>
      <h4>সকল বাতায়ন</h4>
      <form action="">
        <select name="" id="">
          <option value="">
          ওয়েবসাইট বাছাই করুন</option>
          <option value="">ওয়েবসাইট বাছাই করুন</option>
          <option value="">ওয়েবসাইট বাছাই করুন</option>
          <option value="">ওয়েবসাইট বাছাই করুন</option>
          <option value="">ওয়েবসাইট বাছাই করুন</option>
        </select>
      </form>
      <div class="sidebar_video">
        <h4>hhhh</h4>
        <?php dynamic_sidebar('sidevideo');?>
        
        <h4>hhhh</h4>
      </div>
    </div>


<!-- hero side end -->


  </div>
</section>
<!-- hero part end -->
<!-- footer part start -->
<footer class="cont">
  <div class="row footer_top">
   <img src="./bootstrap/images/footer/download.png">
  </div>
  <div class="row footer_bottom">
    <div class="col-lg-8 fb_left">

      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">সেবাখাত</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">বৈদেশিক বিনিয়োগ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">আইন-বিধি</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">তথ্য বাতায়ন</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">সেবাকুঞ্জ</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
    </div>

    <div class="col-lg-4 fb_right text-end">
      <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
      <?php dynamic_sidebar('ftimg');?>
      <img src="./bootstrap/images/footer/np-logo-set.png" alt="">
    </div>
  </div>

</footer>
<!-- footer part end -->

<?php wp_footer(); ?>

    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>