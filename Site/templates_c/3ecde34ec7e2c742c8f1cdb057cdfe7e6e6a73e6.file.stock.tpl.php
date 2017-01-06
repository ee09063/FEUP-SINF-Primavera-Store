<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:15:33
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\products\stock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3116656718015a18e18-69818762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ecde34ec7e2c742c8f1cdb057cdfe7e6e6a73e6' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\products\\stock.tpl',
      1 => 1449391124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3116656718015a18e18-69818762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'info' => 0,
    'warehouse' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567180160482e1_40921449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567180160482e1_40921449')) {function content_567180160482e1_40921449($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('errors/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?category=<?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Categoria'];?>
"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Categoria'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?category=<?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Codigo'];?>
"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Nome'];?>
</a></li>
				<li class="active"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Stock</li>
				
			</ol>
		</div>
		<div class="col-sm-12 col-md-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<?php if (count($_smarty_tpl->tpl_vars['info']->value['armazens'])>0) {?>
							<?php  $_smarty_tpl->tpl_vars['warehouse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warehouse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['armazens']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->key => $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->_loop = true;
?>
								<div class="panel-body product-item">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12">
											<p class="product-title-short"><b class="text"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value['Nome'];?>
</b>
											</p>
											<p><b>Address: </b><?php echo $_smarty_tpl->tpl_vars['warehouse']->value['Morada'];?>
</p>
											<p><b>Contact: </b><?php echo $_smarty_tpl->tpl_vars['warehouse']->value['Telefone'];?>
</p>
											<p><b>Items in stock: </b><?php echo $_smarty_tpl->tpl_vars['warehouse']->value['Stock'];?>
</p>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php } else { ?>
							<div class="panel-body product-item">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<p class="product-title-short"><b class="text">No stock</b>
									</div>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
