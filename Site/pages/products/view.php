<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/products.php');
	include_once($BASE_DIR . 'database/profiles.php');
	
	if(!isset($_GET['product_id'])) {
		$_SESSION['error-messages'][] = 'Denied access: invalid variables.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	$data['product_id'] = $_GET['product_id'];
	
	if(isset($_SESSION['user_id'])) {
		$info['login'] = FALSE;
	}

	try {
		$info['product'] = getProductInfo($data);
		$info['image'] = getProductImage($data['product_id']);
		$result = explode('|',$info['product']['Desc']);
		$info['product']['Sumario'] = $result[0];
		$info['product']['Descricao'] = $result[1];
		$info['product']['Preco_IVA'] = number_format($info['product']['Preco'] * (1.0 + intval($info['product']['IVA'])/100.0),2);
		$info['product']['In_Cart'] = ProductInCart($data['product_id']);
		if(!$info['product']) {
			$_SESSION['error_messages'][] = 'Error: no data to display.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
		
		$data['user_id'] = $_SESSION['user_id'];
		$data['product_id'] = $info['product']['Codigo'];
	}
	catch(PDOException $e) {
		$_SESSION['error-messages'][] = $_SESSION['user_error_message'];
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

	$smarty->assign('info', $info);
	$smarty->assign('PAGE', 'product_view');
	$smarty->assign('TITLE', $info['product']['Nome']);
	
	$smarty->display('products/view.tpl');
?>