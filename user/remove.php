<?php

session_start();

	if(isset($_SESSION['uid']))
	{
		$id=$_POST['id'];
		
		include ('../dbconnection.php');
		include ('../createdb.php');

		$query="DELETE FROM `MeetRead`.`likedBooks` WHERE `id`='$id'";
		$run=mysqli_query($conn,$query);
		if($run)
		{
			header('location:profile.php');
		}
	}
	else
	{
		header('location: ../login.php');
	}

?>