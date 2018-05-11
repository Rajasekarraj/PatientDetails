<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <script>
		   $(document).ready(function() {
    Materialize.updateTextFields();
  });
  </script>
  <style>
  tr:nth-child(even) {
  background-color: #CCCCCC;
  }
  </style>
  </head>
<body>
<br>
<br><h5 align="center">Edit Your Details.</h3>
<br>
<br>
<br>
<div style="margin-left:20%; margin-right:20%">
<form action="detail1.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" >
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="dname" type="text" placeholder="Doctor Name" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="address" type="text" placeholder="Address" required maxlength="30">
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
      <input class="w3-input w3-border" name="city" type="text" placeholder="city" required  maxlength="6">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="exp" type="text" placeholder="Experience" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="spe" type="text" placeholder="Specialist" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="age" type="text" placeholder="Age" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="gender" type="text" placeholder="Gender" required maxlength="30">
    </div>
</div>
	
<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple" type="submit" name="submit" value="submit"> submit </button>
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
$dname=$_POST["dname"];
$address=$_POST["address"];
$email=$_POST["email"];
$city=$_POST["city"];
$exp=$_POST["exp"];
$spe=$_POST["spe"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$_SESSION["phone"]=$phone;
$sql="UPDATE doctor SET dname='$dname',email='$email',address='$address',city='$city',gender='$gender',exp='$exp',spe='$spe',age='age'
WHERE phone='$phone";
if (mysqli_query($conn,$sql)) 
{
echo'<script> window.location="view1.php"; </script> ';
exit();
}
else
{
echo"fail";
}
mysqli_close($conn);
}
?>