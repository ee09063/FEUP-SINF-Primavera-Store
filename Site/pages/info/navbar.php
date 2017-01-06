<?php
	include_once($BASE_DIR . 'database/categories.php');
	
	try {
		$categories = getAllCategories();
	}
	catch(PDOException $e) {
		$_SESSION['error_messages'][] = 'Could not load categories list.';
	}
	
	$smarty->assign('categories', $categories);
?>