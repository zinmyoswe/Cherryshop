<?php 
error_reporting(0); 
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
<style type="text/css">
.navbar {
  font-family: "AdihausDIN",Helvetica, Arial, sans-serif;
}
.navbar .megamenu{ padding: 1rem; }
/* ============ desktop view ============ */
@media all and (min-width: 992px) {
  
  .navbar .has-megamenu{position:static!important;}
  .navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }
  
} 
/* ============ desktop view .end// ============ */


/* ============ mobile view ============ */
@media(max-width: 991px){
  .navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
    overflow-y: auto;
      max-height: 90vh;
      margin-top:10px;
  }
}

@media all and (min-width: 992px) {
  .navbar .dropdown-menu-end{ right:0; left: auto;  }
  .navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
  .navbar .nav-item:hover .nav-link{ color: #000; border-bottom: 3px solid black  }
  .navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
  .navbar .dropdown-menu.fade-up{ top:180%;  }
  .navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
} 
/* ============ mobile view .end// ============ */

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color: #000;
    text-decoration: : underline;
    margin-bottom: 4px solid black;
}

li a {
    color: #000;
    font-size: 14px;
    text-decoration: none;
}

.col-megamenu h6{
   font-size: 14px;
   font-weight: bold;
}

.col-megamenu ul li a{
  font-size: 13px;
}

.col-megamenu a:hover{
  color: #000;
  text-decoration: underline;
}

.abc{
  margin-left: 300px;
}

.a12{
  font-weight: bold;
}

.border_pad_extend{
  padding: 20px;
}

.horizontal-separator{
  margin-bottom: 10px;
}


/* For mobile phone nav bar adjustment*/
@media (max-width: 991px) {
  
  .abc{
  margin-left: 0px;
}
} 


</style>

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(){
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
          element.addEventListener('click', function (e) {
            e.stopPropagation();
          });
        })
    }); 
  // DOMContentLoaded  end
