<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/authentication.php');

	if (!$_POST['username'] || !$_POST['password']) {
		$_SESSION['error_messages'][] = 'All fields must be filled out.';
		$_SESSION['form_values'] = $_POST;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

	$info['username'] = $_POST['username'];
	$info['password'] = $_POST['password'];

	try {
		$res = isLoginCorrect($info);
	}
	catch(PDOException $e) {
		$_SESSION['error_messages'][] = 'There was an error while attempting to process your request.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	if(isset($res['user_id'])) {
		$_SESSION['user_id'] = $res['user_id'];
		$_SESSION['username'] = $res['username'];
		$_SESSION['success_messages'][] = 'Login successful!';
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	} else {
		$_SESSION['error_messages'][] = 'Incorrect username or password';
		$_SESSION['form_values'] = $_POST;

		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
?>
