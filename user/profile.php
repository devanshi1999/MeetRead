<html>
<head>
<title>profile</title>
<link rel="stylesheet" type="text/css" href="../css/profile.css?v=<?php echo time(); ?>" />
<style type="text/css">
.column {
	margin-top: 50px;
  float: left;
  width: 33.33%;
  max-width: 33.33%;
  text-align: center;
  
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body>
	<button onclick="logout()" id="logout">Logout</button>
	
	<script type="text/javascript">
	function logout()
	{
		window.open("../logout.php","_self");
	} 

	</script>
</body>
</html>


<?php
	session_start();

	if(isset($_SESSION['uid']))
	{
		include ('../dbconnection.php');
		include ('../createdb.php');

		$id=$_SESSION['uid'];
		
		$query="SELECT * FROM `MeetRead`.`userdata` WHERE `id`='$id'";
		$run=mysqli_query($conn,$query);
		if($run)
		{
		$data=mysqli_fetch_assoc($run);
		$name=$data['username'];
		echo "<h2 id=\"heading\">".$name." 's Library</h2>"; 
		}
	}
	else
	{
		echo "error";
	}
?>

<html>

<body>

	<div class="row">
		
		

				<div id="bookshelves" class="column" style="background-color:pink;">
					<h3 style="background-color:black; color:pink; ">✦ Current Bookshelves ✦</h3>
					<a href="../shelves/Favorites.php">Favorites</a>
					<br>
					<a href="../shelves/currentlyReading.php">Currently Reading</a>
					<br>
					<a href="../shelves/WantToRead.php">Want to read</a>
					<br>
					<a href="../shelves/Finished.php">Finished reading</a>
				</div>

			
				
				<div id="liked" class="column" style="background-color:skyblue;">
					<h3 style="background-color:black; color:skyblue; ">❤ Books you like ❤</h3>
					<?php 

							include ("../dbconnection.php");
							include ("../createdb.php");

							$query="SELECT * FROM `MeetRead`.`likedBooks` WHERE `uid`='$id'";
							$run=mysqli_query($conn,$query);
							$rows=mysqli_num_rows($run);

							if($rows>0)
							{
								
								while ($data=mysqli_fetch_assoc($run)) {
									
									echo "<b id=\"title\"><a href=\"https://books.google.co.in/books?id=".$data['bid']."\">".$data['title']."</a></b><br>";
									echo "<form action=\"\" method=\"POST\" style=\"margin:0;\"><input name=\"bid\" value=\"".$data['bid']."\" style=\"display:none;\" /><input name=\"title\" value=\"".$data['title']."\" style=\"display:none;\" /><input name=\"id\" value=\"".$data['id']."\"  style=\"display:none;\"/><br><button name=\"like\" type=\"submit\" formaction=\"addFavorite.php\">Add to favorites</button><button type=\"submit\" formaction=\"read.php\">Read now</button><button type=\"submit\" formaction=\"readLater.php\">Read Later</button><button type=\"submit\" formaction=\"remove.php\">Remove</button></form><hr>";
								}
							}
							else
							{
								echo "(empty ☹)";
							}
					?>
				</div>


				<div id="search" class="column" style="background-color:yellow;">
					<h3 style="background-color:black; color:yellow; ">◄ Search a new book ▶</h3>
					<input id="query" type="text" placeholder="book name or author" /><br>
					<button id="btn" >Search</button>
				</div>

			</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="../js/psearch.js"></script>
</body>
</html>