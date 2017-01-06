<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/cart.php');
	include_once($BASE_DIR . 'database/products.php');
	
	$product_id = $_GET['codArtigo'];
	$index = 0;
	foreach($_SESSION['cart'] as &$item){
		if($item['Codigo'] == $product_id){
			unset($_SESSION['cart'][$index]);
			$_SESSION['cart'] = array_values($_SESSION['cart']);
			$_SESSION['success_messages'][] = $_GET['codArtigo'] . ' removed from Cart';
		}
		$index++;
	}
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>