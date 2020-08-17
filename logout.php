<?php 
session_start();
session_destroy();
if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
setcookie('email', time()-1);
setcookie('pass', time()-1);
}
echo "You Succesully logout<br> Click here to <a href='login.php'> login again</a> ";
 


 ?>