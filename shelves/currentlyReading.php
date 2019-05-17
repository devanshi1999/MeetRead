<html>
<head>
<title>Reading</title>
<link rel="stylesheet" type="text/css" href="../css/currentlyReading.css?v=<?php echo time(); ?>" >
</head>

<body>
<button onclick="back()" id="back">Go Back</button><br>
	<h1>〈 Currently Reading 〉</h1>
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

		$id=$_SESSION['uid'];

							

							$query="SELECT * FROM `MeetRead`.`reading` WHERE `uid`='$id'";
							$run=mysqli_query($conn,$query);
							$rows=mysqli_num_rows($run);

							if($rows>0)
							{
								
								while ($data=mysqli_fetch_assoc($run)) {
									
									echo "<b id=\"title\"><a href=\"https://books.google.co.in/books?id=".$data['bid']."\">".$data['title']."</a></b><br>";
									echo "<form action=\"\" method=\"POST\" style=\"margin:0;\"><input name=\"bid\" value=\"".$data['bid']."\" style=\"display:none;\" /><input name=\"title\" value=\"".$data['title']."\" style=\"display:none;\" /><input name=\"id\" value=\"".$data['id']."\"  style=\"display:none;\"/><br><button name=\"finished\" type=\"submit\" formaction=\"Finished.php\">Finished</button><button type=\"submit\" formaction=\"../user/readLater.php\">Read Later</button><button name=\"remove\"type=\"submit\" formaction=\"currentlyReading.php\">Remove</button></form><hr>";
								}
								if(isset($_POST['remove']))
								{	$id=$_POST['id'];
									$query="DELETE FROM `MeetRead`.`reading` WHERE `id`='$id'";
									$run=mysqli_query($conn,$query);
									header('location:currentlyReading.php');
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