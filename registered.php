<?php

include ('dbconnection.php');
include ('createdb.php');

$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

echo $username,$email,$password;

$query="INSERT INTO `MeetRead`.`userdata`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";

$run=mysqli_query($conn,$query);

if($run)
{
	?>
<html>
<head>
<style type="text/css">
body {
	background-image: url("images/books2.jpg");
	background-repeat: no-repeat;
  	background-position: center;
  	background-attachment: fixed;
  	background-size: cover; 
}
</style>
</head>
<body></body>
</html>
	<script type="text/javascript">alert("registered successfully!"); window.open("login.php","_self");</script>
<?php
}
else
{
	echo "error";
}

?>