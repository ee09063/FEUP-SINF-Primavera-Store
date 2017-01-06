<?php
	ini_set('max_execution_time', 300);
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/security/registered.php');	
	include_once($BASE_DIR . 'database/profiles.php');

	$info['codCliente'] = $_POST['code'];
	$info['name'] = $_POST['name'];
	$info['address'] = $_POST['address'];
	$info['contact'] = $_POST['contact'];
	
	$status = APIUpdateClient($info);
	
	if($status == 200){
		$_SESSION['success_messages'][] = 'Profile Information Updated';
	} else {
		$_SESSION['error_messages'][] = 'Error Updating Profile Information';
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>