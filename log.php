<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


	<form id="loginform" method="POST">
		Username:
		<input type="text" id="username">
		<br>
		Password:
		<input type="password" id="password">
		<br>
		<input type="submit" name="submit" id="submit" value="Login" >

	</form>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="request.js"></script>
</body>
</html>
