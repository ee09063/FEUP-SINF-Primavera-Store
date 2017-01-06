<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:22:20
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\profiles\order_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28542567181ac237394-78787195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba1292e62f8782efd2d8cc5b9c0a9ed032fbf417' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\profiles\\order_view.tpl',
      1 => 1450130004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28542567181ac237394-78787195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'info' => 0,
    'USER_ID' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567181ac71a720_79972561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567181ac71a720_79972561')) {function content_567181ac71a720_79972561($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\sinf\\lib\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('errors/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('success/success.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/profiles/orders.php?filter=all"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Orders</a></li>
				<li class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Order <?php echo $_smarty_tpl->tpl_vars['info']->value['NumDoc'];?>
</li>
			</ol>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['USER_ID']->value) {?>
			<div class="col-sm-4 col-md-3 col-lg-2">
				<?php echo $_smarty_tpl->getSubTemplate ('profiles/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
		<?php }?>
		<div class="col-sm-6 col-md-7 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="page-header">Order <b><?php echo $_smarty_tpl->tpl_vars['info']->value['NumDoc'];?>
</b></h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-7 col-md-7 col-lg-7">
						<p><b>Order Id:</b><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</p>
						<p><b>Document Nº: </b><?php echo $_smarty_tpl->tpl_vars['info']->value['NumDoc'];?>
</p>
						<p><b>Order State: </b><?php echo $_smarty_tpl->tpl_vars['info']->value['Estado'];?>
</p>
						<p><b>Order Date: </b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['Data'],'%Y-%m-%d');?>
</p>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3 text-left">
						<p><b>Order Total: </b><?php echo $_smarty_tpl->tpl_vars['info']->value['TotalMerc'];?>
 €</p>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<table class="table table-bordered">
						<tr>
							<th>Ref</th>
							<th>Title</th>
							<th>Price</th>
							<th>Quantity</th>
						</tr>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['LinhasDoc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<tr class="auction-item">
								<td><?php echo $_smarty_tpl->tpl_vars['product']->value['CodArtigo'];?>
</td>
								<td class="clickable product-title">
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/view.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['CodArtigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['DescArtigo'];?>
</a>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['product']->value['PrecoUnitario'];?>
 €</td>
								<td><?php echo $_smarty_tpl->tpl_vars['product']->value['Quantidade'];?>
</td>
							</tr>
						<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/profiles.js'></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
