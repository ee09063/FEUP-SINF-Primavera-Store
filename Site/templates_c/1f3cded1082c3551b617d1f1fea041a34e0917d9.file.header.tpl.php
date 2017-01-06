<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:22:27
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14551567181b3600286-66023892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f3cded1082c3551b617d1f1fea041a34e0917d9' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\common\\header.tpl',
      1 => 1449390580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14551567181b3600286-66023892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'USER_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567181b37b6d93_68934907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567181b37b6d93_68934907')) {function content_567181b37b6d93_68934907($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Advent+Pro:400,600,700"  type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css">
		
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
		
	</head>
	
	<body>
		<div class="container-fluid header">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand hidden-sm hidden-md hidden-lg" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
				</div>
				<?php if (!$_smarty_tpl->tpl_vars['USERNAME']->value||!$_smarty_tpl->tpl_vars['USER_ID']->value) {?>
					<?php echo $_smarty_tpl->getSubTemplate ('authentication/login_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php echo $_smarty_tpl->getSubTemplate ('authentication/register_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
				<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</nav>
		</div><?php }} ?>
