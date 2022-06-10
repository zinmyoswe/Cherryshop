<?php
  session_start();
  include('confs/config.php');
  // include('function/function.php');
  include('header.php');
  include('navbar.php');
?>
	<hr>
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
</style>
	
	
	<br>
   <div class="container " style="max-width: 1280px;">

   		<i class="fal fa-long-arrow-left"></i> <a href="product.php" class="coco">BACK</a> /
   		<a href="product.php">Home</a> / <a href="product.php">Mens</a> / Shoes

   		<div class="header-wrapper___3fLbE">
   			<div>
   				<h1 class="heading___1_p74" data-auto-id="plp-header-bar-breadcrumb"><span>MEN'S SHOES &amp; SNEAKERS</span><div class="count___1ZIhY" data-auto-id="plp-header-bar-products-count">[610]
   			</div></h1>
   				&nbsp;
   			
   		</div>
   	</div>

   	<div class="row">
   		<div class="col-6 col-sm-2">
   			<a href="" title="">
   			<img src="admin/catbar_image/IWP_Desktop_Boost_tcm185-562216.jpg" class="bbimg">

   			<div class="details___1objn gl-body--s">
   			<span class="gl-cta gl-cta--tertiary product-name___1Q86U">BOOST</span><p></p>

   			</div>
   		</a>
   		</div> <!-- col-lg-2 end -->

   		<div class="col-6 col-sm-2">
   			<a href="" title="">
   			<img src="admin/catbar_image/IWP_Desktop_Originals_tcm185-562218.jpg" class="bbimg">

   			<div class="details___1objn gl-body--s">
   			<span class="gl-cta gl-cta--tertiary product-name___1Q86U"><span class="gl-cta gl-cta--tertiary product-name___1Q86U">ORIGINALS SNEAKERS</span></span><p></p>

   			</div>
   		</a>
   		</div> <!-- col-lg-2 end -->

   		<div class="col-6 col-sm-2">
   			<a href="" title="">
   			<img src="admin/catbar_image/IWP_Desktop_Running_tcm185-562221.jpg" class="bbimg">

   			<div class="details___1objn gl-body--s">
   			<span class="gl-cta gl-cta--tertiary product-name___1Q86U">RUNNING SHOES</span><p></p>

   			</div>
   		</a>
   		</div> <!-- col-lg-2 end -->

   		<div class="col-6 col-sm-2">
   			<a href="" title="">
   			<img src="admin/catbar_image/IWP_Desktop_Slide_tcm185-562224.jpg" class="bbimg">

   			<div class="details___1objn gl-body--s">
   			<span class="gl-cta gl-cta--tertiary product-name___1Q86U">SLIDES</span><p></p>

   			
   		</div>
   		</a>
   		</div> <!-- col-lg-2 end -->

   		



   		
   	</div>

   	<!--  ----------------- Category nav Image end --------------------- -->

   	<hr>

	<div class="row">
		<div class="col-6 col-sm-3 col-xs-4">

			<figure class="imghvr-fade">
  <img src="admin/product/ezgif-2-192caf6fdb.jpg" style=" background-color: yellow" class="product__image_cherry">
  <div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="   color: #fff;">$180 </span></p>
          </div>
        </div>

  <figcaption>
    <a href="product_detail.php" title=""><img src="admin/product_sub_image/dc1564178d9f40fabfd4ad6a00f93dbb_9366.jpg" class="product__image_cherry">
    	<div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="    color: #fff;">$180 </span></p>
          </div>
        </div>
    </a>
  </figcaption>
</figure>

<div class="glass-product-card__details">
	<p class="gl-paragraph gl-paragraph--s glass-product-card__title" data-auto-id="product-card-title"><a href="product_detail.php" title="">Ultraboost 22 Shoes </a></p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__category" data-auto-id="product-card-category" style="color: #767677;">Running</p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__label"><span class="dark-grey___2ufTt" data-auto-id="product-card-colvar-count">13 colours</span></p>
</div>
		</div><!-- col-sm-3 end -->

		<div class="col-6 col-sm-3 col-xs-4">

			<figure class="imghvr-fade">
  <img src="admin/product/ezgif-2-8f1830fafd.jpg" style=" background-color: yellow" class="product__image_cherry">
  <div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="   color: #fff;">$180 </span></p>
          </div>
        </div>

  <figcaption>
    <a href="product_detail.php" title=""><img src="admin/product_sub_image/3b5669406ee245048015aa7600ff320a_9366.jpg" class="product__image_cherry">
    	<div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="    color: #fff;">$180 </span></p>
          </div>
        </div>
    </a>
  </figcaption>
</figure>

<div class="glass-product-card__details">
	<p class="gl-paragraph gl-paragraph--s glass-product-card__title" data-auto-id="product-card-title"><a href="product_detail.php" title="">Ultraboost 22 Shoes </a></p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__category" data-auto-id="product-card-category" style="color: #767677;">Running</p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__label"><span class="dark-grey___2ufTt" data-auto-id="product-card-colvar-count">13 colours</span></p>
