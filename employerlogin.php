<!DOCTYPE html>
<html lang="en">
    <title>ONLINE HOUSE HELP MANAGEMENT SYSTEM &mdash; Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ONLINE HOUSE HELP MANAGEMENT SYSTEM">
    <meta name="keywords" content="">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/backToTop.css">
    <link rel="stylesheet" href="css/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/login.css">
    <!--Top Menu Bar-->
    <section id="quick-menu">
     <div class="row">  
     <div class="col c4">
      <div class="menu-quick-contacts-container" style="font-family: sans-serif; font-weight: 14;">
        <ul id="menu-quick-contacts" class="menu">
          <li id="menu-item-163" class="Mail menu-item menu-item-type-custom menu-item-object-custom menu-item-163">
            <a href="mailto:info@rotaryclubofkirinyaga.org"><i class="fa fa-envelope-o"></i>info@onlinehousehelpmanagement.net </a><span> | </span>
          </li>
        <li id="menu-item-164" class="Tel menu-item menu-item-type-custom menu-item-object-custom menu-item-164">
        <a href="tel:+254701077552"><i class="fa fa-phone"></i>+254 701077552</a>
     </li>
   </ul>
</div>              
       <div class="col c5 Omega"style="font-family: sans-serif; font-weight: 14;">
        <div class="menu-top-bar-menu-container">
          <ul id="menu-top-bar-menu" class="menu">
           <li id="menu-item-299" class="NoBorder menu-item menu-item-type-post_type menu-item-object-page menu-item-299">
           <a href="register.php">Register <span>|</span> </a>
          </li>
          <li id="menu-item-301" class="CTA Last menu-item menu-item-type-post_type menu-item-object-page menu-item-301">
          <a href="adminlogin.php">Admin </a>
      </li>
       <div class="wrap">
      <input type="text" placeholder="Search.."><a href="#"></a>
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
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
              <a href="about.html">ABOUT US</a>
            </li>
             <li>
              <a href="contact.php.html">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>	
        <section class="probootstrap-section probootstrap-cta">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="probootstrap-heading text-center no-margin no-padding" style="font-weight: 100;"></h2>
          </div>
        </div>
      </div>
    </section>	
 <section>
  <form method="post" action="validateemployer.php">
<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="employerreg.php"> Sign Up</a></label>
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <label for="user" class="label">Email</label>
          <input id="email" id="email" type="text" class="input" name="email">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" class="input" data-type="password" name="password">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Login" name="login">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </div>
      </form>
      </section>
      <a href="#0" class="cd-top js-cd-top">Top</a>
    </html>
<?php 
$con = mysqli_connect("localhost","root","","project");
if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
$email = $_COOKIE['email'];
$pass = $_COOKIE['pass'];
echo "<script>
       document.getElementByID('email').value = '$email';
       document.getElementByID('pass').value = '$pass';
       </script>";
}
 ?>