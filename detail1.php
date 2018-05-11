<!DOCTYPE html>
<html>
<title>Doctor Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body background="lok.jpg">

<div style="margin-left:30%; margin-right:30%">
<form action="detail1.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-brown w3-margin" >
<h2 class="w3-center">SIGNUP</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="first_name" type="text" placeholder="First Name" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone Number" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="email" placeholder="Email" required>
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pass" type="password" placeholder="password" required minlength="8" maxlength="12">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-address-card"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="address" type="text" placeholder="Address" required maxlength="30">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-building"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="city" type="text" placeholder="city" required maxlength="30">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-mars"></i></div>
    <div class="w3-rest">
     <select name="gender"  class="w3-input w3-border" >
    <option value="MALE"> MALE </option>
    <option value="FEMALE">FEMALE</option>
    <option value="OTHER">OTHER</option>
	
  </select>
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-child"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="age" type="text" placeholder="Age" required maxlength="30">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-graduation-cap"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="exp" type="text" placeholder="Experience" required maxlength="30">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa  fa-shield"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="spe" type="text" placeholder="Specialist" required maxlength="30">
    </div>
</div>


<p class="w3-center">
<button class="w3-button w3-section w3-brown w3-ripple" type="submit" name="submit" value="submit"> submit </button>
</p>
</form>
</div>
</body>
</html> 

 <?php 

$conn=mysqli_connect("localhost","root","","track")
or die("cannot connected");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST["submit"]))
{
session_start();
$dname=$_POST["first_name"];
$phone=$_POST["phone"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$address=$_POST["address"];
$city=$_POST["city"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$exp=$_POST["exp"];
$spe=$_POST["spe"];
$_SESSION["phone"]=$phone;
$sql="INSERT INTO doctor (dname,email,pass,address,city,gender,exp,spe,age,phone) VALUES ('$dname','$email','$pass','$address','$city','$gender','$exp','$spe','$age','$phone')";
if (mysqli_query($conn,$sql)) 
{
echo'<script> window.location="cat1.php"; </script> ';
exit();
}
else
{
echo"fail";
}
mysqli_close($conn);
}
?>