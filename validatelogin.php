<?php
session_start();
// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_password"];

// Connect to the database
$con = mysqli_connect("localhost","root","","project");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}

// Select the database to use
mysqli_select_db("project",$con);

$result = mysqli_query("SELECT users_id_no, users_email, users_role " + 
  "FROM register WHERE email = $email AND password = $pass");

$rows = mysqli_num_rows($result);

$protocol = $_SERVER['HTTPS'] ? "https" : "http";
$url = $protocol.'://'.$_SERVER['HTTP_HOST'];

if($rows == 1){
    // Credentials match so we create session variables
    $row = mysqli_fetch_assoc($result);
    $_SESSION['users_id_no'] = $row['users_id_no'];
    $_SESSION['users_email'] = $row['users_email'];
    $_SESSION['users_role'] = $row['users_role'];
    
    // After assigning the session variables, 
    // set the url to redirect the user to members page.    
    $url .= '/HOUSE HELP MANAGEMENT SYSTEM/house help.php?';    
}
else{
    // If not, then redirect the user the login page with an error
    $url .= '/HOUSE HELP MANAGEMENT SYSTEM/userlogin.php?';
     echo "invalid login details";
}
header("Location: $url");
exit;

?>
