<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ONLINE HOUSE HELP MANAGEMENT SYSTEM &mdash; Our Team</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="ONLINE HOUSE HELP MANAGEMENT SYSTEM">
		<meta name="keywords" content="">
		    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/backToTop.css">
    <link rel="stylesheet" href="css/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->	</head>
	<body>
   <!--Top Menu Bar-->
    <section id="quick-menu">
     <div class="row">  
     <div class="col c4">
      <div class="menu-quick-contacts-container">
        <ul id="menu-quick-contacts" class="menu">
          <li id="menu-item-163" class="Mail menu-item menu-item-type-custom menu-item-object-custom menu-item-163">
            <a href="mailto:info@rotaryclubofkirinyaga.org"><i class="fa fa-envelope-o"></i>info@onlinehousehelpmanagement.net </a><span> | </span>
          </li>
        <li id="menu-item-164" class="Tel menu-item menu-item-type-custom menu-item-object-custom menu-item-164">
        <a href="tel:+254701077552"><i class="fa fa-phone"></i>+254 701077552</a>
     </li>
   </ul>
</div>              
       <div class="col c5 Omega">
        <div class="menu-top-bar-menu-container">
          <ul id="menu-top-bar-menu" class="menu">
          <li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268">
          <a href="login.php">Log in<span>|</span></a>
          </li>
          <li id="menu-item-301" class="CTA Last menu-item menu-item-type-post_type menu-item-object-page menu-item-301">
          <a href="admin.php">Admin </a>
      </li>
    </ul>
   </div>
  </div>
 </div>
</div>
</section>  
		    <!-- Fixed navbar -->
    <nav class="navbar navbar-default probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.htm" title="ONLINE HOUSE HELP MANAGEMENT SYSTEM">
            <!-- Mobile logo -->
            <img class="logo visible-xs" src="img/logo_dark.png" style="max-height: 45px; top: -22px;" alt="The Downtown Rotary Club of Houston">
            <!-- Tablet & up logo -->
           <!-- <img class="logo visible-lg visible-md visible-sm" src="img/logo_black.png" alt="The Downtown Rotary Club of Houston">
          </a>-->
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="index.php">HOME</a>
            </li>
            <li>
              <a href="about.php.html">ABOUT US</a>
            </li>
             <li>
              <a href="contact.php.html">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>		    
<!--
    <section id="hero" class="probootstrap-hero relative" style="min-height: 500px;" data-section="home" data-stellar-background-ratio="0.5">
      <div class="absolute text-center full-width" style="bottom: 0px; left: 0px; right: 0px; background-color: rgba(255, 255, 255, 0.65); padding: 34px 0px;">
        <h2 class="text-black no-margin">Welcome to the Downtown Rotary Club of Houston</h2>
      </div> 
    </section>
-->
    <section class="probootstrap-section probootstrap-cta">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="probootstrap-heading text-center no-margin no-padding" style="font-weight: 100;"></h2>
          </div>
        </div>
      </div>
    </section>		

   <div class="container">
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>
 <!-- Form Name -->
<legend style="color: rgb(0,100,0); font-weight: 24px; height: 40px;">REGISTER!</legend>
<div class="form">
<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="us" placeholder="Username" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
       <div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="fm" placeholder="First Name" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
       <div class="form-group">
  <label class="col-md-4 control-label">Last Name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lm" placeholder="Last Name" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
  <div class="form-group">
  <label class="col-md-4 control-label">Identification Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="id_no" placeholder="Identification Number" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
  <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="em" placeholder="E-Mail Address" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="pass" type="password" placeholder="Password" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
  <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['us'])){
 $us = stripslashes($_REQUEST['us']);
 $id_no = $_POST['id_no'];
 $us = $_POST['us'];
 $fm = $_POST['fm'];
 $lm = $_POST['lm'];
 $em = $_POST['em'];
 $pass = $_POST['pass'];
  
    $query = "INSERT into `admin` (id_no, us, fm, lm, em, pass)
VALUES ('$id_no','$us','$fm','$lm','$em','$pass')";
        $result = mysqli_query($con,$query);

        if($result==1){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
</div>";
        }else{
          echo "<div class='form'>
   <script type=\"text/javascript\">
            alert('similar credentials')
             window.location.href='adminreg.php';
            </script>
            </div>";

        }
    }
?>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</fieldset>
</form>
</div>
  	<a href="#0" class="cd-top js-cd-top">Top</a>
    <footer class="probootstrap-footer">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12">
            <p class="probootstrap-social">
              <a target="_blank" href="https://www.facebook.com/househelpmanagement"><i class="icon-facebook2"></i></a>
              <a target="_blank" href="#"><i class="icon-twitter"></i></a> 
              <a target="_blank" href="#"><i class="icon-instagram2"></i></a>
              <a target="_blank" href="#"><i class="icon-linkedin"></i></a> 
            </p>
            <p class="text-center small">
              <strong>CONTACT US</strong>
                                           <br>
              ONLINE HOUSE HELP MANAGEMENT SYSTEM   <br>
              Kirinyaga University                <br>
              143-10300 Kerugoya                      <br>
              Kenya, Kirinyaga County             <br>
              Email: <a href="info@onlinehousehelpmanegment.net">info@onlinehousehelpmanegment.net</a>
              <br>
              Phone: +254 713-621-7200 <!---&mdash;--></p>
          </div>
        </div>
      <div class="row">
        <div class="col-md-12">
            &copy; 2020 ONLINE HOUSE HELP MANAGEMENT SYSTEM. All Rights Reserved.
            <br>
            Developed and maintained by: Philip Ogutu Gunde.
            <br>
            <a href="">Sitemap</a>
          </div>
        </div>
      </div>
    </footer><!-- #colophon -->
</div><!-- #page -->
<script>
    </footer>		    <script src="js/scripts.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/easy_background.min.js"></script>
    <script src="js/backToTop.js"></script>
    <script src="js/fancybox/jquery.fancybox.min.js"></script>
    <script>
    </script>
  </body>

   
</html>
  