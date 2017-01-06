<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:18:20
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\cart\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16118567180bc65cfb8-77773059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07f0c01aca0d8d56898e23b93b510491f1ade673' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\cart\\view.tpl',
      1 => 1449233615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16118567180bc65cfb8-77773059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USER_ID' => 0,
    'info' => 0,
    'CART_N' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567180bcb6ebb8_26383217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567180bcb6ebb8_26383217')) {function content_567180bcb6ebb8_26383217($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('errors/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('success/success.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cart</li>
			</ol>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['USER_ID']->value) {?>
			<div class="col-sm-4 col-md-3 col-lg-2">
				<?php echo $_smarty_tpl->getSubTemplate ('profiles/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
		<?php } else { ?>
			<div class="col-sm-4 col-md-3 col-lg-2">
				
			</div>
		<?php }?>
		<div class="col-sm-6 col-md-7 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="page-header">Cart of <b><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
</b></h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<?php if ($_smarty_tpl->tpl_vars['CART_N']->value>0) {?>
						<table class="table table-bordered">
						<tr>
							<th>Ref</th>
							<th>Title</th>
							<th>Price</th>
							<th>Quantity</th>
							<th></th>
						</tr>
						<style type="text/css">
							.asd {
								background:rgba(0,0,0,0);
								border:none;
							}
						</style>
						<form role="form"  id="cart_form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/order.php" enctype="multipart/form-data">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['cart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<tr class="auction-item">
								<td><?php echo $_smarty_tpl->tpl_vars['product']->value['Codigo'];?>
</td>
								<td class="clickable auction-title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/view.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['Codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['Nome'];?>
</a></td>
								<td><?php echo $_smarty_tpl->tpl_vars['product']->value['Preco_IVA'];?>
 €</td>
								<td><?php echo $_smarty_tpl->tpl_vars['product']->value['Quantidade'];?>
</td>
								<td class="clickable auction-title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/remove.php?codArtigo=<?php echo $_smarty_tpl->tpl_vars['product']->value['Codigo'];?>
">Remove</a></td>
							</tr>
						<?php } ?>
						</form>
					</table>
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
		<div class="col-sm-4 col-md-3 col-lg-2">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<label>Total : <?php echo $_smarty_tpl->tpl_vars['info']->value['total'];?>
 €</label>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['CART_N']->value>0) {?>
					<div class="panel-body text-center">
						<p><a id="complete_order" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/order.php"><button class="btn btn-primary">Confirm Order</button></a></p>
					</div>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['USER_ID']->value) {?>
						<div class="panel-body text-center">
							<p><a href="#"><button class="btn btn-primary" disabled>Confirm Order</button></a></p>
						</div>
					<?php } else { ?>
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<label>Guest Account</label>
							</div>
						</div>
					<?php }?>
				<?php }?>
			</div>
		</div>
	</div>
</div>

<script src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/profiles.js'></script>
<script src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/cart.js'></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
