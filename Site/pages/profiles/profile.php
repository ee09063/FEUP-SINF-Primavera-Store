<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/profiles.php');

	$data['user_id'] = $_SESSION['user_id'];
	
	try {
		$info = getAPIClientInfo($data);
		if(!$info) {
			$_SESSION['error_messages'][] = 'Error: no data to display.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}
	catch(PDOException $e){
		$_SESSION['error_messages'][] = $_SESSION['user_error_message'];
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	$info['username'] = $_SESSION['username'];
	$smarty->assign('info', $info);
	$smarty->assign('PAGE', 'profile');
	$smarty->assign('TITLE', "Profile");
	
	$smarty->display('profiles/profile.tpl');
	
?>
