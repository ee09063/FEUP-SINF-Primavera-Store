<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/cart.php');
	include_once($BASE_DIR . 'database/products.php');
	
	$count = count($_SESSION['cart']);
	$data['product_id'] = $_GET['codArtigo'];
	
	$info = getProductInfo($data);
	
	foreach($_SESSION['cart'] as &$product){
		if($product['Codigo'] == $data['product_id']){
			$product['Quantidade']++;
			$_SESSION['cart'] = array_map("unserialize", array_unique(array_map("serialize", $_SESSION['cart'])));
	
			$_SESSION['success_messages'][] = $_GET['codArtigo'] . ' added to Cart';

			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}
	
	$_SESSION['cart'][$count] = $info;
	$_SESSION['cart'][$count]['Quantidade'] = 1;
	$_SESSION['cart'] = array_map("unserialize", array_unique(array_map("serialize", $_SESSION['cart'])));
	
	$_SESSION['success_messages'][] = $_GET['codArtigo'] . ' added to Cart';

	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
?>