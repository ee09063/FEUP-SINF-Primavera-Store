<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/products.php');
	include_once($BASE_DIR . 'database/cart.php');
	
	if(!isset($_SESSION['user_id'])) {
		$username = 'Guest';
	} else {
		$username = $_SESSION['user_id'];
	}
	
	$info['username'] = $username;
	$total = 0;
	if(count($_SESSION['cart']) > 0){
		$info['cart'] = array_map("unserialize", array_unique(array_map("serialize", $_SESSION['cart'])));
		foreach($info['cart'] as &$item){
			$item['Preco_IVA'] = number_format($item['Preco'] * (1.0 + intval($item['IVA'])/100.0),2);
			$total = ($total + $item['Preco_IVA']) * $item['Quantidade'];
		}
	}
	
	$info['total'] = $total;
	
	$smarty->assign('info', $info);
	$smarty->assign('PAGE', 'product_view');
	$smarty->assign('TITLE', 'Cart of ' . $username);
	
	$smarty->display('cart/view.tpl');
	
?>