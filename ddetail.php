<!DOCTYPE html>
<html>
<title>MEDICINE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body background="background-2030857__340.jpg">
<br>
<br>
<br>
<br>
<div style="margin-left:30%; margin-right:30%">
<form action="ddetail.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-green w3-margin" >
<h2 class="w3-center">MEDICINE DETAILS</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="dname" type="text" placeholder="DOCTOR NAME" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="date" type="date" placeholder="DATE" required maxlength="30">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-clock-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="time" type="time" placeholder="TIME" required>
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-bed"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="disease" type="text" placeholder="DISEASE" required>
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <textarea class="w3-input w3-border" name="pres"  placeholder="PRESCRIBTION" required maxlength="30"></textarea>
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="email" placeholder="DOCTOR EMAIL" required>
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pemail" type="email" placeholder="PATIENT EMAIL" required>
    </div>
</div>


<p class="w3-center">
<button class="w3-button w3-section w3-green w3-ripple" type="submit" name="submit" value="submit"> Submit </button>
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
$email= $_SESSION["email"];

$dname=$_POST["dname"];
$date=$_POST["date"];
$time=$_POST["time"];
$disease=$_POST["disease"];
$pres=$_POST["pres"];
$email=$_POST["email"];
$pemail=$_POST["pemail"];
$_SESSION["pemail"]=$pemail;
$sql="INSERT INTO details (dname,date,time,disease,pres,email,pemail) VALUES ('$dname','$date','$time','$disease','$pres','$email','$pemail')";
if (mysqli_query($conn,$sql)) 
{
$mess="
Here's your Latest Treatment Details which Your Doctor Prescribed
				DOCTOR NAME:    ".$dname." ;  DATE:    ".$date."  ; TIME:     ".$time." ; DISEASE:    ".$disease." ;  PRESCRIBTION:    ".$pres."; DOCTOR-EMAIL:    ".$email.";    												
													RECOVER SOON!!!!	
													THANK YOU"
									;
$mail->addAddress($pemail);
$mail->Subject = 'Treatment Details';
$mail->Body    = $mess;
if (!$mail->send()) {
      
  echo "Message error";
} else {
		echo'<script> window.location="disp1.php"; </script> ';
   
}



	
}
else
{
	echo 'Fail';
}
}
mysqli_close($conn);
?>