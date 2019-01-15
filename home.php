<?php
	session_start();

	// if(!isset($_SESSION['use'])) {
	// 	header("Location:login.php");
	// }
	// echo $_SESSION['use'];
	// echo "Login Success";
	echo "<a href='logout.php'> Logout</a> ";
	session_unset();
?>

<html>

<head>
	<title>Home</title>
</head>

<body>

</body>


</html>