</script>
<!-- ============= COMPONENT ============== -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="admin/image/cherry-logo-black2.jpg" style=" height: 28px;"><b>SHOP</b></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
    <ul class="navbar-nav">
      <li></li>
   

      <!-- ------ start 1st mega menu ----- -->
      <li class="nav-item dropdown has-megamenu">
        <a class="nav-link active abc a12" href="product.php" data-bs-toggle=""> MEN</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3 border_pad_extend">
            <div class="col-lg-2 col-6" style="border-right: 1px solid lightgrey">
              <div class="col-megamenu ">
                 <h6 class="title">FEATURED</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/release-dates" ><span class="">Sneaker Releases</span></a></li>
                  <li><a href="/en/men-new_arrivals" ><span class="">New Arrivals</span></a></li>
                  <li><a href="/en/men-best_sellers" ><span class="">Best Sellers</span></a></li>
                  <li><a href="/en/men-exclusive" ><span class="">Only at adidas</span></a></li>
                  <li><a href="/en/unisex" ><span class="">Gender Neutral</span></a></li>
                  <li class="horizontal-separator"></li>
                  <li><a href="/en/ivypark" ><span class="">adidas x IVY PARK</span></a></li>
                  <li><a href="/en/pharrell-originals" ><span class="">Pharrell Williams Premium Basics</span></a></li>
                  <li><a href="/en/men-hiking-mountaineering" ><span class="">Mountaineering</span></a></li>
                  <li><a href="/en/men-sustainable-running"><span class="">Run For the Oceans</span></a></li>
                  <li><a href="/en/pride_pack" ><span class="">Love Unites Collection</span></a></li>
                  <li><a href="/en/kevin_lyons-men" ><span class="">Kevin Lyons</span></a></li>
                  <li><a href="/en/men-summer_collection" ><span class="">Summer Outfits</span></a></li>
                  <li><a href="/en/fathers_day" ><span class="">Father's Day Gifts</span></a></li>
                  <li class="horizontal-separator"></li>
                </ul>
                <div class="bottom-link"></div>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->


            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title"><a href="product.php" title="">SHOES</a></h6>
                <ul class="list-unstyled">
                  <li><a href="/en/men-shoes-new_arrivals" manual_cm_sp="header-_-men-_-shoes-_-new arrivals"><span class="">New Arrivals</span></a></li><li><a href="/en/men-running-shoes" manual_cm_sp="header-_-men-_-shoes-_-running shoes"><span class="">Running Shoes</span></a></li><li><a href="/en/men-sandals%7Cslides" manual_cm_sp="header-_-men-_-shoes-_-slides &amp; sandals"><span class="">Slides &amp; Sandals</span></a></li><li><a href="/en/men-originals-shoes" manual_cm_sp="header-_-men-_-shoes-_-originals"><span class="">Originals</span></a></li><li><a href="/en/men-soccer-shoes" manual_cm_sp="header-_-men-_-shoes-_-soccer cleats &amp; shoes"><span class="">Soccer Cleats &amp; Shoes</span></a></li><li><a href="/en/men-basketball-shoes" manual_cm_sp="header-_-men-_-shoes-_-basketball shoes"><span class="">Basketball Shoes</span></a></li><li><a href="/en/men-training-shoes" manual_cm_sp="header-_-men-_-shoes-_-workout shoes"><span class="">Workout Shoes</span></a></li><li><a href="/en/men-golf-shoes" manual_cm_sp="header-_-men-_-shoes-_-golf shoes"><span class="">Golf Shoes</span></a></li><li><a href="/en/outdoor-men-shoes" manual_cm_sp="header-_-men-_-shoes-_-hiking &amp; outdoor shoes"><span class="">Hiking &amp; Outdoor Shoes</span></a></li><li><a href="/en/men-tennis-shoes" manual_cm_sp="header-_-men-_-shoes-_-tennis shoes"><span class="">Tennis Shoes</span></a></li><li><a href="/en/men-skateboarding-shoes" manual_cm_sp="header-_-men-_-shoes-_-skateboarding shoes"><span class="">Skateboarding Shoes</span></a></li></ul>
                
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">CLOTHING</h6>
                <ul class="list-unstyled">
                 <li><a href="/en/men-clothing-new_arrivals" manual_cm_sp="header-_-men-_-clothing-_-new arrivals"><span class="">New Arrivals</span></a></li><li><a href="/en/men-hoodies%7Csweatshirts" manual_cm_sp="header-_-men-_-clothing-_-hoodies &amp; sweatshirts"><span class="">Hoodies &amp; Sweatshirts</span></a></li><li><a href="/en/men-pants" manual_cm_sp="header-_-men-_-clothing-_-pants"><span class="">Pants</span></a></li><li><a href="/en/men-jackets" manual_cm_sp="header-_-men-_-clothing-_-jackets &amp; vests"><span class="">Jackets &amp; Vests</span></a></li><li><a href="/en/men-shirts" manual_cm_sp="header-_-men-_-clothing-_-tops &amp; t-shirts"><span class="">Tops &amp; T-Shirts</span></a></li><li><a href="/en/men-tracksuits" manual_cm_sp="header-_-men-_-clothing-_-tracksuits"><span class="">Tracksuits</span></a></li><li><a href="/en/men-loungewear" manual_cm_sp="header-_-men-_-clothing-_-loungewear"><span class="">Loungewear</span></a></li><li><a href="/en/men-matching_sets" manual_cm_sp="header-_-men-_-clothing-_-matching sets"><span class="">Matching Sets</span></a></li><li><a href="/en/men-shorts" manual_cm_sp="header-_-men-_-clothing-_-shorts"><span class="">Shorts</span></a></li><li><a href="/en/men-jerseys" manual_cm_sp="header-_-men-_-clothing-_-jerseys"><span class="">Jerseys</span></a></li><li><a href="/en/men-tights" manual_cm_sp="header-_-men-_-clothing-_-tights"><span class="">Tights</span></a></li><li><a href="/en/men-swimwear" manual_cm_sp="header-_-men-_-clothing-_-swimwear"><span class="">Swimwear</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">Accessories</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/men-bags" manual_cm_sp="header-_-men-_-accessories-_-bags &amp; backpacks"><span class="">Bags &amp; Backpacks</span></a></li><li><a href="/en/men-hats" manual_cm_sp="header-_-men-_-accessories-_-hats"><span class="">Hats</span></a></li><li><a href="/en/men-socks" manual_cm_sp="header-_-men-_-accessories-_-socks"><span class="">Socks</span></a></li><li><a href="/en/balls" manual_cm_sp="header-_-men-_-accessories-_-balls"><span class="">Balls</span></a></li><li><a href="/en/phone_cases" manual_cm_sp="header-_-men-_-accessories-_-phone cases"><span class="">Phone Cases</span></a></li><li><a href="/en/men-bottles" manual_cm_sp="header-_-men-_-accessories-_-water bottles"><span class="">Water Bottles</span></a></li><li><a href="/en/men-gloves" manual_cm_sp="header-_-men-_-accessories-_-soccer gloves"><span class="">Soccer Gloves</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->


            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">OUTLET</h6>
                  <ul class="list-unstyled"><li><a href="/en/men-outlet-shoes" manual_cm_sp="header-_-men-_-outlet-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/men-clothing-outlet" manual_cm_sp="header-_-men-_-outlet-_-clothing"><span class="">Clothing</span></a></li><li><a href="/en/men-accessories-outlet" manual_cm_sp="header-_-men-_-outlet-_-accessories"><span class="">Accessories</span></a></li></ul>
                </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">COLLECTIONS</h6>
                  <ul class="list-unstyled">
                    <li><a href="/en/yeezy" manual_cm_sp="header-_-men-_-collections-_-yeezy"><span class="">YEEZY</span></a></li><li><a href="/en/ivypark" manual_cm_sp="header-_-men-_-collections-_-ivy park"><span class="">IVY PARK</span></a></li><li><a href="/en/men-adicolor" manual_cm_sp="header-_-men-_-collections-_-adicolor"><span class="">adicolor</span></a></li><li><a href="/en/men-ultraboost" manual_cm_sp="header-_-men-_-collections-_-ultraboost"><span class="">Ultraboost</span></a></li><li><a href="/en/men-nmd" manual_cm_sp="header-_-men-_-collections-_-nmd"><span class="">NMD</span></a></li><li><a href="/en/men-stan_smith" manual_cm_sp="header-_-men-_-collections-_-stan smith"><span class="">Stan Smith</span></a></li><li><a href="/en/men-superstar" manual_cm_sp="header-_-men-_-collections-_-superstar"><span class="">Superstar</span></a></li><li><a href="/en/men-4d" manual_cm_sp="header-_-men-_-collections-_-4d shoes"><span class="">4D Shoes</span></a></li><li><a href="/en/men-zx" manual_cm_sp="header-_-men-_-collections-_-zx"><span class="">ZX</span></a></li><li><a href="/en/men-tiro" manual_cm_sp="header-_-men-_-collections-_-tiro"><span class="">Tiro</span></a></li><li><a href="/en/men-forum" manual_cm_sp="header-_-men-_-collections-_-forum"><span class="">Forum</span></a></li><li><a href="/en/men-terrex" manual_cm_sp="header-_-men-_-collections-_-terrex"><span class="">Terrex</span></a></li><li><a href="/en/men-adilette" manual_cm_sp="header-_-men-_-collections-_-adilette"><span class="">adilette</span></a></li><li><a href="/en/men-ozworld" manual_cm_sp="header-_-men-_-collections-_-ozworld"><span class="">OzWorld</span></a></li><li><a href="/en/men-campus" manual_cm_sp="header-_-men-_-collections-_-campus"><span class="">Campus</span></a></li>
                  </ul>
                </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>

      <!-- ------ end 1st mega menu ----- -->
      <!-- ------ start 2nd mega menu ----- -->
