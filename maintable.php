<?php
require('db.php');

// sql to create table
$sql = "CREATE TABLE register (
id_no INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(50) NOT NULL,
email VARCHAR(30) NOT NULL,
phone VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
age VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
confirm_password VARCHAR(30) NOT NULL,
prof VARCHAR(330) NOT NULL,
cv VARCHAR(330) NOT NULL,
good_conduct VARCHAR(330) NOT NULL,
about_yourself VARCHAR(160) NOT NULL,
id INT NOT NULL


)";

if ($con->query($sql) === TRUE) {
    echo "Table Register created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
?>