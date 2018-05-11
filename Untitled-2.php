<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
session_start();
$_SESSION["email"]=$email;
$con = mysqli_connect("localhost","root","","track");
$sql = "SELECT * FROM doctor WHERE email = '$email' AND pass = '$pass'";
$result = mysqli_query($con,$sql);
if($result->num_rows==1)
header("Location:disp1.php");
else
echo "<script>alert('Access Denied');window.location='cat1.php'</script>";
$con->close();
?>