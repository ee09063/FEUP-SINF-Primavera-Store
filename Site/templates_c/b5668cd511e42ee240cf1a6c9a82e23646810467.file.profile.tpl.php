<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:22:07
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\profiles\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140305671819fd99a73-70946309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5668cd511e42ee240cf1a6c9a82e23646810467' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\profiles\\profile.tpl',
      1 => 1449235059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140305671819fd99a73-70946309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_567181a0120c04_57609887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567181a0120c04_57609887')) {function content_567181a0120c04_57609887($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('errors/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('success/success.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</li>
			</ol>
		</div>
		<div class="col-sm-4 col-md-3 col-lg-2">
			<?php echo $_smarty_tpl->getSubTemplate ('profiles/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<div class="col-sm-8 col-md-9 col-lg-10">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="page-header">Welcome, <b><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
</b></h2>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/profiles/update.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-8 col-md-10 col-lg-10 col-sm-offset-2 col-md-offset-1 col-lg-offset-1">
								<div class="form-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cliente Code </span>
									<input type="text" class="form-control form-profile" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['CodCliente'];?>
' name="code" readonly>
								</div>
								<div class="form-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Name </span>
									<input type="text" maxlength="50" class="form-control form-profile" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['NomeCliente'];?>
' name="name">
								</div>
								<div class="form-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Contact </span>
									<input type="text" maxlength="30" class="form-control form-profile" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['Contacto'];?>
' name="contact">
								</div>
								<div class="form-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Address </span>
									<input type="text" maxlength="100" class="form-control form-profile" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['Morada'];?>
' name="address">
								</div>
								<div class="form-group text-right">
									<input id="save-changes-btn" class="btn btn-success" type="submit" value="Save Changes" name="submit">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/profiles.js'></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
