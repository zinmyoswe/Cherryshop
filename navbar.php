<?php 
error_reporting(0); 
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
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
  .navbar .nav-item:hover .nav-link{ color: #fff;  }
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
    text-decoration: none;
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
      <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
      <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
      <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
      <li class="nav-item dropdown has-megamenu">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Mega menu  </a>
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
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
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