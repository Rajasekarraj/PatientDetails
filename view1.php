  <html>
    <head>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
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
  <body background="doc1.jpg">
  
  <div class="container">
  <div class="jumbotron">
    <h1 style="text-align:center; font-size: 24px; color:#CCCC99">YOUR DETAILS</h1> 
   <br><br>
   
  </div>
  </div>  
  
  <table class="container">
<?php 
$conn=mysqli_connect("localhost","root","","track")
or die("cannot connected");
session_start();
$email= $_SESSION["email"]; 
$sel="SELECT * FROM doctor WHERE email='$email'";
$sql=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($sql);
echo"<tr><td>Doctor Name</td><td>".$row['dname']."</td></tr>";
echo"<tr><td>Email</td><td>".$row['email']."</td></tr>";
echo"<tr><td>Address</td><td>".$row['address']."</td></tr>";
echo"<tr><td>City</td><td>".$row['city']."</td></tr>";
echo"<tr><td>Gender</td><td>".$row['gender']."</td></tr>";
echo"<tr><td>Experience</td><td>".$row['exp']."</td></tr>";
echo"<tr><td>Specialist</td><td>".$row['spe']."</td></tr>";
echo"<tr><td>Age</td><td>".$row['age']."</td></tr>";
echo"<tr><td>Phone</td><td>".$row['phone']."</td></tr>";
?>
</table>
<h5 align="center"><a href="disp1.php">Previous Page</h5>
</body>
</html>

