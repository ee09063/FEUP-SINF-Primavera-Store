<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'pages/info/navbar.php');
	include_once($BASE_DIR . 'database/categories.php');

	$info['categories'] = getAllCategories();

	$smarty->assign('info', $info);
	$smarty->assign('PAGE', 'homepage');
	$smarty->assign('TITLE', 'Bookstore - Homepage');
	
	$smarty->display('homepage/homepage.tpl')
?>