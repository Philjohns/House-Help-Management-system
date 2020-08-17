<?php
require('db.php');

// sql to create table
$sql = "CREATE TABLE contact (
name VARCHAR(30) NOT NULL,
contnumber VARCHAR(30) NOT NULL,
emaill VARCHAR(30) NOT NULL PRIMARY KEY,
message VARCHAR(280) NOT NULL
)";

if ($con->query($sql) === TRUE) {
    echo "Table Contact created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
?>