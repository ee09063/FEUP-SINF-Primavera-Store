<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:22:27
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\profiles\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28758567181b313b740-16347042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4359f865b7db6fcecb68f9e6e9ff4d8b51bf5c49' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\profiles\\orders.tpl',
      1 => 1450129966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28758567181b313b740-16347042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'info' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567181b35c6f05_81880942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567181b35c6f05_81880942')) {function content_567181b35c6f05_81880942($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\sinf\\lib\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('errors/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('success/success.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Orders</li>
			</ol>
		</div>
		<div class="col-sm-4 col-md-3 col-lg-2">
			<?php echo $_smarty_tpl->getSubTemplate ('profiles/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<div class="col-sm-6 col-md-7 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="page-header">Orders of <b><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
</b></h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<?php if (!$_smarty_tpl->tpl_vars['info']->value['empty']) {?>
						<table class="table table-bordered">
						<tr>
							<th>Ref</th>
							<th>Total</th>
							<th>Date</th>
							<th>State</th>
						</tr>				
						<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
							<tr class="product-item">
								<td class="clickable product-title">
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/profiles/order_view.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order']->value['NumDoc'];?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['NumDoc'];?>
</a>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['order']->value['TotalMerc'];?>
 €</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['Data'],'%Y-%m-%d');?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['order']->value['Estado'];?>
</td>
							</tr>
						<?php } ?>
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
	</div>
</div>

<script src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/profiles.js'></script>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
