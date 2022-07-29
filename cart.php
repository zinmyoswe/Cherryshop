<?php
  session_start();
  include('confs/config.php');
  // include('function/function.php');
  include('header2.php');
  include('navbar.php');
?>
<style type="text/css" media="screen">
a:hover{
 color: black;
}

.cart_icon2>i:hover{
  color: grey;
}

.mt2{
  margin-top: 15px;
}

.table{

  background-color: #fff;
  border-color: #fff;
}


.btn-outline-dark:hover{
  background-color: whitesmoke;
}
  /*FOR Mobile VERs*/

@media (min-width: 360px){
.cart_img2>img {
    max-width: 100%;
    height: 175px !important;
}
.cart_product_title>a{
   text-decoration: none;
   font-weight: 500;
}

.cartbase2{
  display: none;
  
}

}

/*FOR DESKTOP VERs*/
@media (min-width: 960px){
.cart_img2>img {
    max-width: 100%;
    height: 195px !important;
}
.cart_product_title>a{
   text-decoration: none;
   font-weight: 500;
}
.cartbase2{
  display: block;
}

}

/*FOR Tablet VERs*/
@media (min-width: 760px) and (max-width: 900px){
.cart_img2>img {
    max-width: 100%;
    height: 185px !important;
}
.cart_product_title>a{
   text-decoration: none;
   font-weight: 500;
}
.cartbase2{
  display: block;
}

}
</style>

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
	<link rel="stylesheet" href="imagehover.css-master/css/imagehover.min.css">

	<!-- Addias font -->
    <link rel="stylesheet" type="text/css" href="https://www.adidas.com.sg/glass/react/d62275f/assets/fonts/AdihausDIN-CnBoldItalic.woff2">
    <link rel="stylesheet" type="text/css" href="https://www.adidas.com.sg/glass/react/d62275f/assets/fonts/yeezy_tstar-regular-webfont.woff2">


<br>
<div class="container" style="max-width: 1280px;">
  
   

    <div class="row g-5">

      <div class="col-md-8 col-sm-12">
        <h3>YOUR BAG</h3>
        <p>TOTAL (2 items) <b>$153</b></p>

        <p>Items in your bag are not reserved — check out now to make them yours.</p>

        <div class="row mt2">
          <div class="col-4">
            <a href="" class="cart_img2">
              <img src="https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/75bbe008841a415baafaac800132f52a_9366/GK9033_230_GK9033_21_model.jpg.jpg?sh=364&strip=false&sw=364" >
            </a>
          </div>
          <div class="col-5">
            <p class="cart_product_title"><a href="" >ESSENTIALS FRENCH TERRY 3-STRIPES FULL-ZIP HOODIE</a>
            </p>
          <p class="cart_product_title2">LEGEND INK / WHITE <br>
          SIZE: S </p>

          <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 80px; height: 50px; border-radius: 0px; font-weight: bold;">
          <option selected value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
          </div>
          <div class="col-2">$50.00</div>
          <div class="col-1 cart_icon2">
              <i class="fal fa-times fa-lg" style=""></i><br><br>
              <i class="fal fa-heart " style=""></i>
              
          </div>
        </div><!-- each cart item row 1 end -->
        <hr>

        <div class="row mt2">
          <div class="col-4">
            <a href="" class="cart_img2">
              <img src="https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/03bb272c51d748f59e8eacbb0121bdb7_9366/GK8823_230_GK8823_21_model.jpg.jpg?sh=364&strip=false&sw=364" >

            </a>
          </div>
          <div class="col-5">
            <p class="cart_product_title"><a href="" >ESSENTIALS FLEECE TAPERED CUFF 3-STRIPES JOGGERS</a>
            </p>
          <p class="cart_product_title2">LEGEND INK / WHITE <br>
          SIZE: S </p>

          <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 80px; height: 50px; border-radius: 0px; font-weight: bold;">
          <option selected value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>

          </div>
          <div class="col-2">$38.00</div>
          <div class="col-1 cart_icon2">
              <i class="fal fa-times fa-lg" style=""></i><br><br>
              <i class="fal fa-heart " style=""></i>
              
          </div>
        </div><!-- each cart item row 1 end -->
        <hr>

        <br>
        <div class="row cartbase2">
          <div class="col-6">
            <div class="d-grid gap-2">
                  <a href="checkout.php" class="btn btn-dark">Checkout 
                    <i class="fal fa-long-arrow-right" style="margin-left: 20px;"></i></a>
            </div>
          </div>
          <div class="col-1"></div>
          
          <div class="col-5">
            
            
          </div>
        </div>
      
    <!--   ------------------Cart Left Sidebar end ------------------- -->
      
      </div> <!-- col-md-7 col-lg-8 end -->
      <div class="col-md-4 col-sm-12">
        <div class="cart_sidebar">
                <br>
                <div class="d-grid gap-2">
                  <a href="checkout.php" class="btn btn-dark">Checkout 
                    <i class="fal fa-long-arrow-right" style="margin-left: 20px;"></i></a>

                    <p class="text-center " style="margin-top: 3px;"> OR</p>
                  <a href="checkout.php" class="btn btn-outline-dark" >
                    <img src="https://www.adidas.co.uk/static/checkout/react/38b9fb6/assets/img/img-paypal-logo.svg">

                  </a>
                </div> <!-- d-grid gap-2 end -->
                
                <p class="text-center" style="padding: 7px;"><!-- By placing your order, you agree to <br>the Delivery Terms --></p>

                
                <div class="cart-calculator border border-1">
                  <h5 style="font-weight: bold; margin-left: 9px; margin-top: 13px;">ORDER SUMMARY</h5>
                    <table class="table">
                      <tr>
                        <td>2 ITEMS</td>
                        <td>$88.00</td>
                      </tr>
                      
                      <tr>
                        <td>DELIVERY</td>
                        <td>FREE</td>
                      </tr>

                      <tr>
                        <td><strong>TOTAL</strong><br>
                          (inclusive of tax  $14.66)
                        </td>
                        <td><strong>$88.00</strong></td>
                      </tr>
                
                    </table>
                </div>
            </div> <!-- {{-- cart_sidebar end --}} -->


            <!-- {{--    Coupon start --}} -->
   <div class="coupon_fr mt3" >

    <div class="coupon_in">
       
                <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Use a Promo Code
              </a>


                
        
    <div class="collapse" id="collapseExample">
     
      <div class="card card-body">
        <form method="post" action="">
            
            <input type="text" name="coupon_code" class="form-control" placeholder="Enter your Promo Code">
            <br>
            

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark">Apply <i class="fal fa-long-arrow-right" style="margin-left: 20px;"></i></button>
            </div>
        </form>
      </div>
    </div>
  
</div>
</div>

  <!--   {{--   ---------- Coupon end --------------------------------}} -->

            <br><br><br>

            <h6 class="mt2">ACCEPTED PAYMENT METHODS</h6>

            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enGB/Images/visa-master-amex-klarna-pp-ap-gc_tcm143-806097.png" style="height: 25px; width: 100%; ">

      </div><!--  col-md-5 col-lg-4 order-md-last end -->

          <!--   ------------------Cart Right Sidebar end ------------------- -->
      
    </div> <!-- row g-5 -->
  </div> <!-- container end -->

<br>

<?php include('footer3.php'); ?>

</body>
</html>
    