<li class="nav-item dropdown has-megamenu">
        <a class="nav-link active a12" href="women.php" data-bs-toggle=""> WOMEN</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3 border_pad_extend">
            <div class="col-lg-2 col-6"  style="border-right: 1px solid lightgrey">
              <div class="col-megamenu">
                <h6 class="title">FEATURED</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/release-dates" manual_cm_sp="header-_-men-_-featured-_-sneaker releases"><span class="">Sneaker Releases</span></a></li><li><a href="/en/men-new_arrivals" manual_cm_sp="header-_-men-_-featured-_-new arrivals"><span class="">New Arrivals</span></a></li><li><a href="/en/men-best_sellers" manual_cm_sp="header-_-men-_-featured-_-best sellers"><span class="">Best Sellers</span></a></li><li><a href="/en/men-exclusive" manual_cm_sp="header-_-men-_-featured-_-only at adidas"><span class="">Only at adidas</span></a></li><li><a href="/en/unisex" manual_cm_sp="header-_-men-_-featured-_-gender neutral"><span class="">Gender Neutral</span></a></li><li class="horizontal-separator"></li><li><a href="/en/ivypark" manual_cm_sp="header-_-men-_-featured-_-adidas x ivy park"><span class="">adidas x IVY PARK</span></a></li><li><a href="/en/pharrell-originals" manual_cm_sp="header-_-men-_-featured-_-pharrell williams premium basics"><span class="">Pharrell Williams Premium Basics</span></a></li><li><a href="/en/men-hiking-mountaineering" manual_cm_sp="header-_-men-_-featured-_-mountaineering"><span class="">Mountaineering</span></a></li><li><a href="/en/men-sustainable-running" manual_cm_sp="header-_-men-_-featured-_-run for the oceans"><span class="">Run For the Oceans</span></a></li><li><a href="/en/pride_pack" manual_cm_sp="header-_-men-_-featured-_-love unites collection"><span class="">Love Unites Collection</span></a></li><li><a href="/en/kevin_lyons-men" manual_cm_sp="header-_-men-_-featured-_-kevin lyons"><span class="">Kevin Lyons</span></a></li><li><a href="/en/men-summer_collection" manual_cm_sp="header-_-men-_-featured-_-summer outfits"><span class="">Summer Outfits</span></a></li><li><a href="/en/fathers_day" manual_cm_sp="header-_-men-_-featured-_-father's day gifts"><span class="">Father's Day Gifts</span></a></li><li class="horizontal-separator"></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">SHOES</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/women-shoes-new_arrivals" manual_cm_sp="header-_-women-_-shoes-_-new arrivals"><span class="">New Arrivals</span></a></li><li><a href="/en/women-running-shoes" manual_cm_sp="header-_-women-_-shoes-_-running shoes"><span class="">Running Shoes</span></a></li><li><a href="/en/women-sandals%7Cslides" manual_cm_sp="header-_-women-_-shoes-_-slides &amp; sandals"><span class="">Slides &amp; Sandals</span></a></li><li><a href="/en/women-originals-shoes" manual_cm_sp="header-_-women-_-shoes-_-originals"><span class="">Originals</span></a></li><li><a href="/en/women-training-shoes" manual_cm_sp="header-_-women-_-shoes-_-workout shoes"><span class="">Workout Shoes</span></a></li><li><a href="/en/women-tennis-shoes" manual_cm_sp="header-_-women-_-shoes-_-tennis shoes"><span class="">Tennis Shoes</span></a></li><li><a href="/en/women-basketball-shoes" manual_cm_sp="header-_-women-_-shoes-_-basketball shoes"><span class="">Basketball Shoes</span></a></li><li><a href="/en/women-soccer-shoes" manual_cm_sp="header-_-women-_-shoes-_-soccer cleats &amp; shoes"><span class="">Soccer Cleats &amp; Shoes</span></a></li><li><a href="/en/outdoor-women-shoes" manual_cm_sp="header-_-women-_-shoes-_-hiking &amp; outdoor shoes"><span class="">Hiking &amp; Outdoor Shoes</span></a></li><li><a href="/en/women-golf-shoes" manual_cm_sp="header-_-women-_-shoes-_-golf shoes"><span class="">Golf Shoes</span></a></li><li><a href="/en/women-skateboarding-shoes" manual_cm_sp="header-_-women-_-shoes-_-skateboarding shoes"><span class="">Skateboarding Shoes</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">CLOTHING</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/women-clothing-new_arrivals" manual_cm_sp="header-_-women-_-clothing-_-new arrivals"><span class="">New Arrivals</span></a></li><li><a href="/en/women-hoodies%7Csweatshirts" manual_cm_sp="header-_-women-_-clothing-_-hoodies &amp; sweatshirts"><span class="">Hoodies &amp; Sweatshirts</span></a></li><li><a href="/en/women-pants" manual_cm_sp="header-_-women-_-clothing-_-pants"><span class="">Pants</span></a></li><li><a href="/en/women-jackets" manual_cm_sp="header-_-women-_-clothing-_-jackets &amp; vests"><span class="">Jackets &amp; Vests</span></a></li><li><a href="/en/women-shirts" manual_cm_sp="header-_-women-_-clothing-_-tops &amp; t-shirts"><span class="">Tops &amp; T-Shirts</span></a></li><li><a href="/en/women-tights" manual_cm_sp="header-_-women-_-clothing-_-leggings &amp; tights"><span class="">Leggings &amp; Tights</span></a></li><li><a href="/en/women-sports_bras" manual_cm_sp="header-_-women-_-clothing-_-sports bras"><span class="">Sports Bras</span></a></li><li><a href="/en/women-tracksuits" manual_cm_sp="header-_-women-_-clothing-_-tracksuits"><span class="">Tracksuits</span></a></li><li><a href="/en/women-loungewear" manual_cm_sp="header-_-women-_-clothing-_-loungewear"><span class="">Loungewear</span></a></li><li><a href="/en/women-matching_sets" manual_cm_sp="header-_-women-_-clothing-_-matching sets"><span class="">Matching Sets</span></a></li><li><a href="/en/women-shorts" manual_cm_sp="header-_-women-_-clothing-_-shorts"><span class="">Shorts</span></a></li><li><a href="/en/women-dresses%7Cskirts" manual_cm_sp="header-_-women-_-clothing-_-skirts &amp; dresses"><span class="">Skirts &amp; Dresses</span></a></li><li><a href="/en/women-swimwear" manual_cm_sp="header-_-women-_-clothing-_-swimwear"><span class="">Swimwear</span></a></li><li><a href="/en/plus_size-women" manual_cm_sp="header-_-women-_-clothing-_-plus sizes 1x - 4x"><span class="">Plus Sizes 1X - 4X</span></a></li><li><a href="/en/maternity" manual_cm_sp="header-_-women-_-clothing-_-maternity"><span class="">Maternity</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">SPORTS BRAS</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/women-sports_bras-light_support" manual_cm_sp="header-_-women-_-sports bras-_-light support"><span class="">Light Support</span></a></li><li><a href="/en/women-sports_bras-medium_support" manual_cm_sp="header-_-women-_-sports bras-_-medium support"><span class="">Medium Support</span></a></li><li><a href="/en/women-sports_bras-high_support" manual_cm_sp="header-_-women-_-sports bras-_-high support"><span class="">High Support</span></a></li>
                </ul>

                <br><br>

                <h6 class="title">ACCESSORIES</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/women-bags" manual_cm_sp="header-_-women-_-accessories-_-bags &amp; backpacks"><span class="">Bags &amp; Backpacks</span></a></li><li><a href="/en/women-hats" manual_cm_sp="header-_-women-_-accessories-_-hats"><span class="">Hats</span></a></li><li><a href="/en/women-socks" manual_cm_sp="header-_-women-_-accessories-_-socks"><span class="">Socks</span></a></li><li><a href="/en/balls" manual_cm_sp="header-_-women-_-accessories-_-balls"><span class="">Balls</span></a></li><li><a href="/en/phone_cases" manual_cm_sp="header-_-women-_-accessories-_-phone cases"><span class="">Phone Cases</span></a></li><li><a href="/en/women-bottles" manual_cm_sp="header-_-women-_-accessories-_-water bottles"><span class="">Water Bottles</span></a></li><li><a href="/en/women-gloves" manual_cm_sp="header-_-women-_-accessories-_-gloves"><span class="">Gloves</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">OUTLET</h6>
                <ul class="list-unstyled">

            <li><a href="/en/women-outlet-shoes" manual_cm_sp="header-_-women-_-outlet-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/women-clothing-outlet" manual_cm_sp="header-_-women-_-outlet-_-clothing"><span class="">Clothing</span></a></li><li><a href="/en/women-accessories-outlet" manual_cm_sp="header-_-women-_-outlet-_-accessories"><span class="">Accessories</span></a></li>

            </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">COLLECTIONS</h6>
                <ul class="list-unstyled">
