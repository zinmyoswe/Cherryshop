<?php
  session_start();
  include('confs/config.php');
  // include('function/function.php');
  include('header.php');
  include('navbar.php');
?>

<!-- ----------------------sport-bar start--------------------- -->

<style>
      /*main{
        width: 100% !important;

      }*/
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .carousel-item-next, .carousel-item-prev, .carousel-item.active {
    display: block;
}
.carousel-item {
    height: 32rem;
}
.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    height: 600px;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: -webkit-transform .6s ease-in-out;
    transition: transform .6s ease-in-out;
    transition: transform .6s ease-in-out,-webkit-transform .6s ease-in-out;
}


/*addias*/
.color-theme-white___3NDJn h2, .color-theme-white___3NDJn p {
    color: #fff;
}
.title___DZ13z {
    margin-bottom: 15px;
    font-size: 16px;
}
.gl-heading--s, h5 {
    font-size: 18px;
    line-height: 16px;
}
.gl-heading, h1, h2, h3, h4, h5, h6 {
    letter-
    spacing: 1.5px;
}
h2{
    font-style: normal;
    font-weight: 600;
    font-family: 'Abel', sans-serif;
}
h2 a{
    color: #fff;
}
h2 a:hover{
    color: #fff;
}
/*online shop*/
.add2_text{
    color: #000;
}
.img_feature{
    margin-right: 100px;
    margin-bottom: 10px;
}
.feature_cat{
    font-size: 24px;
}
h5{
    font-weight: bold;
    font-size: 20px;
    text-transform: uppercase;
}
.home_con{
    height: 170px;
    background-color: #ede734;
    color: #000;
}
h4{
    font-weight: bold;
    font-size: 22px;
    text-transform: uppercase;
    font-family: 'adiBlack',Arial,Helvetica,Verdana,sans-serif;
}

.caro3_3{
  margin-right: 70px;
  margin-left: 30px;
}
.caro3{
  margin: 10px;

}
.caro3_img{
  width: 400px;
  margin-right: 20px;

}

/*Index Slide Responsive*/

@media (min-width: 992px){
  .wrap-side-menu {
    display: none;
  }
}

@media (max-width: 1024px) {
  .carousel-item .xl-text2 {
    font-size: 60px;
  }

   /*sport_store_add_1 section*/
  #sport_store_add_1 img{
    width: 100%;
    height: 504px;
    margin-left: 0 !important;
    padding: 6px;
  }

    /*sport_store_add_2 section*/
  #sport_store_add_2 img{
    width: 100%;
    height: 504px;
    margin-left: 0 !important;
    padding: 6px;
  }

   .caro3_3{
  margin-right: 0 !important;
  margin-left: 0 !important;
  }
.caro3{
  margin: 0 !important;


}
.caro3_img{
  height: 404px;
  width: 350px;
  padding: 4px;
}
}

/*for Tablet*/
@media (max-width: 768px) {
 

  

  #myvideo2{
    /*display: flex;*/
    /*width: 100%;
    height: 100%;*/
  }


}

/*for Android phone */
@media (max-width: 360px) {

.carousel-item img {
    height: 100% !important;
    width: 100% !important;

  }

  #myvideo2{
    /*display: flex;*/
    /*width: 100%;
    height: 100%;*/
  }
}

@media (max-width: 576px) {

  .carousel-item  {
    font-size: 40px;
  }

  .carousel-item  {
    font-size: 16px;
  }

  .carousel-inner{
    height: 400px;
  }

  .carousel-item img {
    height: 100% !important;
    width: 100% !important;

  }

   .carousel-item h1 {
    font-size: 25px;
  }
  .carousel-item p {
    font-size: 12px !important;
  }

  .carousel-item p a{
    font-size: 12px !important;
    
  }
  .carousel-caption{
   margin-bottom: 130px !important;
  }

  .cc1{
    margin-bottom: 80px !important;
  }
  .cc2{
    margin-bottom: 200px !important;
  }

  .cc3{
    margin-bottom: 300px !important;
  }

  /*sport_store_add_1 section*/
  #sport_store_add_1 img{
    width: 100%;
    height: 504px;
    margin-left: 0 !important;
    padding: 12px;
  }

    /*sport_store_add_2 section*/
  #sport_store_add_2 img{
    width: 100%;
    height: 504px;
    margin-left: 0 !important;
    padding: 12px;
  }

  /*.caro3_3{
  width: 1024px;
  }
.caro3{
  margin: 0 !important;


}*/
.caro3_img{
  width: 100%;
  height: 504px;
  
}

