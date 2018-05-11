<!DOCTYPE html>
<html>
<title>Patient Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body style="background-image:url(lok.jpg); background-repeat: inherit">
<br>
<br>
<br>
<br>
<div style="margin-left:30%; margin-right:30%">
<form action="detail.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-green w3-margin" >
<h2 class="w3-center">SIGNUP</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="first_name" type="text" placeholder="First Name" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone number" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="email" placeholder="Email" required>
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pass" type="password" placeholder="Password" required minlength="8" maxlength="12">
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

$conn=mysqli_connect("localhost","root","","track")
or die("cannot connected");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST["submit"]))
{
session_start();
$fname=$_POST["first_name"];
$phone=$_POST["phone"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$_SESSION["first_name"]=$fname;
$_SESSION["phone"]=$phone;
$_SESSION["pass"]=$pass;
$_SESSION["email"]=$email;
echo'<script> window.location="detail2.php"; </script> ';
mysqli_close($conn);
}
?>