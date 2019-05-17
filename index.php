
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index.css" >
	<title>MeetRead</title>
</head>
<body>
	<h1 id="heading"> Meet&Read </h1>
	<div id="info">

	Avid reader? this place is just for you... dive into the world of books and connect with people like you.

	</div>
	
<div id="options"> 

	want to join our community? <br>
	<button onclick="login()">  Yes I'm in! </button>
	<button onclick="search()"> Naah! Lemme search. </button>

</div>

<script type="text/javascript">
	function search() {
		window.open("search.php","_self"); 
	}
	function login() {
		window.open("login.php","_self");
	}
</script>

</body>
</html>