<?php
  error_reporting(0);
	session_start();
	include('confs/config.php');
  include('header2.php');
  include('navbar.php');

  $s = $_GET['s'];

?>
<!-- font -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> 
<!-- <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script> -->
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="loginscript2.js"></script>
<!--  ==================login form ======================== -->

<?php if($s == '3rdf49ak'){ ?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- <script type="text/javascript" src="https://adminlte.io/themes/dev/AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script> -->
             <script type="text/javascript">
            
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Successfully Register',
              showConfirmButton: false,
              timer: 1800
            })            
          </script>
<?php } ?>

<style type="text/css">
      .spring-btn-black{
            clear:both; background: #000; border: none; color: #fff; font-size: 1em; padding: 10px; cursor: pointer; font-size: 17px; text-decoration: none;
      }
      
    a:hover{
        color: #fff;
        font-weight: bold;
      }
      h1{
        font-weight: bold;
        margin-bottom: 2rem;
      }
      .container{
        color: #000;
      }
      ul li {
        list-style: none;
        margin: 0.5rem;
      }

      #spring_col1{
        color: #000;
      }
      #spring_col1 a{
        color: #000;
        text-decoration: underline;
      }

      #spring_col1 a:hover{
        color: #fff;
        background-color: #000;

      }
      
      html, body{
    height: 100%;
    font-family: 'Lato', sans-serif;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Abel', sans-serif;
}
  .btn-outline-dark{
    border-radius: 0;
    text-decoration: none !important;
    
  }
  .btn-outline-dark:hover{
    background: white;
    color: black;
    cursor: pointer;
  }

  .error{
    color: red;
    padding: 0px;
    margin-top: 5px;
    font-size: 16px;
  }
  .btn-link{
    color: black;

  }
  .btn-link:hover{
    background: white;
    color: black;
    cursor: pointer;
    
  }
  </style>


<br><br>
 <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <section id="spring_col1">
                <h1>LOG IN</h1>
                    
                <a href="">Forgot Your Password?</a>
                
                <!-- /login?error=true -->

           

          <form class="form-horizontal" method="post"  id="login-form">
            
            
            <div id="error">
        <!-- error will be shown here ! -->
        </div>


                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" >
                    <span id="check-e"></span>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"  class="form-control">
                  </div>


                
                 <div class="form-group form-check mt2">
                    <input type="checkbox" class="form-check-input" > 
                    <label class="form-check-label" for="exampleCheck1">Keep me logged in. Applies to each option below. <a href="" title="">More info</a> </label>
                  </div>
               

               <div class="d-grid gap-2 mt2">
                  <button type="submit" name="btn-login" id="btn-login" class="spring-btn-black">LOG IN <span class="fal fa-long-arrow-right" style="margin-left: 9px;"></span></button>
               </div>
              </form>

              <br>

               <div class="row mt3">
                 <div class="col-lg-6">
                   <div class="d-grid gap-2">
                         <a href="https://www.facebook.com/" class="btn btn-outline-dark">FACEBOOK <img src="https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512"  height="25"></a>
                   </div>
                 </div>
                 <div class="col-lg-6">
                   <div class="d-grid gap-2">
                        <a href="https://myaccount.google.com/" class="btn btn-outline-dark">GOOGLE <img src="https://img.icons8.com/color/480/google-logo.png"  height="25"></a>
                   </div>
                 </div>
               </div><!--  row end -->

               <span class="error-message"></span>
                
                <br><br>
                
                 Not account ?<!-- <a href="ajax-registration-script-with-php-mysql-and-jquery/index.php">Register Here!</a> -->
                 <button type="button" class="btn btn-link" data-toggle="modal" data-target="#registerModal">
                  Register Here!
                </button>
                
                <br><br>

                I have read and accepted adiClub <a href=""> Terms & Conditions </a>and the <a href="">cherryshop Privacy Notice </a>

                

               <!--  ----------- form end -------------- -->
               <!-- registerModal modal -->


<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- ----------modal-body start ------- -->
      <div class="modal-body">
        <img src="image/e.jpg" width="150" style="margin-left: 100px">
        <h2 style="text-align: center"> Eaindra STORE</h2>
        <script src="ajax-registration-script-with-php-mysql-and-jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="ajax-registration-script-with-php-mysql-and-jquery/script/validation.min.js"></script>
<script type="text/javascript" src="register_modal5.js"></script>
         <form class="form-signin" method="post" id="register-form">
  
      <div id="error">
        <!-- error will be shown here ! -->
        </div>

        <div class="form-group">
                
                <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name">
              </div>

              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email">
              </div>

              <div class="form-group">
                 <input type="password" class="form-control" placeholder="Password" name="password" id="password2">
              </div>

              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" id="cpassword"> 
                   
              </div>
              
              <button type="submit" class="spring-btn-black " name="btn-save" id="btn-submit">REGISTER <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></button>
            </form>

             
               <br>
            <p style="text-align: center; color: grey;">
                Already a member?
                <a href="login.php" style="color: black; text-decoration: underline;">Sign in.</a>
            </p>
      </div>
      <!-- ----------modal-body end ------- -->
      <div class="modal-footer">
    
      </div>
    </div>
  </div>
</div>

    <!-- registerModal modal end-->


               </section>
               <br>

              

                

               

             

                
          
          
           
            </div>
            
            <div class="col-lg-6 col-sm-4 col-xs-12">
                
                <h1>JOIN CHERRYCLUB. GET REWARDED TODAY.</h1>
                    As an cherryClub member you get rewarded with what you love for doing what you love. Sign up today and receive immediate access to these Level 1 benefits: 
                  <ul >
                    



                      <li ><i class="fal fa-check"></i>  Free delivery </li>
                      <li ><i class="fal fa-check"></i>  A 20% off voucher for your next purchase </li>
                      <li ><i class="fal fa-check"></i>  Access to Members Only products and sales 
</li>
                      <li ><i class="fal fa-check"></i>  Access to adidas Running and Training apps </li>
                      <li ><i class="fal fa-check"></i>  Special offers and promotions</li>
                     
                    </ul>  

                    Join now to start earning points, reach new levels and unlock more rewards and benefits from adiClub. <br><br>

Want to learn more about adiClub? Read more about the free membership.
                    <br><br>
                <a href=""  class="spring-btn-black" />JOIN THE CLUB <span class="fal fa-long-arrow-right" style="margin-left: 9px;"></span></a>

                <br><br>

                <img src="https://www.adidas.co.uk/glass/react/21db37d/assets/img/adiClub-account-register.jpeg" height="200px">

            
                
            </div>
        </div>
    </div>
        

        <!-- ------------------------------Login page end---------------------------------- -->
      
    <br><br>


           
     
       
            
    

  <br><br>     
<?php include('footer2.php'); ?>

</body>
</html>

  
 