/*feature_categories_add*/
#feature_categories_add{
   padding: 4px;
}

#feature_categories_add img{
    display: block;
    width: 100%;
    
}

.img_feature h2{
    padding: 20px;
}
  
  
  /*footer*/
  .foot_con{
    display: none;
  }
}

.btn-lg {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0rem !important;
}
    </style>
    <!-- Custom styles for this template -->
   <main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
       <div class="carousel-item active">

        <img src="admin/image/sustainability-ss22-rfto-sustain-hp-mh-02-d_tcm143-885345.jpg" alt="" width="100%" height="100%" fill="#777">
        <div class="container">
          <div class="carousel-caption text-left">
            <h3 style="color: #000; font-weight: bold;">RUN FOR THE OCEANS</h3>
            <p style="color: #000;">Every action counts. Discover our Run For The <br>Oceans collection, made to help end plastic waste.</p>

            <p><a class="btn btn-lg btn-dark" href="product.php" role="button">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
            <p><a class="btn btn-lg btn-dark" href="product.php" role="button" style="margin-bottom: 120px">LEARN MORE <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
      </div> <!-- carousel-item 1 end -->

      <!-- carousel-item 2 start -->
      <!-- {{-- ======================= start of carousel-item 2 ==================== --}} -->
  <style type="text/css" media="screen">
      .controls___26zJz {
    display: flex;
    gap: var(--gl-spacing-0100);
    position: absolute;
    bottom: 0;
    left: 0;
    margin: var(--gl-spacing-0200);
}
.icon___2GMo7 {
    border: 2px solid #fff;
    border-radius: 50%;
    background-color: rgba(0,0,0,.25);
    z-index: 1;
}
    </style>  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function playPause(btn,vid){
  var vid = document.getElementById(vid);
  if(vid.paused){
    vid.play();
    playbtn.style.className = "url(pause.png)";
  } else {
    vid.pause();
    playbtn.style.background = "url(play.png)";
  }
}
  </script>
    
      <div class="carousel-item" 
      style="width: 100%; height: 42.5rem;
             @media(min-width: 576px) {width: 100%; height: 22rem !important;} ">
     
     <div style="width: 100%; height: 100%; display: flex;" >
        <video id="myvideo2" loop="true" autoplay="true"  muted playsinline="" webkit-playsinline="" x5-playsinline="">
<source src="admin/video/ss22-ozworld-launch-glp-masthead-large-female-animated-2-d_dw6k2d.mp4" type="video/mp4"  style="width: 100%; height: 100%; " />

</video> 
<!-- video button end -->
<div class="controls___26zJz">

  <svg onclick="playPause(this,'myvideo2')" class="icon___2GMo7" width="44" height="44" style="margin : 1.5rem;" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="pause-icon"><path d="M19 14H17V30H19V14ZM27 14H25V30H27V14Z" fill="white"></path></svg>

</div> <!-- video button end -->
</div>



        <div class="container">
          <div class="carousel-caption text-left cc3" style="margin-bottom: 140px; color: #fff;">
            <h3 style="font-weight: bold;">ROZWEEGO. BE THE REAL YOU.</h3>
            <p>Bold, chunky style bridging the gap between past <br>and future.</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button" >SHOP NOW <i class="fa fa-arrow-right"></i></a></p>

          </div>

        </div>
        
      </div>

     <!-- carousel-inner end -->

 
 <!--  {{-- ======================= end of carousel-item 2 ==================== --}} -->
      <!-- carousel-item 2 end -->

      <!-- carousel-item 3 start -->
      <div class="carousel-item">
        <img src="admin/image/ss22-main-retropy-mh-d_tcm215-890379.jpg" alt="" width="100%" height="100%" fill="#777">

      <div class="carousel-caption text-left">
            <h3>MY RETROPY</h3>
            <p>
