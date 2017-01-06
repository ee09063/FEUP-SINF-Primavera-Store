<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:16:22
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\authentication\login_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:744756718046b7b8e9-39743787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f02cbeed9d1c76f78ffc6677ead38859d640963' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\authentication\\login_modal.tpl',
      1 => 1447517824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '744756718046b7b8e9-39743787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56718046baca62_87568373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56718046baca62_87568373')) {function content_56718046baca62_87568373($_smarty_tpl) {?><div class="modal fade" id="login-modal" role="dialog" aria-labelledby="login-modal-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="login-modal-label">Login</h4>
			</div>
			<form role="form" id="modal-login-form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/authentication/login.php">
				<div class="modal-body">		
					<div class="form-group">
						<label for="signinUsernameInput">Username</label>
						<input type="text" class="form-control" id="signinUsernameInput" placeholder="Enter your username" name="username" required>
					</div>
					<div class="form-group">
						<label for="signinPasswordInput">Password</label>
						<input type="password" class="form-control" id="signinPasswordInput" placeholder="Password" name="password" required auto-complete="off">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Login</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
