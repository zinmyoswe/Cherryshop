<?php
  session_start();
  include('confs/config.php');
  // include('function/function.php');
  include('header2.php');
  include('navbar.php');
?>

<div class="container">
  <main>
    
    <br><br>
    <h2>PAYMENT METHOD</h2>
 <!--    <p class="lead">Free Shipping and Free Returns</p> -->

    <hr>

    <div class="row g-5">
      
      <div class="col-md-7 col-lg-8">
       
        <form class="needs-validation mt3" novalidate>
          <div class="row g-3">
            
          </div>

          <div class="row gy-3 ">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-dark btn-lg" type="submit">REVIEW & PAY</button>
        </form>
      </div><!--  col-md-5 col-lg-4 end  -->

 <!--     --------------------- checkout_sidebar start ----------------- -->
      <div class="col-md-5 col-lg-4">
        
      		<?php include('checkout_sidebar.php'); ?>
       

      
      </div><!--  col-md-5 col-lg-4 end -->

 <!--     --------------------- checkout_sidebar end ----------------- -->
    </div>
  </main>


</div>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

      <script src="js/form-validation.js?v=<?php echo time(); ?>"></script>

<br>

<?php include('footer3.php'); ?>

</body>
</html>