How I feel today is what I decide</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
      </div>

      <!-- carousel-item 3 end -->
      <div class="carousel-item">
        <img src="admin/image/2335900---CAM_Onsite_3-Stripes-Day_SALE_HP-GLP-Masthead_2880x720_tcm207-882373.jpg" alt="" width="100%" height="100%" fill="#777">

        <div class="container">
          <div class="carousel-caption text-left">
           
            <p>Discount applied at cart. Exclusions apply. Terms <br>and conditions.</p>
            <p><a class="btn btn-lg btn-dark" href="product.php" role="button" style="margin-bottom: 130px">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
      </div>
      <!-- carousel-item 4 end -->
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
 <!--  {{-- ======================= start of addias ==================== --}} -->

 <!-- {{-- ======================= start of NMD caro5 ==================== --}} -->
  <style type="text/css" media="screen">
      .controls___26zJz {
    display: flex;
    gap: var(--gl-spacing-0100);
    position: absolute;
    bottom: 0;
    left: 0;
    margin: var(--gl-spacing-0200);
}
.icon___2GMo7 {
    border: 2px solid #fff;
    border-radius: 50%;
    background-color: rgba(0,0,0,.25);
    z-index: 1;
}
    </style>  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function playPause(btn,vid){
  var vid = document.getElementById(vid);
  if(vid.paused){
    vid.play();
    playbtn.style.className = "url(pause.png)";
  } else {
    vid.pause();
    playbtn.style.background = "url(play.png)";
  }
}
  </script>
    <div class="carousel-inner">
      <div class="carousel-item active" 
      style="width: 100%; height: 42.5rem;
             @media(min-width: 576px) {width: 100%; height: 22rem !important;} ">
     
     <div style="width: 100%; height: 100%; display: flex;" >
        <video id="myvideo3" loop="true" autoplay="true"  muted playsinline="" webkit-playsinline="" x5-playsinline="">
<source src="admin/video/2263379_-_CAM_CRM_Origination_NMD_April_SS22_MASTHEAD_large_update_Desktop_hsowwh.mp4" type="video/mp4"  style="width: 100%; height: 100%; " />

</video> 
<!-- video button end -->
<div class="controls___26zJz">

  <svg onclick="playPause(this,'myvideo3')" class="icon___2GMo7" width="44" height="44" style="margin : 1.5rem;" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="pause-icon"><path d="M19 14H17V30H19V14ZM27 14H25V30H27V14Z" fill="white"></path></svg>

</div> <!-- video button end -->
</div>



        <div class="container">
          <div class="carousel-caption text-left cc3" style="margin-bottom: 140px; color: #fff;">
            <h3 style="font-weight: bold;">
A NEW TAKE ON NMD</h3>
            <p>There's no limit to your style expansion. Explore the <br>new NMD_V3.</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button" >SHOP NOW <i class="fa fa-arrow-right"></i></a></p>

          </div>

        </div>
        
      </div>

    </div> <!-- carousel-inner end -->

 
 <!--  {{-- ======================= end of NMD caro5 ==================== --}} - -->
 
   
    
    <!-- {{-- ======================= start of caro ==================== --}} -->
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="admin/image/YZY_FOAM_RNR_ONYX_FAM-D_tcm207-893481.jpg" alt="" width="100%" height="100%" fill="#777">
        <div class="container">
          <div class="carousel-caption text-left cc2" style="margin-bottom: 140px; color: #000;" >
            <h3 style="font-weight: bold;">YZY FOAM RNR ONYX</h3>
            <p>AVAILABLE THROUGH THE ADIDAS APP. DOWNLOAD,<br> REGISTER, PARTICIPATE</p>
            <p><a class="btn btn-lg btn-dark" href="product.php" role="button">SIGN UP NOW <i class="fa fa-arrow-right"></i></a></p>
             <!-- <p><a class="btn btn-lg btn-dark" href="product.php" role="button">EXPLORE <i class="fa fa-arrow-right"></i></a></p> -->
          </div>


        </div>
      </div>

    </div>
    
  <!-- {{-- ======================= end of caro ==================== --}} -->

  <!-- {{-- ======================= start of caro2 ==================== --}} -->
  <style type="text/css" media="screen">
      .controls___26zJz {
    display: flex;
    gap: var(--gl-spacing-0100);
    position: absolute;
    bottom: 0;
    left: 0;
    margin: var(--gl-spacing-0200);
}
.icon___2GMo7 {
    border: 2px solid #fff;
    border-radius: 50%;
    background-color: rgba(0,0,0,.25);
    z-index: 1;
}
    </style>  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function playPause(btn,vid){
  var vid = document.getElementById(vid);
  if(vid.paused){
    vid.play();
    playbtn.style.className = "url(pause.png)";
  } else {
    vid.pause();
    playbtn.style.background = "url(play.png)";
  }
}
  </script>
    <div class="carousel-inner">
      <div class="carousel-item active" 
      style="width: 100%; height: 42.5rem;
             @media(min-width: 576px) {width: 100%; height: 22rem !important;} ">
     
     <div style="width: 100%; height: 100%; display: flex;" >
        <video id="myvideo1" loop="true" autoplay="true"  muted playsinline="" webkit-playsinline="" x5-playsinline="">
