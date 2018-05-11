<html>
<head>
<title>TREATMENT DETAILS</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  tr:nth-child(even) {
  background-color: #CCCCCC;
  }
  </style>

</head>
<body>
<h1 style="text-align:center; font-size: 24px; color:#CCCC99">TREATMENT DETAILS</h1>
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
   session_start();
		$email= $_SESSION["email"];
	   $sql = "SELECT * FROM details  where pemail='$email' ";
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
?>
</table>
<h3 align="center"><a href="disp.php">Previous Page</h3>
</body>
</html>
