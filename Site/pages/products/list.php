<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/products.php');
	
	if(isset($_GET['category'])) {
		$data['category_id'] = $_GET['category'];
		$info['category_id'] = $_GET['category'];
	}
	else {
		$data['category_id'] = 'none';
	}
	
	if(isset($_GET['query'])) {
		$query = $_GET['query'];
		if (ctype_space($query)) {
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		} else {
			$data['query'] = trim($query);
		}
		
	}
	else {
		$data['query'] = 'none';
	}
	
	if($data['query'] == 'none' and $data['category_id'] == 'none'){
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	if(!isset($_GET['category']) && !isset($_GET['query'])) {
		try {
			$info['products'] = getAllProducts();
		}
		catch(PDOException $e) {
			$_SESSION['error-messages'][] = $_SESSION['user_error_message'];
			header('Location: ' . $_SERVER['HTTP_REFERER']);	
			exit;		
		}		
	} else if(isset($data['category_id']) || isset($data['query'])) {
		try {
			$info['products'] = getProductList($data);
		}
		catch(PDOException $e) {
			$_SESSION['error-messages'][] = $_SESSION['user_error_message'];
			header('Location: ' . $_SERVER['HTTP_REFERER']);	
			exit;		
		}		
	}
	
	$productCount = count($info['products']);
	
	if(isset($info['products'])) {
		foreach($info['products'] as &$product) {
			$data['user_id'] = $_SESSION['user_id'];
			try {
				$product['image'] = getProductImage($product['Codigo']);
				$result = explode('|',$product[Desc]);
				$product['Sumario'] = $result[0];
				$product['Descricao'] = $result[1];
				$product['In_Cart'] = ProductInCart($product['Codigo']);
				$product['Preco_IVA'] = number_format($product['Preco'] * (1.0 + intval($product['IVA'])/100.0),2);
			}
			catch(PDOException $e) {
				$_SESSION['error-messages'][] = $_SESSION['user_error_message'];
				header('Location: ' . $_SERVER['HTTP_REFERER']);	
				exit;		
			}
		}
	}
	
	$info['empty'] = ($productCount <= 0);
	$info['has_category'] = (isset($_GET['category']) && ($_GET['category'] |= ''));
	$info['categories'] = getAllCategories();

	$smarty->assign('info', $info);
	$smarty->assign('PAGE', 'products_list');
	$smarty->assign('TITLE', 'Product List');
	
	$smarty->display('products/list.tpl');
?>