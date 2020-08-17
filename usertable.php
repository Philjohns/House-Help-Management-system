<?php
require('db.php');
$sql = "CREATE TABLE users(
        users_id_no int(11) NOT NULL auto_increment,
        users_username VARCHAR(60),
        users_fname VARCHAR(60),
        users_lname VARCHAR(60),
        users_email VARCHAR(60),
        users_phone VARCHAR(32),
        users_city VARCHAR(60),
        users_gender VARCHAR(60),
        users_age VARCHAR(60),
        users_address VARCHAR(60),
        users_picture VARCHAR(285),
        users_password VARCHAR(60),
        users_confirm_password VARCHAR(32),
        users_about_yourself VARCHAR(250),
        users_role ENUM('admin', 'user', 'employer'),
        users_id INT(11) NOT NULL,
        PRIMARY KEY (users_id_no)
    )";
if ($con->query($sql) === TRUE) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
?>
