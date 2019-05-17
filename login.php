<html>

<head> 
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
<h3 align="right"><a href="index.php">Go to Home Page</a></h3>
<h2 id="heading">Join Us!</h2>
<div class="forms" align="right" style="margin: 50px">

<form  method="POST" action="registered.php" autocomplete="off">

	<table id="reg">

	<tr> <td colspan="2" align="center"> <h1> New user? Register Now! </h1> </td> </tr>

	<tr>
		<td>Username</td>
		<td>
	 	<input type="text" name="name" required="required"/>
	 	</td>
	</tr>
	<tr>
		<td>email:</td>
		<td>
		<input type="email" name="email" required="required"/>
		</td>
	</tr>
	<tr>
		<td> password: </td>
		<td>
		<input type="password" name="password" required="required"/>
		</td>
	</tr>
	<tr>
		<td>
			<br>
		<button type="submit" id="btn"> REGISTER </button>
		</td>
	</tr>

	</table>

</form>

</div>
	
<div class="forms" align="right" style="margin-left: 50px">


<form action="welcome.php" method="POST" autocomplete="off">

	<table id="login">

	<tr> <td colspan="6" align="center"> <h1> Already Registered? Login now! </h1> </td> </tr>

	<tr>
		<td>Username</td>
		<td>
	 	<input type="text" name="name"required="required"/>
	 	</td>
	</tr>
	
	<tr>
		<td> password: </td>
		<td>
		<input type="password" name="password" required="required"/>
		</td>
	</tr>
	<tr>
		<td>
		<br>
		<button type="submit" id="btn"> LOGIN </button>
		</td>
	</tr>

	</table>

</form>


</div>


</body>
</html>

