<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:22:27
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\errors\errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15330567181b3c017b1-97587804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c160a59ca9abfd4a9b57c93fdcfb387ed20d5af' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\errors\\errors.tpl',
      1 => 1433782750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15330567181b3c017b1-97587804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'FIELD_ERRORS' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567181b3dc76e0_89612259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567181b3dc76e0_89612259')) {function content_567181b3dc76e0_89612259($_smarty_tpl) {?><?php if ((count($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)>0||count($_smarty_tpl->tpl_vars['FIELD_ERRORS']->value)>0)) {?>
<div class="container">
	<div class="row">
		<div class="hidden-xs col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-default breadcrumb">
				<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
					<div class="panel-title text-center error">
						<span class="glyphicon glyphicon-exclamation-sign" style="color:orange;"></span> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

					</div>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
					<div class="panel-title text-center warning">
						<span class="glyphicon glyphicon-warning-sign" style="color:orange;"></span> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

					</div>
				<?php } ?>
			</div>
		</div>
		<div class="hidden-xs col-sm-3"></div>
	</div>
</div>
<?php }?>
<?php }} ?>