</div>
		</div><!-- col-sm-3 end -->

		<div class="col-6 col-sm-3 col-xs-4">

			<figure class="imghvr-fade">
  <img src="admin/product/ezgif-2-49dacf8ee8.jpg" style=" background-color: yellow" class="product__image_cherry">
  <div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="   color: #fff;">$180 </span></p>
          </div>
        </div>

  <figcaption>
    <a href="product_detail.php" title=""><img src="admin/product_sub_image/c77bb03f9b9a4099a4ecadfb008cfe0c_9366.jpg" class="product__image_cherry">
    	<div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="    color: #fff;">$180 </span></p>
          </div>
        </div>
    </a>
  </figcaption>
</figure>

<div class="glass-product-card__details">
	<p class="gl-paragraph gl-paragraph--s glass-product-card__title" data-auto-id="product-card-title"><a href="product_detail.php" title="">Ultraboost 22 Shoes </a></p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__category" data-auto-id="product-card-category" style="color: #767677;">Running</p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__label"><span class="dark-grey___2ufTt" data-auto-id="product-card-colvar-count">13 colours</span></p>
</div>
		</div><!-- col-sm-3 end -->

		<div class="col-6 col-sm-3 col-xs-4">

			<figure class="imghvr-fade">
  <img src="admin/product/ezgif-2-07816c76ae.jpg" style=" background-color: yellow" class="product__image_cherry">
  <div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="   color: #fff;">$180 </span></p>
          </div>
        </div>

  <figcaption>
    <a href="product_detail.php" title=""><img src="admin/product_sub_image/2616d6bb7578495395cfadee0146ad85_9366.jpg" class="product__image_cherry">
    	<div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="    color: #fff;">$180 </span></p>
          </div>
        </div>
    </a>
  </figcaption>
</figure>

<div class="glass-product-card__details">
	<p class="gl-paragraph gl-paragraph--s glass-product-card__title" data-auto-id="product-card-title"><a href="product_detail.php" title="">Ultraboost 22 Shoes </a></p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__category" data-auto-id="product-card-category" style="color: #767677;">Running</p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__label"><span class="dark-grey___2ufTt" data-auto-id="product-card-colvar-count">13 colours</span></p>
</div>
		</div><!-- col-sm-3 end -->

		<div class="col-6 col-sm-3 col-xs-4">

			<figure class="imghvr-fade">
  <img src="admin/product/ezgif-2-0b4c5fed11.jpg" style=" background-color: yellow" class="product__image_cherry">
  <div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="   color: #fff;">$180 </span></p>
          </div>
        </div>

  <figcaption>
    <a href="product_detail.php" title=""><img src="admin/product_sub_image/f161488469464ddc9e16ad0800cb508f_9366.jpg" class="product__image_cherry">
    	<div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="    color: #fff;">$180 </span></p>
          </div>
        </div>
    </a>
  </figcaption>
</figure>

<div class="glass-product-card__details">
	<p class="gl-paragraph gl-paragraph--s glass-product-card__title" data-auto-id="product-card-title"><a href="product_detail.php" title="">Ultraboost 22 Shoes </a></p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__category" data-auto-id="product-card-category" style="color: #767677;">Running</p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__label"><span class="dark-grey___2ufTt" data-auto-id="product-card-colvar-count">13 colours</span></p>
</div>
		</div><!-- col-sm-3 end -->


		<div class="col-6 col-sm-3 col-xs-4">

			<figure class="imghvr-fade">
  <img src="admin/product/ezgif-2-72c165529b.jpg" style=" background-color: yellow" class="product__image_cherry">
  <div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="   color: #fff;">$180 </span></p>
          </div>
        </div>

  <figcaption>
    <a href="product_detail.php" title=""><img src="admin/product_sub_image/dc1564178d9f40fabfd4ad6a00f93dbb_9366.jpg" class="product__image_cherry">
    	<div class="container">
          <div class="carousel-caption">

            <p class="text-start" style=" margin-bottom: -40px;"><span class="badge bg-light text-dark"  style="    color: #fff;">$180 </span></p>
          </div>
        </div>
    </a>
  </figcaption>
</figure>

<div class="glass-product-card__details">
	<p class="gl-paragraph gl-paragraph--s glass-product-card__title" data-auto-id="product-card-title"><a href="product_detail.php" title="">Ultraboost 22 Shoes </a></p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__category" data-auto-id="product-card-category" style="color: #767677;">Running</p>
	<p class="gl-paragraph gl-paragraph--s glass-product-card__label"><span class="dark-grey___2ufTt" data-auto-id="product-card-colvar-count">13 colours</span></p>
</div>
		</div><!-- col-sm-3 end -->
	</div>
</div>


