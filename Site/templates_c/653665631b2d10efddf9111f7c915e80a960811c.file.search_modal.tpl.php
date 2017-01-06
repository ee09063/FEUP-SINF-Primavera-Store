<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:22:27
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\search\search_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15533567181b3aadf95-85220740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '653665631b2d10efddf9111f7c915e80a960811c' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\search\\search_modal.tpl',
      1 => 1450259648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15533567181b3aadf95-85220740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567181b3bc8420_57154762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567181b3bc8420_57154762')) {function content_567181b3bc8420_57154762($_smarty_tpl) {?><div class="modal fade" id="search-modal" role="dialog" aria-labelledby="search-modal-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="search-modal-label">Advanced Search</h4>
			</div>
			<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php" method="GET" id="modal-search-form" role="search" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-8">
							<div class="form-group">
								<label for="search-modal-query">Title</label>
								<input class="form-control" type="text" maxlength="40" id="search-modal-query" name="query" value="" alt="Search field" title="Search field" placeholder="Search for...">
							</div>
						</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="search-modal-category">Category</label>
							<select class="form-control" form="modal-search-form" id="search-modal-category" name="category">
								<option value="">Category</option>
								<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
