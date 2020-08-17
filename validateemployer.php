<?php 
session_start();
$con = mysqli_connect("localhost","root","","project");
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$sql = "SELECT * FROM employer where email='$email' AND password='$pass'";
	$results = mysqli_query($con,$sql);
	$rows = mysqli_num_rows($results);
	if ($rows == 1) {
		if (isset($_POST['remember'])) {
		setcookie('email', $email, time()+60*60*7);
		setcookie('pass', $pass, time()+60*60*7);
			}
			    $_SESSION['email'] = $email;
				header("location: useremployer.php");
			}else{
		echo "Invalid username and password";
	}
}else{ 
	header("location: employerlogin.php"); 
}
  ?>