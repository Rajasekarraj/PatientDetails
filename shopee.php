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
<title>Shopee Login
</title>
<style>
table {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>
<body>
	<h3 align="center">Welcome to Shopee!!!!</h3><br><br><br><br>
<form action="shopee.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" >
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
<h5 align="center"><a href="cat1.php">Previous Page<h5>
</body>
</html>