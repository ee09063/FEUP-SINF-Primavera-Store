<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:22:27
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\success\success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2931567181b3df5348-72448124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf10222502f1ba4cb26b5e96f8df86ad91aa9305' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\success\\success.tpl',
      1 => 1447530110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2931567181b3df5348-72448124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SUCCESS_MESSAGES' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567181b3ed2750_25399026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567181b3ed2750_25399026')) {function content_567181b3ed2750_25399026($_smarty_tpl) {?><?php if ((count($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)>0)) {?>
<div class="container">
	<div class="row">
		<div class="hidden-xs col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-default breadcrumb">
				<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
					<div class="panel-title text-center good">
						<span class="glyphicon glyphicon-exclamation-sign"></span> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

					</div>
				<?php } ?>
			</div>
		</div>
		<div class="hidden-xs col-sm-3"></div>
	</div>
</div>
<?php }?>
<?php }} ?>
