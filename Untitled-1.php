<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
session_start();
$_SESSION["email"]=$email;
$con = mysqli_connect("localhost","root","","track");
$sql = "SELECT * FROM patient WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($con,$sql);
if($result->num_rows==1)
header("Location:disp.php");
else
echo "<script>alert('Access Denied');window.location='cat1.php'</script>";
$con->close();
?>