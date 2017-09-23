 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Mytable (
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
-- // -- reg_date TIMESTAMP
)";	

if ($conn->query($sql) === TRUE) {
    echo "Table Mytable created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 