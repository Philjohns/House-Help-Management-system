<?php 
session_start();
$con = mysqli_connect("localhost","root","","project");

if (isset($_POST['login'])) {
	$email = $_POST['em'];
	$pass = $_POST['pass'];


	$sql = "SELECT * FROM admin where em='$email'AND pass='$pass'";

	$results = mysqli_query($con,$sql);

    $rows = mysqli_num_rows($results);

	if ($rows == 1) {
		if (isset($_POST['remember'])) {
		setcookie('em', $email, time()+60*60*7);
		setcookie('pass', $pass, time()+60*60*7);

			}
	
		        $_SESSION['em'] = $email;
		        

				header("location: admindashboard.php");
		
	}else{
		echo "Invalid email and password";
	}

	
			
	

}else{ 
	header("location: adminlogin.php"); 
}
  ?>