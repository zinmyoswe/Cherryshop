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
    <h2>DELIVERY ADDRESS</h2>
    <p class="lead">Free Shipping and Free Returns</p>

    <hr>

    <div class="row g-5">
      
      <div class="col-md-7 col-lg-8">
       
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Please enter your first name.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Please enter your last name.
              </div>
            </div>

            

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="Email *">
              <div class="invalid-feedback">
                Please check your email address is correct.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label for="countries" class="form-label">Country</label>
              <select class="form-select" id="countries" name="countries" required>
                
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <script type="text/javascript" src="js/country.js?v=<?php echo time(); ?>"></script>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">


          <button class="w-100 btn btn-dark btn-lg" type="submit">Continue to checkout</button>
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