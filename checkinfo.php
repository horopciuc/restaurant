

<?php
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	// $returnData = new stdClass();
	// $returnData->username = '';
	// $returnData->password = '';


	// if (empty($_POST['username']) || empty($_POST['password']))
	// {
	// 	$returnData->username = '';
	// 	$returnData->password = '';

	// }
	// else {
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];

	// 	$returnData->username = $username;
	// 	$returnData->password = $password;
	// }

	echo json_encode($username);

?>


<?php

	$returnData = new stdClass();
	$returnData->code = -1;
	$returnData->message = '';


	if (empty($_POST['username']) || empty($_POST['password']))
	{
		$returnData->code = 0;
		$returnData->message = 'datele nu sunt valide';

	}
	else {
		session_start();
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$_SESSION['use']=$user;

		$returnData->code = 1;
		$returnData->message = 'datele sunt valide';

	}

	echo json_encode($returnData);

?>