<?php
	
	session_start();
	if(isset($_SESSION['uid']))
	{
		include ("../dbconnection.php");
		include ("../createdb.php");

		$title=$_POST['title'];
		$bid=$_POST['bid'];
		$uid=$_SESSION['uid'];
		

		$query="INSERT INTO `MeetRead`.`favorites` (`uid`, `bid`, `title`) VALUES ('$uid','$bid','$title')";
		$run=mysqli_query($conn,$query);
		if($run)
		{
			header('location:../shelves/Favorites.php');
		}

	}
	else {
		echo "error";
	}

?>