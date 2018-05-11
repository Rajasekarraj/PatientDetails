<?php
   $conn = mysql_connect('localhost','root','');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   session_start();
$email= $_SESSION["email"];
   
   $sql = "SELECT * FROM details  where email='$email' ";
   mysql_select_db('track');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
?>
<html>
<head>
<title>FROM DB</title>
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
		<li><a href="card.php">LogOut</a></li>
      </ul>
    </div>
  </nav>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>dname</th>
<th>date</th>
<th>time</th>
<th>disease</th>
<th>mname1</th>
<th>dos1</th>
<th>ses1</th>
<th>mname2</th>
<th>dos2</th>
<th>ses2</th>
</tr>
<?php
 


 while($person = mysql_fetch_array($retval, MYSQL_ASSOC)) {
        echo "<tr>";
		echo "<td>".$person['dname']."</td>";
		echo "<td>".$person['date']."</td>";
		echo "<td>".$person['time']."</td>";
		echo "<td>".$person['disease']."</td>";
		echo "<td>".$person['mname1']."</td>";
		echo "<td>".$person['dos1']."</td>";
		echo "<td>".$person['ses1']."</td>";
		echo "<td>".$person['mname2']."</td>";
		echo "<td>".$person['dos2']."</td>";
		echo "<td>".$person['ses2']."</td>";
		echo "</tr>";
   }
   
   
?>
</table>
</body>
</html>

