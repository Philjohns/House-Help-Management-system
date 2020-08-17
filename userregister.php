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
            <a href="mailto:info@onlinehousehelpmanagement.net"><i class="fa fa-envelope-o"></i>info@onlinehousehelpmanagement.net </a><span> | </span>
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
          <a class="navbar-brand" href="index.htm" title="HOUSE HELP MANAGEMENT SYSTEM">
            <!-- Mobile logo -->
            <img class="logo visible-xs" src="img/logo_dark.png" style="max-height: 45px; top: -22px;" alt="HOUSE HELP MANAGEMENT SYSTEM">
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
              <a href="#contact.html">CONTACT US</a>
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

    <form class="well form-horizontal" action=" " method="post"  id="contact_form" enctype="multipart/form-data">
      
<fieldset>
 
<!-- Form Name -->

<legend style="color: rgb(0,100,0); font-weight: 24px; height: 40px;">REGISTER!</legend>
<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">As House Help</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="employerreg.php"> Employer</a></label>
<div class="form">
<div class="form-group">
  <label class="col-md-4 control-label">Profile Photo</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="image" type="file" name="users_picture" placeholder="Photo" required="" capture>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="users_username" placeholder="username" class="form-control"  type="text" required="">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="users_fname" placeholder="fname" class="form-control"  type="text" required="">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="users_lname" placeholder="Last Name" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Identification Number #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="users_id_no" placeholder="231456789" class="form-control" type="text" required="">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="users_email" placeholder="E-Mail Address" class="form-control"  type="text" required="">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="users_phone" placeholder="(+254)7010-77552" class="form-control" type="text" required="">
    </div>
  </div>
</div>
<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="users_city" placeholder="city" class="form-control"  type="text" required="">
    </div>
  </div>
</div>


<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="users_gender" value="Male" required="" /> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="users_gender" value="Female" required="" /> Female
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Age</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input  type="text" name="users_age" placeholder="Age" class="form-control" type="text" required="">
    </div>
  </div>
</div>
<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input  type="text" name="users_address" placeholder="Address" class="form-control" type="text" required="">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Users Role</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input  type="text" name="users_role" placeholder="user or amdin or employer" class="form-control" type="text" required="">
    </div>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="users_password" type="password" placeholder="Password" class="form-control"  type="text" required="">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Confirm Password</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="users_confirm_password" type="password" placeholder="Confirm Password" class="form-control" type="text" required="">
    </div>
  </div>
</div>
<!-- Text area -->

  
<div class="form-group">
  <label class="col-md-4 control-label">Tell Us About Yourself</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control" name="users_about_yourself" placeholder="Tell Us About Yourself"></textarea>
  </div>
  </div>
</div>

</div>
</div>
</form>
</div>


<!-- Success message -->
<!--
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
-->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send" onsubmit="returncheckform(this);"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>
    </div>
    <!-- /.container -->

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
             HOUSE HELP MANAGEMENT SYSTEM   <br>
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
            &copy; 2020 HOUSE HELP MANAGEMENT SYSTEM. All Rights Reserved.
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
    easy_background("#hero",

      {
      slide: [
        "img/slides/01.jpg","img/slides/slide2.jpg","img/slides/slide8.jpg","img/slides/slide5.jpg","img/slides/slide4.jpg","img/slides/slide9.jpg","img/slides/07.jpg","img/slides/slide3.jpg","img/slides/slide1.jpg","img/slides/slide2.jpg"      ],

      delay: [
        8000,8000,8000,8000,8000
        ]
      }

    );
     

    </script>
  </body>
  

<?php
require('db.php');

// If form submitted, insert values into the database.
if (isset($_REQUEST['users_username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['users_username']);
        //escapes special characters in a string
  $id_no = $_POST['users_id_no'];
  $username = $_POST['users_username'];
  $fname = $_POST['users_fname'];
  $lname = $_POST['users_lname'];
  $email = $_POST['users_email'];
  $phone = $_POST['users_phone'];
  $city = $_POST['users_city'];
  $gender = $_POST['users_gender'];
  $age = $_POST['users_age'];
  $address = $_POST['users_address'];
  $password = $_POST['users_password'];
  $confirm_password = $_POST['users_confirm_password'];
  $about_yourself = $_POST['users_about_yourself'];
  $role = $_POST['users_role'];
  $id = $_POST['users_id'];
  $pic = $_FILES['users_picture']['name'];
  mkdir('img/profile/'.$id_no);
  $target_dir = 'img/profile/'.$id_no.'/';
  $target_file = $target_dir . basename($_FILES['users_picture']['name']);
  move_uploaded_file($_FILES["users_picture"]["tmp_name"], $target_file);
    $query = "INSERT into `users` (users_id_no, users_username, users_fname, users_lname, users_email, users_phone, users_city, users_gender, users_age, users_address, users_password, users_confirm_password, users_picture, users_about_yourself, users_role, users_id )
VALUES ('$id_no', '$username','$fname','$lname','$email','$phone','$city','$gender','$age','$address','$password','$confirm_password','$pic','$about_yourself','$role','$id')";
        $result = mysqli_query($con,$query);
        

        if($result==1){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }else{
          echo "<div class='form'>
   <script type=\"text/javascript\">
            alert('similar credentials')
             window.location.href='userregister.php';
            </script>

            </div>";

        }
    }
        

      else{

      }
?>
</html>
  