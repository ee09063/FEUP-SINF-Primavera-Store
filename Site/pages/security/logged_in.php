<?php
	if(!isset($_SESSION['user_id'])) {
		$_SESSION['error_messages'][] = 'Denied access: login to access content.';
		header('Location: ' . $BASE_URL);
		exit;
	}
?>