<?php
	session_start();

	// if (isset($_SESSION['use'])) {
	// 	header("Location:home.php");
	// }

	// if (isset($_POST['login'])) {
	// 	if (empty($_POST['user']) || empty($_POST['pass'])) {
	// 		echo "Username of password is not valid!";
	// 	}
	// 	else {
	// 		$user = $_POST['user'];
	// 		$pass = $_POST['pass'];
	// 		$_SESSION['use']=$user;
	// 		header("Location: home.php");
	// 	}
	// }

	// echo json_encode($_POST);
?>

<html>
<head>
<title>Login Page</title>
</head>

<body>

<form action="" method="post" id="loginform">

	<div>Username:</div>
	<input type="text" id="username">
	<div>Password:</div>
	<input type="password" id="password">
	<br>
	<input type="submit" id="submit" value="LOGIN">

</form>

<div id="content">

</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
<script type="text/javascript" src="request.js"></script>
</body>
</html>