<?php
require('db.php');

// sql to create table
$sql = "CREATE TABLE admin (
id_no VARCHAR(30) NOT NULL PRIMARY KEY,
us VARCHAR(30) NOT NULL,
fm VARCHAR(30) NOT NULL,
lm VARCHAR(30) NOT NULL,
em VARCHAR(30) NOT NULL,
pass VARCHAR(30) NOT NULL,
id INT NOT NULL

)";

if ($con->query($sql) === TRUE) {
    echo "Table Admin created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
?>