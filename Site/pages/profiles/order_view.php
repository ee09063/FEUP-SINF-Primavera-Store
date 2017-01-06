<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/security/registered.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/products.php');
	
	if(!isset($_GET['order_id'])) {
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	
	$data['order_id'] = $_GET['order_id'];
	
	$info = APIGetOrderInfo($data);
	
	$smarty->assign('info', $info);
	$smarty->assign('PAGE', 'order_view');
	$smarty->assign('TITLE', 'Order ' . $data['order_id']);
	
	$smarty->display('profiles/order_view.tpl');
?>