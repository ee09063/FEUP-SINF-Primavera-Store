<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/authentication.php');  

	if (!$_POST['username'] || !$_POST['password'] || !$_POST['email'] || !$_POST['name'] || !$_POST['confirmationPassword'] ||
	    !$_POST['address'] || !$_POST['nif']){
		$_SESSION['error_messages'][] = 'All fields are mandatory';
		$_SESSION['form_values'] = $_POST;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;	
	}

	$info['codCliente'] = "C" . $_POST['nif'];
	$info['username'] = $_POST['username'];
	$info['email'] = $_POST['email'];
	$info['password'] = $_POST['password'];
	$info['confimation_password'] = $_POST['confirmationPassword'];
	$info['name'] = $_POST['name'];
	$info['address'] = $_POST['address'];
	$info['nif'] = $_POST['nif'];
	
	if($info['password'] != $info['confimation_password']){
		$_SESSION['error_messages'][] = 'Error creating profile: passwords did not match.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	if(strlen($info['password']) < 6) {
		$_SESSION['error_messages'][] = 'Error creating profile: the password must have at least 6 characters.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	if(!preg_match('@[0-9]@', $info['password'])) {
		$_SESSION['error_messages'][] = 'Error creating profile: the password must have at least one number.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	try {
		print_r($info);
		$status = createUser($info);
		if($status != 201){
			$_SESSION['error_messages'][] = 'Error creating User';
			$_SESSION['form_values'] = $_POST;
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}
	catch (PDOException $e) {
		$_SESSION['error_messages'][] = 'Error creating User';
		$_SESSION['form_values'] = $_POST;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	$_SESSION['success_messages'][] = 'Successful registration';  
	$_SESSION['user_id'] = $codCliente;
	$_SESSION['username'] = $username;
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
