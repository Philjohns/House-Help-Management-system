<?php 
session_start();
$con = mysqli_connect("localhost","root","","project");


if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	

	$sql = "SELECT * FROM register where email='$email' AND password='$pass'";
    $results = mysqli_query($con,$sql);
	$rows = mysqli_num_rows($results);
	//$user = mysqli_fetch_assoc($rows);
	//if ($user== false) {
	//	$_SESSION['email'] = $email;
	//echo "Invalid email address or Password ";
	//header("location: userhousehelp.php");
	//}

     //elseif ($user['id']== 1) {
    //	$_SESSION['email'] = $email;
    //	echo("Login Succeesful!");
    //	header("location: userhousehelp.php");
    	
    //}
    //elseif ($user['id']== 0) {
    //    echo("Account is pennding approval!");
   //}else{
   // echo "later";	
  //}
	if ($rows==1) {
		$_SESSION['email'] = $email;
		header("location: userhousehelp.php");
	}
	else{
		
		echo " <script>
		alert('Invalid email and password')
		window.location.href='login.php';
		</script>";

	}
}else{
		header("loacation: login.php");

	}
  ?>