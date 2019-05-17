<?php 

	session_start();
	if(isset($_SESSION['uid']))
	{
		include ("../dbconnection.php");
		include ("../createdb.php");

		$title=$_POST['title'];
		$bid=$_POST['id'];
		$uid=$_SESSION['uid'];
		

		$query="INSERT INTO `MeetRead`.`likedBooks` (`uid`, `bid`, `title`) VALUES ('$uid','$bid','$title')";
		$run=mysqli_query($conn,$query);
		if($run)
		{
			header('location:../user/profile.php');
		}
		else
		{
			echo "errorrr";
		}

	}
	else {
		echo "error";
	}

?>