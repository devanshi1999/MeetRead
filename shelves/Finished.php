<html>
<head>
<title>Finished</title>
<link rel="stylesheet" type="text/css" href="../css/finished.css?v=<?php echo time(); ?>" />
</head>

<body>
<button onclick="back()" id="back">Go Back</button><br>
	<h1>❝ Finished Reading ❞</h1>
	<script type="text/javascript">
	function back()
	{
		window.history.back();
	} 

	</script>
	<div class="column">
<?php 

	session_start();

	if(isset($_SESSION['uid']))
	{
		include ('../dbconnection.php');
		include ('../createdb.php');


							$id=$_POST['id'];
							$query="DELETE FROM `MeetRead`.`reading` WHERE `id`='$id'";
							$run=mysqli_query($conn,$query);
							$id=$_SESSION['uid'];
							if(isset($_POST['finished']))
							{
							
								$title=$_POST['title'];
								$bid=$_POST['bid'];
								$uid=$_SESSION['uid'];
							
							
								$query="INSERT INTO `MeetRead`.`Finished` (`uid`, `bid`, `title`) VALUES ('$uid','$bid','$title')";
								$run=mysqli_query($conn,$query);
							}

							$query="SELECT * FROM `MeetRead`.`Finished` WHERE `uid`='$id'";
							$run=mysqli_query($conn,$query);
							$rows=mysqli_num_rows($run);

							if($rows>0)
							{
								
								while ($data=mysqli_fetch_assoc($run)) {
									
									echo "<b id=\"title\"><a href=\"https://books.google.co.in/books?id=".$data['bid']."\">".$data['title']."</a></b><br>";
								
								}
								
							}
							else
							{
								echo "(empty ☹)";
							}
	}
					?>

				</div>

</body>
</html>