<li><a href="/en/yeezy" manual_cm_sp="header-_-women-_-collections-_-yeezy"><span class="">YEEZY</span></a></li><li><a href="/en/ivypark" manual_cm_sp="header-_-women-_-collections-_-ivy park"><span class="">IVY PARK</span></a></li><li><a href="/en/women-adicolor" manual_cm_sp="header-_-women-_-collections-_-adicolor"><span class="">adicolor</span></a></li><li><a href="/en/astir" manual_cm_sp="header-_-women-_-collections-_-astir"><span class="">Astir</span></a></li><li><a href="/en/women-ultraboost" manual_cm_sp="header-_-women-_-collections-_-ultraboost"><span class="">Ultraboost</span></a></li><li><a href="/en/women-nmd" manual_cm_sp="header-_-women-_-collections-_-nmd"><span class="">NMD</span></a></li><li><a href="/en/women-stan_smith" manual_cm_sp="header-_-women-_-collections-_-stan smith"><span class="">Stan Smith</span></a></li><li><a href="/en/women-superstar" manual_cm_sp="header-_-women-_-collections-_-superstar"><span class="">Superstar</span></a></li><li><a href="/en/women-forum" manual_cm_sp="header-_-women-_-collections-_-forum"><span class="">Forum</span></a></li><li><a href="/en/women-4d" manual_cm_sp="header-_-women-_-collections-_-4d shoes"><span class="">4D Shoes</span></a></li><li><a href="/en/women-zx" manual_cm_sp="header-_-women-_-collections-_-zx"><span class="">ZX</span></a></li><li><a href="/en/women-tiro" manual_cm_sp="header-_-women-_-collections-_-tiro"><span class="">TIRO</span></a></li><li><a href="/en/women-terrex" manual_cm_sp="header-_-women-_-collections-_-terrex"><span class="">Terrex</span></a></li><li><a href="/en/women-adilette" manual_cm_sp="header-_-women-_-collections-_-adilette"><span class="">adilette</span></a></li><li><a href="/en/women-ozworld" manual_cm_sp="header-_-women-_-collections-_-ozworld"><span class="">OzWorld</span></a></li>
</ul>
            </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>
      
      <!-- ------ end 2nd mega menu ----- -->
      <!-- ------ start 3rd mega menu ----- -->

      <li class="nav-item dropdown has-megamenu">
        <a class="nav-link active a12" href="kids.php" data-bs-toggle=""> KIDS</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3 border_pad_extend">
            <div class="col-lg-3 col-6" style="border-right: 1px solid lightgrey">
              <div class="col-megamenu">
                <h6 class="title">FEATURED</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/kids-new_arrivals" manual_cm_sp="header-_-kids-_-featured-_-new arrivals"><span class="">New Arrivals</span></a></li><li><a href="/en/kids-best_sellers" manual_cm_sp="header-_-kids-_-featured-_-best sellers"><span class="">Best Sellers</span></a></li><li><a href="/en/kids-exclusive" manual_cm_sp="header-_-kids-_-featured-_-only at adidas"><span class="">Only at adidas</span></a></li><li class="horizontal-separator"></li>

                  <li><a href="/en/lego-kids" manual_cm_sp="header-_-kids-_-featured-_-lego® collection"><span class="">LEGO® Collection</span></a></li><li><a href="/en/disney-kids" manual_cm_sp="header-_-kids-_-featured-_-disney"><span class="">Disney</span></a></li><li><a href="/en/mini_me" manual_cm_sp="header-_-kids-_-featured-_-family matching"><span class="">Family Matching</span></a></li><li><a href="/en/the_simpsons-kids" manual_cm_sp="header-_-kids-_-featured-_-the simpsons"><span class="">The Simpsons</span></a></li><li><a href="/en/kids-sapphire_edge_pack" manual_cm_sp="header-_-kids-_-featured-_-sapphire edge pack"><span class="">Sapphire Edge Pack</span></a></li><li><a href="/en/kevin_lyons-kids" manual_cm_sp="header-_-kids-_-featured-_-kevin lyons"><span class="">Kevin Lyons</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">SHOP BY AGE</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/youth_8_16_years" manual_cm_sp="header-_-kids-_-shop by age-_-youth (8-16 years)"><span class="">Youth (8-16 years)</span></a></li><li><a href="/en/children_4_8_years" manual_cm_sp="header-_-kids-_-shop by age-_-children (4-8 years)"><span class="">Children (4-8 years)</span></a></li><li><a href="/en/infant_toddlers_0_4_years" manual_cm_sp="header-_-kids-_-shop by age-_-infants &amp; toddlers (0-4 years)"><span class="">Infants &amp; Toddlers (0-4 years)</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">BOY CLOTHING</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/boys-athletic_sneakers" manual_cm_sp="header-_-kids-_-boys shoes-_-sneakers"><span class="">Sneakers</span></a></li><li><a href="/en/boys-soccer-shoes" manual_cm_sp="header-_-kids-_-boys shoes-_-soccer cleats"><span class="">Soccer Cleats</span></a></li><li><a href="/en/boys-running-shoes" manual_cm_sp="header-_-kids-_-boys shoes-_-running shoes"><span class="">Running Shoes</span></a></li><li><a href="/en/boys-slides" manual_cm_sp="header-_-kids-_-boys shoes-_-slides"><span class="">Slides</span></a></li>
                </ul>

                <br><br>
                <h6 class="title">GIRL CLOTHING</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/boys-athletic_sneakers" manual_cm_sp="header-_-kids-_-boys shoes-_-sneakers"><span class="">Sneakers</span></a></li><li><a href="/en/boys-soccer-shoes" manual_cm_sp="header-_-kids-_-boys shoes-_-soccer cleats"><span class="">Soccer Cleats</span></a></li><li><a href="/en/boys-running-shoes" manual_cm_sp="header-_-kids-_-boys shoes-_-running shoes"><span class="">Running Shoes</span></a></li><li><a href="/en/boys-slides" manual_cm_sp="header-_-kids-_-boys shoes-_-slides"><span class="">Slides</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    

            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">ACCESSORIES</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/kids-bags" manual_cm_sp="header-_-kids-_-accessories-_-backpacks &amp; bags"><span class="">Backpacks &amp; Bags</span></a></li><li><a href="/en/kids-hats" manual_cm_sp="header-_-kids-_-accessories-_-hats"><span class="">Hats</span></a></li><li><a href="/en/kids-socks" manual_cm_sp="header-_-kids-_-accessories-_-socks"><span class="">Socks</span></a></li>
                </ul>

                <br><br>
                <h6 class="title">COLLECTIONS</h6>
                <ul class="list-unstyled">
                <li><a href="/en/lego-kids" manual_cm_sp="header-_-kids-_-collections-_-lego®"><span class="">LEGO®</span></a></li><li><a href="/en/disney-kids" manual_cm_sp="header-_-kids-_-collections-_-disney"><span class="">Disney</span></a></li><li><a href="/en/kids-superstar" manual_cm_sp="header-_-kids-_-collections-_-superstar"><span class="">Superstar</span></a></li><li><a href="/en/kids-nmd" manual_cm_sp="header-_-kids-_-collections-_-nmd"><span class="">NMD</span></a></li><li><a href="/en/kids-ultraboost" manual_cm_sp="header-_-kids-_-collections-_-ultraboost"><span class="">Ultraboost</span></a></li><li><a href="/en/kids-stan_smith" manual_cm_sp="header-_-kids-_-collections-_-stan smith"><span class="">Stan Smith</span></a></li><li><a href="/en/kids-forum" manual_cm_sp="header-_-kids-_-collections-_-forum"><span class="">Forum</span></a></li><li><a href="/en/kids-tiro" manual_cm_sp="header-_-kids-_-collections-_-tiro"><span class="">Tiro</span></a></li></ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">OUTLET</h6>
                <ul class="list-unstyled">
                  <li><a href="/en/boys-shoes-outlet" manual_cm_sp="header-_-kids-_-outlet-_-boys shoes"><span class="">Boys Shoes</span></a></li><li><a href="/en/girls-shoes-outlet" manual_cm_sp="header-_-kids-_-outlet-_-girls shoes"><span class="">Girls Shoes</span></a></li><li class="horizontal-separator"></li><li><a href="/en/boys-clothing-outlet" manual_cm_sp="header-_-kids-_-outlet-_-boys clothing"><span class="">Boys Clothing</span></a></li><li><a href="/en/girls-clothing-outlet" manual_cm_sp="header-_-kids-_-outlet-_-girls clothing"><span class="">Girls Clothing</span></a></li><li class="horizontal-separator"></li><li><a href="/en/kids-accessories-outlet" manual_cm_sp="header-_-kids-_-outlet-_-accessories"><span class="">Accessories</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>
      <!-- ------ end 3rd mega menu ----- -->


       <!-- ------ ===========start SPORT Megamenu ==================================----- -->

      <li class="nav-item dropdown has-megamenu">
        <a class="nav-link" href="sports.php" data-bs-toggle=""> SPORTS</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3 border_pad_extend">
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">RUNNING</h6>
                <img src="admin/nav/ca-ss22-x-rfto-may-nav_tcm185-891255.jpg">
                <ul class="list-unstyled">
                  <li><a href="/en/running-shoes" manual_cm_sp="header-_-sports-_-running-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/running-clothing" manual_cm_sp="header-_-sports-_-running-_-clothing"><span class="">Clothing</span></a></li><li><a href="/en/running-accessories" manual_cm_sp="header-_-sports-_-running-_-accessories"><span class="">Accessories</span></a></li><li class="horizontal-separator"></li><li><a href="/en/sustainable-running" manual_cm_sp="header-_-sports-_-running-_-run for the oceans"><span class="">Run For the Oceans</span></a></li><li><a href="/en/ultraboost_22" manual_cm_sp="header-_-sports-_-running-_-ultraboost"><span class="">Ultraboost</span></a></li><li><a href="/en/adizero-running" manual_cm_sp="header-_-sports-_-running-_-adizero"><span class="">Adizero</span></a></li><li><a href="/en/4dfwd?grid=true" manual_cm_sp="header-_-sports-_-running-_-4dfwd"><span class="">4DFWD</span></a></li><li><a href="/en/response-shoes" manual_cm_sp="header-_-sports-_-running-_-response"><span class="">Response</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">OUTDOOR</h6>
                <img src="admin/nav/ca-ss22-outdoor-endplasticwaste-apr20-nav_tcm185-878921.jpg">
                <ul class="list-unstyled">
                  <li><a href="/en/outdoor-shoes" manual_cm_sp="header-_-sports-_-outdoor-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/outdoor-clothing" manual_cm_sp="header-_-sports-_-outdoor-_-clothing"><span class="">Clothing</span></a></li><li class="horizontal-separator"></li><li><a href="/en/outdoor-hiking" manual_cm_sp="header-_-sports-_-outdoor-_-hiking"><span class="">Hiking</span></a></li><li><a href="/en/mountain_biking" manual_cm_sp="header-_-sports-_-outdoor-_-mountain biking"><span class="">Mountain Biking</span></a></li><li><a href="/en/outdoor-trail_running" manual_cm_sp="header-_-sports-_-outdoor-_-trail running"><span class="">Trail Running</span></a></li><li><a href="/en/outdoor-climbing" manual_cm_sp="header-_-sports-_-outdoor-_-climbing"><span class="">Climbing</span></a></li><li><a href="/en/hiking-mountaineering" manual_cm_sp="header-_-sports-_-outdoor-_-mountaineering"><span class="">Mountaineering</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">TRAINING</h6>
                <img src="admin/nav/ca-ss20-sports-training-nav_tcm185-736566.jpg" style="width: 172px; height: 80px; ">
                <ul class="list-unstyled">
                  <li><a href="/en/training-shoes" manual_cm_sp="header-_-sports-_-training-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/training-clothing" manual_cm_sp="header-_-sports-_-training-_-clothing"><span class="">Clothing</span></a></li><li><a href="/en/training-accessories" manual_cm_sp="header-_-sports-_-training-_-accessories"><span class="">Accessories</span></a></li><li class="horizontal-separator"></li><li><a href="/en/cycling" manual_cm_sp="header-_-sports-_-training-_-indoor cycling"><span class="">Indoor Cycling</span></a></li><li><a href="/en/adidas_by_stella_mccartney-training" manual_cm_sp="header-_-sports-_-training-_-adidas by stella mccartney"><span class="">adidas by Stella McCartney</span></a></li><li><a href="/en/training-beginner" manual_cm_sp="header-_-sports-_-training-_-for beginners"><span class="">For Beginners</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">SOCCER</h6>
                <img src="admin/nav/ca-ss22-sports-soccer-apr20-nav_tcm185-878917.jpg">
                <ul class="list-unstyled">
                  <li><a href="/en/soccer-shoes" manual_cm_sp="header-_-sports-_-soccer-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/soccer-clothing" manual_cm_sp="header-_-sports-_-soccer-_-clothing"><span class="">Clothing</span></a></li><li><a href="/en/soccer-accessories" manual_cm_sp="header-_-sports-_-soccer-_-accessories"><span class="">Accessories</span></a></li><li><a href="/en/soccer-jerseys" manual_cm_sp="header-_-sports-_-soccer-_-jerseys"><span class="">Jerseys</span></a></li><li class="horizontal-separator"></li><li><a href="/en/diamond_edge_pack" manual_cm_sp="header-_-sports-_-soccer-_-diamond edge pack"><span class="">Diamond Edge Pack</span></a></li><li><a href="/en/tiro" manual_cm_sp="header-_-sports-_-soccer-_-house of tiro"><span class="">House of Tiro</span></a></li><li><a href="/en/club" manual_cm_sp="header-_-sports-_-soccer-_-international clubs"><span class="">International Clubs</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">BASKETBALL</h6>
                <img src="admin/nav/ca-ss22-sports-basketball-harden-nav_tcm185-889436.jpg">
                <ul class="list-unstyled">
                  <li><a href="/en/basketball-shoes" manual_cm_sp="header-_-sports-_-basketball-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/basketball-clothing" manual_cm_sp="header-_-sports-_-basketball-_-clothing"><span class="">Clothing</span></a></li><li class="horizontal-separator"></li><li><a href="/en/damian_lillard" manual_cm_sp="header-_-sports-_-basketball-_-damian lillard"><span class="">Damian Lillard</span></a></li><li><a href="/en/james_harden" manual_cm_sp="header-_-sports-_-basketball-_-james harden"><span class="">James Harden</span></a></li><li><a href="/en/donovan_mitchell" manual_cm_sp="header-_-sports-_-basketball-_-donovan mitchell"><span class="">Donovan Mitchell</span></a></li><li><a href="/en/trae_young" manual_cm_sp="header-_-sports-_-basketball-_-trae young"><span class="">Trae Young</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <h6 class="title">GOLF</h6>
                <img src="admin/nav/ca-ss21-sports-golf-nav_tcm185-736567.jpg">
                <ul class="list-unstyled">
                  <li><a href="/en/golf-shoes" manual_cm_sp="header-_-sports-_-golf-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/golf-clothing" manual_cm_sp="header-_-sports-_-golf-_-clothing"><span class="">Clothing</span></a></li><li><a href="/en/golf-accessories" manual_cm_sp="header-_-sports-_-golf-_-accessories"><span class="">Accessories</span></a></li><li class="horizontal-separator"></li><li><a href="/en/tour360" manual_cm_sp="header-_-sports-_-golf-_-tour360"><span class="">TOUR360</span></a></li><li><a href="/en/adicross" manual_cm_sp="header-_-sports-_-golf-_-adicross"><span class="">adicross</span></a></li><li><a href="/en/tournament_collection" manual_cm_sp="header-_-sports-_-golf-_-tournament collection"><span class="">Tournament Collection</span></a></li>

                  <br>
                  <h6 class="title">OTHER SPORTS</h6>

                  <li><a href="/en/nhl" manual_cm_sp="header-_-sports-_-other sports-_-hockey"><span class="">Hockey</span></a></li><li><a href="/en/snowboarding" manual_cm_sp="header-_-sports-_-other sports-_-snowboarding"><span class="">Snowboarding</span></a></li><li><a href="/en/yoga" manual_cm_sp="header-_-sports-_-other sports-_-yoga"><span class="">Yoga</span></a></li><li><a href="/en/tennis" manual_cm_sp="header-_-sports-_-other sports-_-tennis"><span class="">Tennis</span></a></li><li><a href="/en/skateboarding" manual_cm_sp="header-_-sports-_-other sports-_-skateboarding"><span class="">Skateboarding</span></a></li><li><a href="/en/swimming" manual_cm_sp="header-_-sports-_-other sports-_-swimming"><span class="">Swimming</span></a></li><li><a href="/en/cycling" manual_cm_sp="header-_-sports-_-other sports-_-cycling"><span class="">Cycling</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>
      <!-- ------ ===========end SPORT Megamenu ==================================----- -->

       <!-- ------ ===========start BRABDS Megamenu ==================================----- -->

