<?php
	session_start(); 

	if (isset($_SESSION['use'])) {
	    header("Location:home.php"); 
	 }
	
	if (isset($_POST['login'])) {
	    $user = $_POST['user'];
		$pass = $_POST['pass'];
		if ($user == "Ank" && $pass == "1234") {
			$_SESSION['use']=$user;
			echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successful Login redirects to home.php
	
		}
		else {
			echo "invalid Username or Password";        
		    }
	}	
?>

<html>
<head>

<title> Login Page   </title>

</head>

<body>

<form action="" method="post">

	Username:
    <input type="text" name="user" >
	Password
    <input type="password" name="pass">
	<input type="submit" name="login" value="LOGIN">

</form>

</body>
</html>