<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
if ($_POST) {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $conn = new mysqli('localhost', 'root', 'root', 'myDB');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
   
        $sql = "INSERT INTO Mytable (firstname, lastname, email)
        VALUES ('$firstname', '$lastname', '$email')";
        if ($conn->query($sql) === TRUE) {

        echo "Registration done successfully";
         }
       else{
        echo "Error: " . $sql . "<br>" . $conn->error;

    }
          
} else { ?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
FirstName: <input type="text" name="firstname" placeholder="YOUR NAME"><br>
Lastname: <input type="text" name="lastname" placeholder="YOUR EMAIL"><br>
email: <input type="text" name="email" placeholder="PASSWORD"><br>
<input type="submit" value="REGISTER">
</form>
<?php

} ?>         

</body>
</html>