<li class="nav-item dropdown has-megamenu">
        <a class="nav-link" href="#" data-bs-toggle="dropdown"> BRANDS</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3 border_pad_extend">
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <img src="admin/nav/ca-original-header-AUG2021-image_tcm185-736677.jpg">
                <br><br>
                <img src="admin/nav/ca-originals-stan-smith-AUG2021-image_tcm185-736678.jpg">
                <ul class="list-unstyled">
                <li><a href="/en/originals-shoes" manual_cm_sp="header-_-brands-_-originals-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/originals-clothing" manual_cm_sp="header-_-brands-_-originals-_-clothing"><span class="">Clothing</span></a></li><li><a href="/en/originals-accessories" manual_cm_sp="header-_-brands-_-originals-_-accessories"><span class="">Accessories</span></a></li><li class="horizontal-separator"></li><li><a href="/en/superstar" manual_cm_sp="header-_-brands-_-originals-_-superstar"><span class="">Superstar</span></a></li><li><a href="/en/forum" manual_cm_sp="header-_-brands-_-originals-_-forum"><span class="">Forum</span></a></li><li><a href="/en/jeremy_scott" manual_cm_sp="header-_-brands-_-originals-_-adidas x jeremy scott"><span class="">adidas x Jeremy Scott</span></a></li><li><a href="/en/yeezy" manual_cm_sp="header-_-brands-_-originals-_-yeezy"><span class="">YEEZY</span></a></li><li><a href="/en/blue_version" manual_cm_sp="header-_-brands-_-originals-_-originals: blue version"><span class="">Originals: Blue Version</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <img src="admin/nav/ca-ivy-park-header-DEC2021-image_tcm185-820830.jpg">

                <br><br>
                <img src="admin/nav/ca-nav-statement-ivypark-may20-ss22-header-image_tcm185-890841.jpg">
                <ul class="list-unstyled">
                  <li><a href="/en/originals-shoes" manual_cm_sp="header-_-brands-_-originals-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/originals-clothing" manual_cm_sp="header-_-brands-_-originals-_-clothing"><span class="">Clothing</span></a></li><li><a href="/en/originals-accessories" manual_cm_sp="header-_-brands-_-originals-_-accessories"><span class="">Accessories</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <img src="admin/nav/ca-stella-header-AUG2021-image_tcm185-736682.jpg">

                <br><br>
                <img src="admin/nav/ca-ss22-asmc-MAR2022-image_tcm185-868003.jpg">
                <ul class="list-unstyled">
                  <li><a href="/en/originals-shoes" manual_cm_sp="header-_-brands-_-originals-_-shoes"><span class="">Shoes</span></a></li><li><a href="/en/originals-clothing" manual_cm_sp="header-_-brands-_-originals-_-clothing"><span class="">Clothing</span></a></li><li><a href="/en/originals-accessories" manual_cm_sp="header-_-brands-_-originals-_-accessories"><span class="">Accessories</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <img src="admin/nav/ca-terrex-five-ten-header-FEB2022-image_tcm185-847287.jpg">

                <br><br>
                <img src="admin/nav/ca-terrex-five-ten-brands-FEB2022-image_tcm185-847286.jpg">
                <ul class="list-unstyled">
                 <li><a href="/en/terrex" manual_cm_sp="header-_-brands-_-terrex-_-terrex"><span class="">TERREX</span></a></li><li><a href="/en/terrex-shoes" manual_cm_sp="header-_-brands-_-terrex-_-terrex shoes"><span class="">TERREX Shoes</span></a></li><li><a href="/en/terrex-clothing" manual_cm_sp="header-_-brands-_-terrex-_-terrex clothing"><span class="">TERREX Clothing</span></a></li><li class="horizontal-separator"></li><li><a href="/en/five_ten" manual_cm_sp="header-_-brands-_-terrex-_-five ten"><span class="">Five Ten</span></a></li><li><a href="/en/five_ten-shoes" manual_cm_sp="header-_-brands-_-terrex-_-five ten shoes"><span class="">Five Ten Shoes</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

            <div class="col-lg-2 col-6">
              <div class="col-megamenu">
                <img src="admin/nav/ca-sportswear-header-AUG2021-image_tcm185-736679.jpg">

                <br><br>
                <img src="admin/nav/ca-sportswear-brands-AUG2021-image_tcm185-736681.jpeg">
                <ul class="list-unstyled">
                  <li><a href="/en/men-sportswear-clothing" manual_cm_sp="header-_-brands-_-sportswear-_-men's clothing"><span class="">Men's Clothing</span></a></li><li><a href="/en/women-sportswear-clothing" manual_cm_sp="header-_-brands-_-sportswear-_-women's clothing"><span class="">Women's Clothing</span></a></li><li class="horizontal-separator"></li><li><a href="/en/sportswear-pants%7Cshorts" manual_cm_sp="header-_-brands-_-sportswear-_-shorts &amp; pants"><span class="">Shorts &amp; Pants</span></a></li><li><a href="/en/sportswear-hoodies%7Csweatshirts" manual_cm_sp="header-_-brands-_-sportswear-_-sweatshirts &amp; hoodies"><span class="">Sweatshirts &amp; Hoodies</span></a></li><li><a href="/en/sportswear-shirts" manual_cm_sp="header-_-brands-_-sportswear-_-shirts"><span class="">Shirts</span></a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->

          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>
        <!-- ------ ===========end BRANDS Megamenu ==================================----- -->

        <li class="nav-item">
        <a class="nav-link" href="#" > WHAT'S NEWS</a>
        </li>
      
