<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/products.php');

	if(!isset($_GET['product_id'])) {
		$_SESSION['error-messages'][] = 'Denied access: invalid variables.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	$data['product_id'] = $_GET['product_id'];

	try {
		$info['armazens'] = getWarehouseList($data['product_id']);
		$info['product'] = getProductInfo($data);
	}
	catch(PDOException $e) {
		$_SESSION['error_messages'][] = $_SESSION['user_error_message'];
		header('Location: ' . $_SERVER['HTTP_REFERER']);	
		exit;		
	}

	$smarty->assign('info', $info);
	$smarty->assign('PAGE', 'warehouse_list');
	$smarty->assign('TITLE', 'Warehouse List');
	
	$smarty->display('products/stock.tpl');
?>