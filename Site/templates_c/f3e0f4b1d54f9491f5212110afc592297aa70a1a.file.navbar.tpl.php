<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:22:27
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\common\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26052567181b37e0cf2-06918786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3e0f4b1d54f9491f5212110afc592297aa70a1a' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\common\\navbar.tpl',
      1 => 1449838308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26052567181b37e0cf2-06918786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'CART_N' => 0,
    'USERNAME' => 0,
    'USER_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567181b3a80328_55575249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567181b3a80328_55575249')) {function content_567181b3a80328_55575249($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('search/search_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="collapse navbar-collapse" id="navbar-collapse-top">	
	<ul class="nav navbar-nav navbar-left">
		<li>
			<a class="navbar-brand hidden-xs" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="Homepage"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		</li>
		<li>
			<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php" class="navbar-form" method="GET" id="navbar-search-form" role="search" enctype="multipart/form-data">
				<input type="text" maxlength="30" id="navbar-search" name="query" value="" class="form-control" title="Search for a product" placeholder="Search for..." required="required" >
				<input type="submit" class="form-control hidden" value="Search">
			</form>
		</li>
		<li>
			<a id="advanced-search" title="Create more specific searches" data-toggle="modal" data-target="#search-modal"><span class="glyphicon glyphicon-search"></span> Advanced</a>
		</li>
	</ul>
	
	<ul class="nav navbar-nav navbar-right">
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/view.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Cart (<?php echo $_smarty_tpl->tpl_vars['CART_N']->value;?>
)</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value&&$_smarty_tpl->tpl_vars['USER_ID']->value) {?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/profiles/profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</a>
			</li>					
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/authentication/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
			</li>
		<?php } else { ?>
			<li>
				<a class="link" data-toggle="modal" data-target="#login-modal">
					<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a>
			</li>					
			<li>
				<a class="link" data-toggle="modal" data-target="#register-modal">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Register</a>
			</li>
		<?php }?>
	</ul>
</div><?php }} ?>
