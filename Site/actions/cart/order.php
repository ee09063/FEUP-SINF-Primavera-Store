<?php
	ini_set('max_execution_time', 300);
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/cart.php');
	
	if (!$_SESSION['user_id']) {
		$_SESSION['error_messages'][] = 'You must have an account to place orders';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	if (count($_SESSION['cart']) == 0) {
		$_SESSION['error_messages'][] = 'The cart cannot be empty';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	$info = $_SESSION['cart'];

	try {
		$res = APIcreateOrder($info);
		if($res == 201){
			$_SESSION['success_messages'][] = 'Order complete successfully';
		} else {
			$_SESSION['error_messages'][] = 'Error : ' . $res;
		}
		header('Location: ' . $BASE_URL . 'pages/profiles/profile.php');
		exit;
	}
	catch(PDOException $e) {
		$_SESSION['error_messages'][] = 'There was an error while attempting to process your request.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
?>
