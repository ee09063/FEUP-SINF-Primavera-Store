<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:22:27
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\profiles\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6704567181b3f040c0-64336448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd677c9efecc3698d2c94928cf85f936f94a9764a' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\profiles\\sidebar.tpl',
      1 => 1449391539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6704567181b3f040c0-64336448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567181b4508333_58999033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567181b4508333_58999033')) {function content_567181b4508333_58999033($_smarty_tpl) {?><div class="panel panel-default">
	<ul class="nav nav-sidebar hidden-xs">		
		<li role="presentation">
			<?php if ($_smarty_tpl->tpl_vars['PAGE']->value=='profile') {?>
				<a class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a>
			<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/profiles/profile.php"><span class='glyphicon glyphicon-user' aria-hidden="true"></span> Profile</a>
			<?php }?>
		</li>
		<li>
			<?php if ($_smarty_tpl->tpl_vars['PAGE']->value=='cart') {?>
				<a class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cart </a>
			<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/view.php"><span class='glyphicon glyphicon-user' aria-hidden="true"></span> Cart </a>
			<?php }?>
		</li>
		<li><a class="link" onclick="onSidebarMenuClicked(this, 'products');"><span class='glyphicon glyphicon-th-large' aria-hidden="true"></span> Orders <span class="caret"></span></a></li>
		<li class="products hidden text-center">
			<?php if ($_smarty_tpl->tpl_vars['PAGE']->value=='active_orders') {?>
				<a class="active">Active Orders</a>
			<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/profiles/orders.php?filter=active">Active Orders</a>
			<?php }?>
		</li>
		<li class="products hidden text-center">
			<?php if ($_smarty_tpl->tpl_vars['PAGE']->value=='inactive_orders') {?>
				<a class="active">Inactive Orders</a>
			<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/profiles/orders.php?filter=inactive">Inactive Orders</a>
			<?php }?>
		</li>
		<li class="products hidden text-center">
			<?php if ($_smarty_tpl->tpl_vars['PAGE']->value=='all_orders') {?>
				<a class="active">All Orders</a>
			<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/profiles/orders.php?filter=all">All Orders</a>
			<?php }?>
		</li>
	</ul>
	<ul class="nav nav-sidebar hidden-sm hidden-md hidden-lg">		
		<li>
			<div class="dropdown sidebar-select">
				<button class="btn btn-default dropdown-toggle" type="button" id="profileDropdown" data-toggle="dropdown" aria-expanded="true">
					My profile
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="profileDropdown">
					<li role="presentation">
						<?php if ($_smarty_tpl->tpl_vars['PAGE']->value=='profile') {?>
							<a role="menuitem" tabindex="-1" class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a>
						<?php } else { ?>
							<a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/profiles/profile.php"><span class='glyphicon glyphicon-user' aria-hidden="true"></span> Profile</a>
						<?php }?>
					</li>
					<li role="presentation" class="divider"></li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['PAGE']->value=='cart') {?>
							<a role="menuitem" tabindex="-1" class="active"><span class='glyphicon glyphicon-tag' aria-hidden="true"></span> Cart </a>
						<?php } else { ?>
							<a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/view.php"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Cart </a>
						<?php }?>
					</li>
					<li role="presentation" class="divider"></li>
					<li role="presentation">
						<?php if ($_smarty_tpl->tpl_vars['PAGE']->value=='orders') {?>
							<a role="menuitem" tabindex="-1" class="active"><span class='glyphicon glyphicon-th-large' aria-hidden="true"></span> Orders</a>
						<?php } else { ?>
							<a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/orders/list.php"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Orders </a>
						<?php }?>
					</li>
				</ul>
			</div>
		</li>
	</ul>
</div><?php }} ?>
