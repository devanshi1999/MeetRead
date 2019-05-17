<html>
<head>
<title>Favorites</title>
<link rel="stylesheet" type="text/css" href="../css/favorites.css?v=<?php echo time(); ?>" >
</head>

<body>
<button onclick="back()" id="back">Go Back</button><br>
	<h1 style="background-color:gold; color:black; text-align:center;">Favorites ☟</h1>
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

							

							$query="SELECT * FROM `MeetRead`.`favorites` WHERE `uid`='$id'";
							$run=mysqli_query($conn,$query);
							$rows=mysqli_num_rows($run);

							if($rows>0)
							{
								
								while ($data=mysqli_fetch_assoc($run)) {
									
									echo "<b id=\"title\"><a href=\"https://books.google.co.in/books?id=".$data['bid']."\">".$data['title']."</a></b><br>";
									echo "<form action=\"\" method=\"POST\" style=\"margin:0;\"><input name=\"bid\" value=\"".$data['bid']."\" style=\"display:none;\" /><input name=\"title\" value=\"".$data['title']."\" style=\"display:none;\" /><input name=\"id\" value=\"".$data['id']."\"  style=\"display:none;\"/><br><button type=\"submit\" formaction=\"../user/read.php\">Read now</button><button type=\"submit\" formaction=\"../user/readLater.php\">Read Later</button><button name=\"remove\"type=\"submit\" formaction=\"Favorites.php\">Remove</button></form><hr>";
								}
								if(isset($_POST['remove']))
								{	$id=$_POST['id'];
									$query="DELETE FROM `MeetRead`.`favorites` WHERE `id`='$id'";
									$run=mysqli_query($conn,$query);
									header('location:Favorites.php');
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