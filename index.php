<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){
        $("form").animate({left: '250px'});
});
</script> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	</script>
<script> 
$(document).ready(function(){
        $("body").animate({left: '250px'});
});
</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <script>
		   $(document).ready(function() {
    Materialize.updateTextFields();
  });
  </script>
  <style>
  .card {
 height:400px;
}
.body{
	background-color:powderblue;
}
  </style>
</head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body style="background-image:url(hos.jpg)">

<div class="w3-container">
  <br>
  <br>
  <br><br><br>
  <br>
  <br>
  <br><br><br>
  <br>
  <br>
<div class="row" style="text-align:center; border:5px solid #FFFFFF; margin-left:40%; margin-right:40%; padding:15px 15px 15px 15px;">
 <button onClick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue w3-large">Login</button>
 <button class="w3-button w3-blue w3-large" ><a href="detail.php"> signup</a></button>
</div>
 

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onClick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
              </div>

      <form class="w3-container" action="disp.php" method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="email" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pass" required minlength="8" maxlength="12">
          <button class="w3-button w3-block w3-green w3-section w3-padding" name="submit" value="submit" type="submit" >Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onClick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>			<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

  <?php 
  
   $email=$pass="";
 
  $conn=mysql_connect("localhost","root","")
or die("cannot connected");
mysql_select_db("track",$conn); 

  if ((isset($_POST["email"]))&&(isset($_POST["pass"]))&&(isset($_POST["submit"])))
  {
$email=$_POST["email"];
$pass=$_POST["pass"];
$result=mysql_query("SELECT * FROM patient WHERE email='$email' AND password='$pass'");
$row=mysql_num_rows($result);
if($row==1)
{

echo "sucess";
echo'<script> window.location="disp.php"; </script> ';
}
else
{
echo "<br> <br> <h6> check your email and password <h6>";

}
}
?>