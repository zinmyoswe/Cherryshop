<?php
  session_start();
  include('confs/config.php');
  // include('function/function.php');
  include('header2.php');
  include('navbar.php');
?>

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
	<link rel="stylesheet" href="imagehover.css-master/css/imagehover.min.css">

	<!-- Addias font -->
    <link rel="stylesheet" type="text/css" href="https://www.adidas.com.sg/glass/react/d62275f/assets/fonts/AdihausDIN-CnBoldItalic.woff2">
    <link rel="stylesheet" type="text/css" href="https://www.adidas.com.sg/glass/react/d62275f/assets/fonts/yeezy_tstar-regular-webfont.woff2">
    
<style type="text/css" media="screen">
.coco{
	margin: 0px 10px 0px;
	font-weight: bold;
}
a{
	color: #000;
}
a:hover{
	color: #000;
	text-decoration: underline;
}

/*FOR MOBILE VERs*/
@media (min-width: 960px){
.header-wrapper___3fLbE {
    margin-top: 30px;
    margin-bottom: 0;
}

.header-wrapper___3fLbE .heading___1_p74 {
    display: inline-block;
    margin-bottom: 0;
    font-family: "AdihausDIN Cn",Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
}

}

@media (min-width: 1280px){
.header-wrapper___3fLbE {
    padding-left: 0;
}
}

/*FOR mobile version*/
@media (min-width: 960px) and (min-width: 1280px){
.header-wrapper___3fLbE .heading___1_p74 {
    font-size: 25px;
    font-style: italic;
    font-weight: bold;
    line-height: 38px;
}
}

.header-wrapper___3fLbE {
    width: 100%;
    margin-left: 0;
    margin-right: 0;

    /*padding: 0 15px;*/
}
.header-wrapper___3fLbE .count___1ZIhY {
    color: #767677;
    font-size: 10px;
}
.bbimg{
	width: 181px;
	height: 116px;
	margin: 0px -10px 0px;
}

.details___1objn {
    margin: 0;
    padding: 15px;
}

.gl-body--s, .gl-paragraph--s {
    font-size: 14px;
    font-weight: bold;
    line-height: 20px;
    margin-bottom: 14px;
}

.product-name___1Q86U {
    margin: 0 0 5px 0;
}

.gl-cta {
    align-items: center;
    border: none;
    border-radius: 0;
    cursor: pointer;
    display: inline-flex;
    justify-content: flex-start;
}

a .gl-cta--tertiary:hover{
	background-color: black;
	color: white;

}

.product__image_cherry{
	width: 100%; 
	height:100%; 
	display: flex;

}

.color-variations__fixed-size .glass-product-card__carousel {
    margin: 2px 0 0;
    padding: 0;
}

.glass-product-card__details {
    min-height: 90px;
    padding: 10px 10px 20px 10px;
}

.glass-product-card__details {
    clear: both;
    display: block;
   
    overflow: auto;
}

.gl-body, .gl-paragraph {
    font-family: "AdihausDIN",Helvetica,Arial,sans-serif;
    font-style: normal;
    font-weight: normal;
}

.gl-paragraph {
    margin-bottom: 0;
    margin-top: 0;
}

.glass-product-card__category {
    color: var(--gl-label-color-text);
    flex: 1 1 auto;
    font-family: "AdihausDIN",Helvetica, Arial, sans-serif;
    font-size: 12px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.dark-grey___2ufTt {
    color: #767677;
}

.badge{
	border-radius: 0 !important;
	font-weight: 300 !important;
    font-size: 15px;

}

/*FOR Mobile VERs*/
/*@media (min-width: 360px){
.carousel-caption {
    background-color: yellow;
}
}*/

/*FOR DESKTOP VERs*/
/*@media (min-width: 960px){
.carousel-caption {
    background-color: red;
}

}*/

/*FOR Tablet VERs*/
/*@media (min-width: 760px) and (max-width: 900px){
.carousel-caption {
    background-color: green;
}

}*/
</style>

<main role="main">

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
<source src="https://brand.assets.adidas.com/video/upload/q_auto,vc_auto/video/upload/global%20brand%20publishing/Horizontal/adidas%20x%20lego/commercial-fw22-lego-ch1-classics-kids-lp-mh-large-3d-d.mp4"  style="width: 100%; height: 100%;  " />

</video> 
<!-- video button end -->
<div class="controls___26zJz">

  <svg onclick="playPause(this,'myvideo1')" class="icon___2GMo7" width="44" height="44" style="margin : 1.5rem;" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="pause-icon"><path d="M19 14H17V30H19V14ZM27 14H25V30H27V14Z" fill="white"></path></svg>

</div> <!-- video button end -->
</div>



        <div class="container">
          <div class="carousel-caption text-start cc3" style="margin-bottom: 140px; color: #fff;">
            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enGB/Images/BOS-LOGO-Lockup-White_tcm143-890620.png" style="width: 250px;">
            <h1 style="font-weight: bold;">IMAGINE YOUR WORLD
 </h1>
            <p>Create your own playground with the new <br> exclusive adidas LEGO® collection.  </p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button" >SHOP NOW <i class="fa fa-arrow-right"></i></a></p>

          </div>

        </div>
        
      </div>

    </div> <!-- carousel-inner end -->

 
 <!--  {{-- ======================= end of caro2 ==================== --}} -->




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
        <video id="myvideo3" loop="true" autoplay="true"  muted playsinline="" webkit-playsinline="" x5-playsinline="">
<source src="https://brand.assets.adidas.com/image/upload/q_auto,vc_auto/enSG/Images/kids-sports-ss22-lego-play-launch-com-kids-masthead-V2-d_tcm207-833539.mp4" type="video/mp4"  style="width: 100%; height: 100%;  " />

</video> 
<!-- video button end -->
<div class="controls___26zJz">

  <svg onclick="playPause(this,'myvideo3')" class="icon___2GMo7" width="44" height="44" style="margin : 1.5rem;" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="pause-icon"><path d="M19 14H17V30H19V14ZM27 14H25V30H27V14Z" fill="white"></path></svg>

</div> <!-- video button end -->
</div>



        <div class="container">
          <div class="carousel-caption text-end cc3" style="margin-bottom: 140px; color: #fff;">
            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enGB/Images/BOS-LOGO-Lockup-White_tcm143-890620.png" style="width: 250px;">
            <h1 style="font-weight: bold;">IMAGINE YOUR WORLD
 </h1>
            <p>Go play with the new exclusive adidas LEGO® Play <br>collection. Now available.</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button" >SHOP NOW <i class="fa fa-arrow-right"></i></a></p>

          </div>

        </div>
        
      </div>

    </div> <!-- carousel-inner end -->

 
 <!--  {{-- ======================= end of caro2 ==================== --}} -->

  <!--  {{-- ======================= start sports_multiple_bg ==================== --}} -->
 

 <br><br>



  <?php include('kids_slide.php'); ?>
  <?php include('kids_slide2.php'); ?>


</main> 


<br>

<?php include('footer.php'); ?>

</body>
</html>