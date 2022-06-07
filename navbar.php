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
  <a class="navbar-brand" href="#"><img src="admin/image/cherry-logo-black2.jpg" style=" height: 28px;"><b>SHOP</b></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
    <ul class="navbar-nav">
      <li></li>
   

      <!-- ------ start 1st mega menu ----- -->
      <li class="nav-item dropdown has-megamenu">
        <a class="nav-link active" href="#" data-bs-toggle="dropdown"> MEN</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3">
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu One</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Two</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Three</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Four</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>

      <!-- ------ end 1st mega menu ----- -->
      <!-- ------ start 2nd mega menu ----- -->
<li class="nav-item dropdown has-megamenu">
        <a class="nav-link active" href="#" data-bs-toggle="dropdown"> WOMEN</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3">
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu One</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Two</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Three</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Four</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>
      
      <!-- ------ end 2nd mega menu ----- -->
      <!-- ------ start 3rd mega menu ----- -->

      <li class="nav-item dropdown has-megamenu">
        <a class="nav-link active" href="#" data-bs-toggle="dropdown"> KIDS</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3">
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu One</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Two</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Three</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Four</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>
      <!-- ------ end 3rd mega menu ----- -->


       <!-- ------ ===========start SPORT Megamenu ==================================----- -->

      <li class="nav-item dropdown has-megamenu">
        <a class="nav-link" href="#" data-bs-toggle="dropdown"> SPORTS</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3">
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu One</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Two</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Three</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Four</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
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
          <div class="row g-3">
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu One</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Two</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Three</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Four</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>
        <!-- ------ ===========end BRANDS Megamenu ==================================----- -->

        <li class="nav-item dropdown has-megamenu">
        <a class="nav-link" href="#" data-bs-toggle="dropdown"> WHAT'S NEWS</a>
        <div class="dropdown-menu fade-down megamenu " role="menu">
          <div class="row g-3">
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu One</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Two</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Three</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>    
            <div class="col-lg-3 col-6">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Four</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
          </div><!-- end row --> 
        </div> <!-- dropdown-mega-menu.// -->
      </li>
<!-- ------ ===========end WHAT'S NEW Megamenu ==================================----- -->
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" data-bs-toggle="dropdown"> 
        Cart </a>
          <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
          <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
          </ul>
      </li>
    </ul>
  </div> <!-- navbar-collapse.// -->
</div> <!-- container-fluid.// -->
</nav>
<!-- ============= COMPONENT END// ============== -->