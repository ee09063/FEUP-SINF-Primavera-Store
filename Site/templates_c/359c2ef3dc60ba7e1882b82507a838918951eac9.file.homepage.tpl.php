<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:10:51
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\homepage\homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:498056717efb9c0341-49841670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '359c2ef3dc60ba7e1882b82507a838918951eac9' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\homepage\\homepage.tpl',
      1 => 1447690531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498056717efb9c0341-49841670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'BASE_URL' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56717efbc63675_34456311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56717efbc63675_34456311')) {function content_56717efbc63675_34456311($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('errors/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('success/success.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-sm-12" id="category-grid">
			<div class="page-header">
				<h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> SINF Bookstore</h1>
				<h4 class="hidden-xs">Just what you were looking for!</h4>
			</div>
			<div class="row">
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
				<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?category=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" class="thumbnail" title="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">
							<img class="png" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/homepage/<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
"/>
							<p><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</p>
						</a>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
