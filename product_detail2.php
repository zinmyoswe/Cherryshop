<?php
  session_start();
  include('confs/config.php');
  // include('function/function.php');
  include('header2.php');
  include('navbar.php');
?>
<style type="text/css" media="screen">
	.coco{
	margin: 0px 10px 0px;
	font-weight: bold;
}
	/*FOR Mobile VERs*/
@media (min-width: 360px){
.product_detail2{
	overflow: hidden;
    height: 100%;
    background-color: #edeff0;
    position: relative;
    text-align: center;
}
.product_detail2_img {
    max-width: 100%;
    height: 570px !important;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}
}

/*FOR DESKTOP VERs*/
@media (min-width: 960px){

.product_detail2{
	overflow: hidden;
    height: 100%;
    background-color: #edeff0;
    position: relative;
    text-align: center;
}
.product_detail2_img {
    max-width: 100%;
    height: 570px !important;

}

.product_detail3_img {
    max-width: 100%;
    height: 570px !important;
    border-right: 2px solid white;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

}

/*FOR Tablet VERs*/
@media (min-width: 760px) and (max-width: 900px){
.product_detail2{
	overflow: hidden;
    height: 100%;
    background-color: #edeff0;
    position: relative;
    text-align: center;
}
.product_detail2_img {
    max-width: 100%;
    height: 500px !important;
}

.product_detail3_img {
    max-width: 100%;
    height: 460px !important;
    border-right: 2px solid white;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

}
</style>

<div class="">
    <div class="row g-5">
      <div class="col-md-8 col-sm-12">
      	<div class="product_detail2">
      	<img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/75bbe008841a415baafaac800132f52a_9366/Essentials_French_Terry_3-Stripes_Full-Zip_Hoodie_Blue_GK9033_21_model.jpg" class="product_detail2_img">

      	<div class="top-left mt2">
      		<i class="fal fa-long-arrow-left"></i> <a href="product.php" class="coco">BACK</a> 
   		<a href="product.php">Home</a> / <a href="product.php">Mens</a> / Clothing
      	</div>

      	<div class="row" style="border-top: 2px solid white;">
      		<div class="col-md-6">
      			<img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/11c131e25e09441390b4ac8001330aa7_9366/Essentials_French_Terry_3-Stripes_Full-Zip_Hoodie_Blue_GK9033_23_hover_model.jpg" class="product_detail3_img">
      		</div>
      		<div class="col-md-6">
      			
      	<img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/11f182bbc87e418889d0ac8001331f41_9366/Essentials_French_Terry_3-Stripes_Full-Zip_Hoodie_Blue_GK9033_25_model.jpg" class="product_detail3_img">
      		</div>
      	</div><!--  row end  -->

      	<div class="row" style="border-top: 2px solid white;">
      		<div class="col-md-6">
      			<img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/840427e45727402e936eac800133bde3_9366/Essentials_French_Terry_3-Stripes_Full-Zip_Hoodie_Blue_GK9033_01_laydown.jpg" class="product_detail3_img">
      		</div>
      		<div class="col-md-6">
      			
      	<img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/499939891d254670881cac8001335837_9366/Essentials_French_Terry_3-Stripes_Full-Zip_Hoodie_Blue_GK9033_41_detail.jpg" class="product_detail3_img">
      		</div>
      	</div><!--  row end  -->

      	 		<a href="" title="" class="btn btn-dark">SHOW MORE  <i class="fal fa-chevron-down" style="margin-left: 9px;"></i></a>
      	</div> <!-- product_detail2 end -->

      	

   

      </div> <!-- col-md-8 col-sm-12 end -->

      <div class="col-md-4 col-sm-12 ">
      		<?php include('product_detail_sidebar.php'); ?>
      </div>
    </div> <!-- row end -->
</div>

<br>

<?php include('footer3.php'); ?>

</body>
</html>