<source src="admin/video/sustainability-ss22-rfto-launch-hp-mh-d_qec44x.mp4" type="video/mp4"  style="width: 100%; height: 100%; " />

</video> 
<!-- video button end -->
<div class="controls___26zJz">

  <svg onclick="playPause(this,'myvideo1')" class="icon___2GMo7" width="44" height="44" style="margin : 1.5rem;" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="pause-icon"><path d="M19 14H17V30H19V14ZM27 14H25V30H27V14Z" fill="white"></path></svg>

</div> <!-- video button end -->
</div>



        <div class="container">
          <div class="carousel-caption text-left cc3" style="margin-bottom: 140px; color: #fff;">
            <h3 style="font-weight: bold;">RUN FOR THE OCEANS</h3>
            <p>t's time to put on your running shoes and Run For<br> The Oceans. Every minute counts.</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button" >LEARN MORE <i class="fa fa-arrow-right"></i></a></p>

          </div>

        </div>
        
      </div>

    </div> <!-- carousel-inner end -->

 
 <!--  {{-- ======================= end of caro2 ==================== --}} -->

 <!-- {{-- ======================= start of caro3 ==================== --}} -->
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="admin/image/real-madrid-hp-mh-d_tcm207-894592.jpg" alt="" width="100%" height="100%" fill="#777">
        <div class="container">
          <div class="carousel-caption text-left cc2" style="margin-bottom: 140px; color: #fff;" >
            <h3 style="font-weight: bold;">REAL MADRID</h3>
            <br><br>
            <p>CHAMPIONS OF EUROPE</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
             <!-- <p><a class="btn btn-lg btn-dark" href="product.php" role="button">EXPLORE <i class="fa fa-arrow-right"></i></a></p> -->
          </div>


        </div>
      </div>

    </div>
    
  <!-- {{-- ======================= end of caro3 ==================== --}} -->

<!--  {{-- ======================= start of what_is_hot ==================== --}} -->

  <?php include('what_is_hot.php'); ?>

  <br>

    <!-- {{-- ======================= end of what_is_hot ==================== --}} -->
<!--  {{-- ======================= start of bestofcherryshop ==================== --}} -->

<!--  {{-- ======================= start of bestofcherryshop ==================== --}} -->

  <?php include('bestofcherryshop.php'); ?>

    <!-- {{-- ======================= end of bestofcherryshop ==================== --}} -->

    <!--  {{-- ======================= start of best_of_product ==================== --}} -->
    <br><br>
  <?php include('best_of_product.php'); ?>

    <!-- {{-- ======================= end of best_of_product ==================== --}} -->

 

  <!--  {{-- ======================= start of TRENDING ==================== --}} -->
  <?php include('trending.php'); ?>

    <!-- {{-- ======================= end of TRENDING ==================== --}} -->

 <!--  {{-- ======================= start of WHO ARE YOU SHOPPING FOR? ==================== --}} -->
  <?php include('who_shopping_for.php'); ?>

    <!-- {{-- ======================= end of WHO ARE YOU SHOPPING FOR? ==================== --}} -->

    <!-- {{-- ======================= start of bestseller ==================== --}} -->
        
    <!-- {{-- Bestseller code here --}} -->
    

    <!-- {{-- ======================= end of bestseller ==================== --}} -->

 

     

  </div><!-- /.container -->

    </main><!-- {{--  main end --}} -->
 
