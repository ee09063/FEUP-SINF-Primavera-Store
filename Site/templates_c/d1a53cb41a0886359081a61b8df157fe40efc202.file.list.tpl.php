<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:15:03
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\products\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21156717ff746f328-13528599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1a53cb41a0886359081a61b8df157fe40efc202' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\products\\list.tpl',
      1 => 1450119093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21156717ff746f328-13528599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'info' => 0,
    'category' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56717ff7c25dd3_23533008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56717ff7c25dd3_23533008')) {function content_56717ff7c25dd3_23533008($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('errors/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('success/success.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<?php if ($_smarty_tpl->tpl_vars['info']->value['has_category']) {?>
					<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['info']->value['category_id']) {?>
							<li class="active"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</li>
						<?php }?>
					<?php } ?>
				<?php } else { ?>
					<li class="active"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Products</li>
				<?php }?>
				
			</ol>
		</div>
		<div class="col-sm-3 col-md-2">
			<?php echo $_smarty_tpl->getSubTemplate ('products/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<div class="col-sm-9 col-md-10">
			<div class="row">
				<div class="col-sm-12">
				<?php if (!$_smarty_tpl->tpl_vars['info']->value['empty']&&count($_smarty_tpl->tpl_vars['info']->value['products'])>0) {?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<label>Filter by title:</label>
							<input type="text" maxlength="20" oninput="filterProducts();" id="filter-box" class="form-control" title="Insert keywords to filter the list" placeholder="Insert keywords..."/>
						</div>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/view.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['Codigo'];?>
">
								<div class="panel-body product-item">
									<div class="row">
										<div class="col-xs-4 col-sm-3 col-md-2 product-img-short">				
											<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/products/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="" title="product image"/>
										</div>
										<div class="col-xs-5 col-sm-6 col-md-7">
											<p class="product-title-short"><b class="text"><?php echo $_smarty_tpl->tpl_vars['product']->value['Nome'];?>
</b></p>
											<p><b>Author: </b><?php echo $_smarty_tpl->tpl_vars['product']->value['Autor'];?>
</p>
											<p><b>Ref: </b><?php echo $_smarty_tpl->tpl_vars['product']->value['Codigo'];?>
</p>
											<p><?php echo $_smarty_tpl->tpl_vars['product']->value['Sumario'];?>
</p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 text-center">
											<p class="product-price"><b><?php echo $_smarty_tpl->tpl_vars['product']->value['Preco_IVA'];?>
 €</b></p>
											<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/add.php?codArtigo=<?php echo $_smarty_tpl->tpl_vars['product']->value['Codigo'];?>
&quantidade=1">
												<button class="btn btn-primary" style="height:2em; width:10em">Add to Cart</button></a>
											</p>
											<?php if ($_smarty_tpl->tpl_vars['product']->value['In_Cart']) {?>
											<p><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/remove.php?codArtigo=<?php echo $_smarty_tpl->tpl_vars['product']->value['Codigo'];?>
">
												<button class="btn btn-primary" style="height:2em; width:10em">Remove from Cart</button></a>
											</p>
											<?php }?>
											<?php if (!$_smarty_tpl->tpl_vars['product']->value['Stock']>0) {?>
												<div class="alert alert-danger" role="alert" >
													<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
													<span class="sr-only">Error:</span>
														Not in stock
												</div>
											<?php }?>
										</div>
									</div>
								</div>
							</a>
						<?php } ?>
					</div>
					<?php } else { ?>
					<div class="panel panel-default">
						<div class="panel-heading text-center">
							<label>No products found</label>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>

<script src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/products.js'></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
