<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <link rel="icon" type="image/jpg" href="admin/image/cherry-logo-black2.jpg" style="width: 25px; height: 10px;" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- Google Font -->

        <link href="https://fonts.googleapis.com/css?family=Abel|Lato|Open+Sans&display=swap" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

        <!-- Addias font -->
        <link rel="stylesheet" type="text/css" href="https://www.adidas.com.sg/glass/react/d62275f/assets/fonts/AdihausDIN-CnBoldItalic.woff2">
        <link rel="stylesheet" type="text/css" href="https://www.adidas.com.sg/glass/react/d62275f/assets/fonts/yeezy_tstar-regular-webfont.woff2">
    
        <!-- Fontawesome Pro font -->
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">

       <link rel="stylesheet" type="text/css" href="css/cherryp.css?v=<?php echo time(); ?>">

        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     

<!--  ------------------Bootstrap js @5.2.0 latest------------------ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>

</head>
<body>
  <style type="text/css">



  
    .label-warning {
    background-color: #FFC107;
    color : black;
}
/*search engine*/
.navbar-form .input-group > .form-control {
    width: 460px;
}

.btn-danger {
    color: #FFF;
    background-color: #DC3545;
    border-color: #DC3545;
}
.btn-info {
    color: #FFF;
    background-color: #17A2B8;
    border-color: #17A2B8;
}
 /*Prdouct Style */
#title{
    font-family: 'Times New Roman', Times, serif;
    
    color: #273746;
    font-size: 20px;
}

.display{
    width: 300px;
    height: 450px;
    cursor: pointer;
    background-color: #fff;
}


.box{
  width: 230px;
  height: 150px;

}



.display p strong{
    color: #2e405e;
    font-size: 12px;
}
.display p strong i a{
    color: #7f8c8d;
    font-size: 12px;

}
/*sidebar*/
.cats {
  list-style: none;
  padding: 0;
}

.cats li b a {
  display: block;
  font-size: 14px;
  padding: 8px 15px;
  color: black;
  
}

.cats li a {
  display: block;
  font-size: 14px;
  padding: 8px 15px;
  color: grey;
}

.cats li a:hover {
  
  color: #007BFF;
  


}

.btn-dark {
    color: #fff;
    background-color: #000 !important;
    border-color: #000;
}
.btn-dark:hover{
  color: #fff;
  background-color: #000;
}

.btn-outline-dark {
    color: #000;
    background-color: transparent;
    background-image: none;
    border-color: #000;
}

.btn-outline-dark:hover{
    color: #fff;
    background-color: #000;
    
    border-color: #000;
}

a .gl-cta--tertiary:hover{
  background-color: black;
  color: white;

}

html,body{
  font-family: 'Lato', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Abel', sans-serif;
}



  </style>

    <!-- ----- For Addias Font ----  -->
 <!--  <link rel="stylesheet" type="text/css" href="https://www.adidas.co.uk/glass/react/d0ca98f/adidas/modern/glass-vendor-adidas.css"> -->
      <style type="text/css" media="screen">
        /*html,body{
          font-family: "AdineuePRO",Helvetica,Arial,sans-serif;
        }*/
       
      </style>

      <!-- ----- For Addias Font  end----  -->