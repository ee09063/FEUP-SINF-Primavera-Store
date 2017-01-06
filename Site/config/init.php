<?php
  session_set_cookie_params(3600, 'http://127.0.0.1:8080/projects/sinf/');
  session_start();

  error_reporting(E_ERROR | E_WARNING);

  $BASE_DIR = 'C:/PROGRA~1/EASYPH~1.1VC/data/localweb/projects/sinf/';
  $BASE_URL = 'http://127.0.0.1:8080/projects/sinf/';
  $API_URL = 'http://localhost:49286/api/';

  $conn = new PDO("sqlite:C:/PROGRA~1/EASYPH~1.1VC/data/localweb/projects/sinf/SINF.db");
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->force_compile = true;
  
  $smarty->assign('BASE_URL', $BASE_URL);
  $smarty->assign('API_URL', $API_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);
  $smarty->assign('USER_ID', $_SESSION['user_id']);
  $smarty->assign('USER_STATUS', $_SESSION['user_status']);
  $smarty->assign('TITLE', $_SESSION['Bookstore']);
  $smarty->assign('PAGE', 'homepage');
 
  $smarty->assign('CART_N', count($_SESSION['cart']));
  
  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