<!-- ------ ===========end WHAT'S NEW Megamenu ==================================----- -->
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> 
        <i class="fal fa-user-alt fa-lg"></i> 
      </a></li>


<!-- <link rel="stylesheet" type="text/css" href="https://www.adidas.co.uk/glass/react/d0ca98f/adidas/modern/glass-vendor-adidas.css"> -->
      <style type="text/css" media="screen">
        /*.modal-body h4,h5,p,a,label{
          font-family: "AdineuePRO",Helvetica,Arial,sans-serif;
        }
       */
      </style>



<!--------------- Modal start --------------------------->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      

      <!-- -------------------modal-body start ------------------------ -->
      <div class="modal-body">
        
        
        

        <div class="modal-header">
        <h4 class="modal-title">LOG IN</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <br>

        <p>Get free shipping, discount vouchers and members only products when you’re in CherryClub</p>

        <h5>LOG IN (IT'S FREE)</h5>
        <div class="mb-3">
  <label for="email" class="form-label">Enter your email</label>
  <input type="email" class="form-control" id="email" placeholder="Email *">
</div>

<div class="mb-3">
  <label for="password" class="form-label">Password
  <!--  <i class="fal fa-eye-slash" id="togglePassword" style="margin-left: 300px;">SHOW</i>  -->
   <a href="#" class="text-dark" id="icon-click" style="margin-left: 300px;">
    <i class="far fa-eye-slash" id="icon"></i>
    SHOW
  </a>
  </label>
  <input type="password" class="form-control" id="password" placeholder="Password *">
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Keep me logged in. Applies to each option below. 
    <a href="" title="">More info</a>
  </label>
</div>
<br>
<a href="#" title="" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">SIGN UP Here</a> to create your account<br><br>
<a href="" title="">Forgotten Your Password?</a><br><br>


<div class="d-grid gap-2">
  <button class="btn btn-dark" type="button">LOG IN</button>
</div>

<br>

      </div> 
      <!-- -------------------modal-body end ------------------------ -->
      
    </div>
  </div>
</div>

<script type="text/javascript" src="js/script_eyetoggle.js?v=<?php echo time(); ?>"></script>

<!--------------- Modal end --------------------------->


<!--------------- Modal2 start --------------------------->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      

      <!-- -------------------modal-body start ------------------------ -->
      <div class="modal-body">
        
        
        

        <div class="modal-header">
        <h4 class="modal-title">SIGN UP</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <br>

        <h5>SIGN UP (IT'S FREE)</h5>


          <div class="row">
            <div class="col-6 mb-3">
              <label for="zip" class="form-label">First Name</label>
              <input type="text" class="form-control" id="zip" placeholder="First Name *" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>

            <div class="col-6 mb-3">
              <label for="zip" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="zip" placeholder="Last Name *" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
            </div>
         

        <div class="mb-3">
  <label for="email" class="form-label">Enter your email</label>
  <input type="email" class="form-control" id="email" placeholder="Email *">
</div>

<div class="mb-3">
  <label for="password" class="form-label">Password
   
   <a href="#" class="text-dark" id="icon-click2" style="margin-left: 300px;">
    <i class="far fa-eye-slash" id="icon2"></i>
    SHOW
  </a>
  </label>
  <input type="password" class="form-control" id="password2" placeholder="Password *">
</div>

<script type="text/javascript" src="js/script_eyetoggle2.js?v=<?php echo time(); ?>"></script>

<div class="mb-3">
  <label for="password" class="form-label">Confirm Password
   <a href="#" class="text-dark" id="icon-click3" style="margin-left: 240px;">
    <i class="far fa-eye-slash" id="icon3"></i>
    SHOW
  </a>
  </label>
  <input type="password" class="form-control" id="password3" placeholder="Confirm Password *">
</div>

<script type="text/javascript" src="js/script_eyetoggle3.js?v=<?php echo time(); ?>"></script>


<br>



<div class="d-grid gap-2">
  <button class="btn btn-dark" type="button">SIGN UP</button>
</div>

<br>

      </div> 

      
      <!-- -------------------modal-body end ------------------------ -->
      
    </div>
  </div>
</div>


<!--------------- Modal2 end --------------------------->


      <li class="nav-item active">
        <a class="nav-link" href="wishlist.php"> 
          <i class="far fa-heart fa-lg"></i>
       </a></li>
     
       <!-- ----- For No Item in Bag ---- -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link active" href="#" data-bs-toggle="dropdown"> 
        <i class="fal fa-shopping-bag fa-lg"></i> </a>
          <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#"> 
            <h6 style="font-weight: bold;">YOUR BAG IS EMPTY</h6></a></li>
         
          </ul>
      </li> -->

      <!-- ----- For having Item in Bag ---- -->

      <li class="nav-item active">
        <a class="nav-link" href="cart.php"> 
          <i class="fal fa-shopping-bag fa-lg"></i>
       </a></li>

    </ul>
  </div> <!-- navbar-collapse.// -->
</div> <!-- container-fluid.// -->

</nav>
<!-- ============= COMPONENT END// ============== -->