<!DOCTYPE html>
<html>
<title>Patient Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body background="patient.jpg">
<br>
<br>
<br>
<br>
<div style="margin-left:30%; margin-right:30%">
<form action="detail2.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" >
<h2 class="w3-center">UPDATE PROFILE</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="dob" type="date" placeholder="DOB" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-address-card"></i></div>
    <div class="w3-rest">
      <textarea class="w3-input w3-border" name="address"  placeholder="ADDRESS" required maxlength="30"></textarea>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-building"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="city" type="text" placeholder="CITY" required>
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-marker"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pcode" type="number" placeholder="POSTAL CODE" required>
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-header"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="height" type="number" placeholder="HEIGHT(in cm)" required min="0" max="300"  step="10">
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-tachometer"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="weight" type="number" placeholder="WEIGHT(in Kg)" required min="0" max="500"  step="10">
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-tint"></i></div>
    <div class="w3-rest">
     <select name="bgroup"  class="w3-input w3-border" >
    <option value="A+VE"> A+VE </option>
    <option value="A-VE">A-VE</option>
    <option value="B+VE">B+VE</option>
	<option value="B-VE">B-VE</option>
    <option value="O+VE">O+VE</option>
	<option value="O-VE">O-VE</option>
	<option value="AB-VE">AB+VE</option>
	<option value="AB-VE">AB-VE</option>
  </select>
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




<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple" type="submit" name="submit" value="submit"> Submit </button>
</p>
</form>
</div>
</body>
</html> 
<?php
include("email.php");
$conn=mysqli_connect("localhost","root","","track")
or die("cannot connected");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST["submit"]))
{
session_start();
$phone=$_SESSION["phone"];
$fname=$_SESSION["first_name"];
$pass=$_SESSION["pass"];
$email=$_SESSION["email"];
$date=$_POST["dob"];
$address=$_POST["address"];
$city=$_POST["city"];
$pcode=$_POST["pcode"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$bgroup=$_POST["bgroup"];
$gender=$_POST["gender"];			
$sql="INSERT INTO patient (first_name,dob,address,city,postal_code,blood_group,height,weight,password,email,phone,gender) VALUES ('$fname','$date','$address','$city',$pcode,'$bgroup',$height,$weight,'$pass','$email','$phone','$gender')";
if (mysqli_query($conn,$sql)) 
{
$mess='
		                                 Welcome  '.$fname.' !!!
										 
										 
										  
				Thanks for signing up in our hospital.Use this software anywhere in our hospital to view your treatment and profile 		                details anytime.We hope you like this system.Get well soon!!';
$mail->addAddress($email);
$mail->Subject = 'Account activation';
$mail->Body    = $mess;
if (!$mail->send()) {
      
  echo "Message error";
} else {
		echo'<script> window.location="cat1.php"; </script> ';
   
}


exit();
}
else
{
echo"fail";
}


}
mysqli_close($conn);
?>