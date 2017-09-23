 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 <?php
 echo "hello";
 $conn=mysqli_connect("localhost","root","root","testDB");

 if(!$conn)
 {
 die("Connection failed: " . mysqli_connect_error());
 }
  if(isset($_POST['save']))
{
    $sql = "INSERT INTO users (username, password, email)
    VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";

    $result = mysqli_query($conn,$sql);
}

?>

<form action="index.php" method="post"> 
<label id="first"> First name:</label><br/>
<input type="text" name="username"><br/>

<label id="first">Password</label><br/>
<input type="password" name="password"><br/>

<label id="first">Email</label><br/>
<input type="text" name="email"><br/>

<button type="submit" name="save">save</button>

</form>
 </body>
 </html>


 