<html>
<head>
<title>Views</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){
        $("div").animate({left: '100px'});
});
</script> 
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
  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
  form {
    color: blue;
}
  </style>
</head>
<body background ="img3.jpg">
<div class="container">
  <div class="jumbotron">
    <h1 style="text-align:center; font-size: 24px; color:#00FF66">Feedback</h1> 
   <br><br><br>
   
  </div>
  </div>  
<div class="row container">
    <form class="col s12" style="font-weight:bold"  method="post" action="feed.php">
 <div class="row">
        <div class="input-field col s12">
         
          <input id="firstname" name="firstname" type="text" class="validate">
          <label class="active" for="firstname" >First Name</label>
		 
        </div>
      </div>
   
      <div class="row">
        <div class="input-field col s12">
         
          <input id="lastname" name="lastname" type="text" class="validate">
          <label class="active" for="lastname" >Last Name</label>
		 
        </div>
      </div>
   
   
  
      <div class="row">
        <div class="input-field col s6">
          <input id="email" name="email" type="text" class="validate">
         <label class="active" for="email">E-mail</label>
        </div>
      </div>
	    
	  <div class="row">
		<div class="input-field col s6">
          <input id="phone" name="phone" type="number" class="validate">
          <label class="active" for="phone" >Phone</label>
        </div>
		</div>
  
  <div class="row">
        <div class="input-field col s4">
          <input id="comment" name="comment" type="text" class="validate">
         <label class="active" for="comment">Comments</label>
        </div>
</div>

      </div>
	  <div class="center-align">
	  <button  type="submit" name="submit" value="submit" align="center">Submit
  </button>
  </div>
	  
        </form>
		</div>
		<h5 align="center"><a href="cat1.php">Back to Home<h5>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
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
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
$sql = "INSERT INTO feed (firstname,lastname,email,phone,comment) VALUES ('$fname','$lname','$email',$phone,'$comment')";
if (mysqli_query($conn,$sql)) 
{

echo'<script> window.location="cat1.php"; </script> ';

exit();
}
else
{
echo"fail";
}

}
?>
