<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:15:12
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\products\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25153567180003dcf47-42259571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a29ef826138cbb27bb322e0af302dd56b5687f0' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\products\\view.tpl',
      1 => 1450263854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25153567180003dcf47-42259571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'info' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56718000a36038_84154577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56718000a36038_84154577')) {function content_56718000a36038_84154577($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('errors/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('success/success.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Products</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?category=<?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Categoria'];?>
"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Categoria'];?>
</a></li>
				<li class="active"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Nome'];?>
</li>
			</ol>
		</div>
		<div class="col-sm-12 col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 product-img-mid">
							<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/products/<?php echo $_smarty_tpl->tpl_vars['info']->value['image'];?>
" alt="" title="product image"/>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-6">
							<label><h1><?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Nome'];?>
</h1></label>
							<p><b>Author:</b> <?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Autor'];?>
</p>
							<p><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Codigo'];?>
</p>
							<p><?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Sumario'];?>
</p>
							<p><?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Descricao'];?>
</p>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2">
							<label class="form-control"><b>Price:</b> <?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Preco_IVA'];?>
<span class="glyphicon glyphicon-eur"></span></label>
							<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/add.php?codArtigo=<?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Codigo'];?>
&quantidade=1">
								<button class="btn btn-primary btn-block">Add to Cart</button>
								</a>
							</p>
							<?php if ($_smarty_tpl->tpl_vars['info']->value['product']['In_Cart']) {?>
								<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/remove.php?codArtigo=<?php echo $_smarty_tpl->tpl_vars['product']->value['Codigo'];?>
">
									<button class="btn btn-primary btn-block">Remove from Cart</button></a>
								</p>
							<?php }?>
							<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/stock.php?product_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['product']['Codigo'];?>
"><button class="btn btn-primary btn-block">Check Stock</button></a></p>
							<?php if (!$_smarty_tpl->tpl_vars['info']->value['product']['Stock']>0) {?>
								<div class="alert alert-danger text-center" role="alert">
									<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									<span class="sr-only">Error:</span>
										Not in stock
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
