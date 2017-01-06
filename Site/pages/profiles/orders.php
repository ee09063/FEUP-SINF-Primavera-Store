<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/cart.php');
	
	if(!isset($_SESSION['user_id'])) {
		$_SESSION['error-messages'][] = 'Denied access';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	$filter = $_GET['filter'];
	
	$info['filter'] = $filter;
	
	try {
		$orders = APIGetClientOrders($info);
	}
	catch(PDOException $e) {
		$_SESSION['error-messages'][] = $_SESSION['user_error_message'];
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	$filtered_orders = array();
	
	foreach($orders as $order){
		if($filter == 'all'){
			array_push($filtered_orders, $order);
		} else if($filter == 'active'){
			if($order['Estado'] == 'Processing'){
				array_push($filtered_orders, $order);
			}
		} else if($filter == 'inactive'){
			if($order['Estado'] == 'Sent'){
				array_push($filtered_orders, $order);
			}
		}
	}
	
	
	$info['username'] = $_SESSION['username'];
	$info['orders'] = $filtered_orders;
	
	
	$smarty->assign('info', $info);
	$smarty->assign('PAGE', 'order_view');
	$smarty->assign('TITLE', 'Orders');
	
	$smarty->display('profiles/orders.tpl');
?>