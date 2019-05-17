<?php

$name=$_POST['name'];
$password=$_POST['password'];

include ('dbconnection.php');
include ('createdb.php');

$query="SELECT `id`, `username`, `email`, `password` FROM `MeetRead`.`userdata` WHERE `username`='$name' AND `password`='$password' ";

$run=mysqli_query($conn,$query);

$rows=mysqli_num_rows($run);

if($rows!=0)
{
	$data=mysqli_fetch_assoc($run);

	$id=$data['id'];

	session_start();

	$_SESSION['uid']=$id;

	header('location:user/profile.php');

}
else
{
?>
	<script> alert("invalid username/password"); 
			window.open('login.php','_self');
	</script>

<?php
}

?>