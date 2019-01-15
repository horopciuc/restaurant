

<?php
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$object = array(
		'Uname' => $username,
		'Pword' => $password
	);

	echo json_encode($object);

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


?>

