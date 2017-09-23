<?php
$servername = "localhost";
$username = "root";
$password = "root";
// $dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// create databse

$sql = "CREATE DATABASE myDB1";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
// var_dump($password);
$conn->close();
?>