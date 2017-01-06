<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:15:04
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\products\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1415556717ff8645ca5-16068284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9d96c3bf3a0994f62402978356db108ba03bab' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\products\\sidebar.tpl',
      1 => 1450200339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1415556717ff8645ca5-16068284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'info' => 0,
    'category' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56717ff8937042_50356067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56717ff8937042_50356067')) {function content_56717ff8937042_50356067($_smarty_tpl) {?><div class="panel panel-default">
	<ul class="nav nav-sidebar hidden-xs">
		<li class="title text-center"><label>Categories</label></li>
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['category_id']==$_smarty_tpl->tpl_vars['category']->value) {?>
				<li><a class="active"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a></li>
			<?php } else { ?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?category=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a></li>
			<?php }?>	
		<?php } ?>
	</ul>
	<ul class="nav nav-sidebar hidden-sm hidden-md hidden-lg">
		<li>
			<div class="dropdown sidebar-select">
				<button class="btn btn-default dropdown-toggle" type="button" id="categoryDropdown" data-toggle="dropdown" aria-expanded="true">
					Categories
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="categoryDropdown">
					<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['info']->value['category_id']==$_smarty_tpl->tpl_vars['category']->value) {?>
							<li><a class="active"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a></li>
						<?php } else { ?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?category=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a></li>
						<?php }?>	
					<?php } ?>
				</ul>
			</div>
		</li>
	</ul>
</div><?php }} ?>