<!-- ----------------------sport-bar end--------------------- -->

      <!-- -----------------------------------uni end -------------------- -->


<?php include('latest_product.php'); ?>

<br><br>     
<!-- ----------------------seo-component-container___NLzc8 start ---------------------- -->
<style type="text/css" media="screen">
  .seo-component-container___NLzc8 {
    padding: 80px 0 80px;
    background: #e9ecef;
}
.seo-first-column___11FNY {
    padding-bottom: 0;
}
.seo-heading___33M96 {
    margin-bottom: 0;
}
.gl-label--m {
    font-size: 12px;
    line-height: 16px;
}
.gl-label--bold {
    font-family: "AdihausDIN",Helvetica,Arial,sans-serif;
    font-weight: 700;
}
.seo-content___1f6HA {
    margin: 10px 0 0 0;
}
@media (min-width: 960px){
.seo-content___1f6HA {
    margin-top: 20px;
}
}

.gl-body--s, .gl-paragraph--s {
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 14px;
}
</style>
<div class="seo-component-container___NLzc8">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-11 col-xl-10 col-hg-9 col-sm-12 offset-lg-1 offset-xl-2 offset-hg-3 seo-first-column___11FNY ">
              <h2 class="gl-label gl-label--m gl-label--bold seo-heading___33M96">STORIES, STYLES AND SPORTSWEAR AT ADIDAS, SINCE 1949</h2>
              <div class="gl-body gl-body--s seo-content___1f6HA">
                Sport keeps us fit. Keeps you mindful. Brings us together. Through sport we have the power to change lives. Whether it is through stories of inspiring athletes. Helping you to get up and get moving. Sportswear featuring the latest technologies, to up your performance. Beat your PB.adidas offers a home to the runner, the basketball player, the soccer kid, the fitness enthusiast. The weekend hiker that loves to escape the city. The yoga teacher that spreads the moves. The 3-Stripes are seen in the music scene. On stage, at festivals. Our sports clothing keeps you focused before that whistle blows. During the race. And at the finish lines. We’re here to supportcreators. Improve their game. Their lives. And change the world.
<br><br>
                adidas is about more than sportswear and workout clothes. We partner with the best in the industry to co-create. This way we offer our fans the sports apparel and style that match their athletic needs, while keeping sustainability in mind. We’re here to support creators. Improve their game. Create change. And we think about the impact we have on our world.
              </div>
            </div>

            <div class="col-sm-6 col-lg-11 col-xl-10 col-hg-9 col-sm-12 offset-lg-1 offset-xl-2 offset-hg-3 seo-first-column___11FNY ">
               
<h2 class="gl-label gl-label--m gl-label--bold seo-heading___33M96">WORKOUT CLOTHES, FOR ANY SPORT</h2>
              <div class="gl-body gl-body--s seo-content___1f6HA">
                adidas designs for and with athletes of all kinds. Creators, who love to change the game. Challenge conventions. Break the rules and define new ones. Then break them again. We supply teams and individuals with athletic clothing pre-match. To stay focussed. We design sports apparel that get you to the finish line. To win the match. We support women, with bras and tights made for purpose. From low to high support. Maximum comfort. We design, innovate and itterate. Testing new technologies in action. On the pitch, the tracks, the court, the pool. Retro workout clothes inspire new streetwear essentials. Like NMD, Ozweego and our Firebird tracksuits. Classic sports models are brought back to life. Like Stan Smith. And Superstar. Now seen on the streets and the stages.
<br><br>
Through our collections we blur the borders between high fashion and high performance. Like our adidas by Stella McCartney athletic clothing collection – designed to look the part inside and outside of the gym. Or some of our adidas Originals lifestyle pieces, that can be worn as sportswear too. Our lives are constantly changing. Becoming more and more versatile. And adidas designs with that in mind.
              </div>
            </div>
          
            <br><br><br><br>
            
        </div>
    </div>
</div>
<!-- ----------------------seo-component-container___NLzc8 end ---------------------- -->
<?php include('footer.php'); ?>

</body>
</html>

 

 
        
