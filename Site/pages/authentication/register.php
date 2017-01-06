<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/authentication.php');

	if(isset($_SESSION['user_id'])) {
		header('Location: ' . $BASE_URL . 'pages/profiles/profile.php');
		exit;
	}
	
	$smarty->assign('PAGE', 'register');
	$smarty->assign('TITLE','Register');
	
	$smarty->display('authentication/register.tpl');
?>
