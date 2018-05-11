<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	</script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<style>
table {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
</style>

<title>Doctor Login</title>
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
<body background ="img3.jpg">
<nav>
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="view1.php">Profile</a></li>
        <li><a href="ddetail.php">Treatment</a></li>
		<li><a href="cat1.php">LogOut</a></li>
      </ul>
    </div>
  </nav>
  <br><br><br><br>
  <marquee style="font-family:Book Antiqua; color: #FFFFFF" bgcolor="powderblue" scrolldelay="20">
  <h5 align="center">A doctor's Reputation is made by number of eminent man who die under his care</h5>
  </marquee>
  <form action="disp1.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" >
<div class="row container">
	<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pemail" type="text" placeholder="Patient Email" required maxlength="30">
    </div>
</div>
</div>
<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple" type="submit" name="submit" value="submit"> Submit </button>
</p>

</form>
<table width="600" border="1" cellpadding="1" cellspacing="1" class="table table-bordered">
<tr>
<th>Doctor Name</th>
<th>Date</th>
<th>Time</th>
<th>Disease</th>
<th>Prescribtion</th>
</tr>
<?php
$conn = mysql_connect('localhost','root','');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   if(isset($_POST["submit"]))
   {
   		$pemail=$_POST["pemail"];
	   $sql = "SELECT * FROM details  where pemail='$pemail' ";
	   mysql_select_db('track');
	   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   } 


 while($person = mysql_fetch_array($retval, MYSQL_ASSOC)) {
        echo "<tr>";
		echo "<td>".$person['dname']."</td>";
		echo "<td>".$person['date']."</td>";
		echo "<td>".$person['time']."</td>";
		echo "<td>".$person['disease']."</td>";
		echo "<td>".$person['pres']."</td>";
		echo "</tr>";
   }
   }
?>
</table>
</body>
</html>

