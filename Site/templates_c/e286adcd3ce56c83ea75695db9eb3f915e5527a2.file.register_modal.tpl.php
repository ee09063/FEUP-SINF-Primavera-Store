<?php /* Smarty version Smarty-3.1.15, created on 2015-12-16 16:16:22
         compiled from "C:\PROGRA~1\EASYPH~1.1VC\data\localweb\projects\sinf\templates\authentication\register_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:538056718046be54c6-92638073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e286adcd3ce56c83ea75695db9eb3f915e5527a2' => 
    array (
      0 => 'C:\\PROGRA~1\\EASYPH~1.1VC\\data\\localweb\\projects\\sinf\\templates\\authentication\\register_modal.tpl',
      1 => 1450251833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '538056718046be54c6-92638073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56718046c1a2c9_01428057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56718046c1a2c9_01428057')) {function content_56718046c1a2c9_01428057($_smarty_tpl) {?><div class="modal fade" id="register-modal" role="dialog" aria-labelledby="register-modal-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="register-modal-label">Register</h4>
			</div>
			<form role="form" id="modal-register-form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/authentication/register.php">
				<div class="modal-body">
					<div class="form-group">
						<label for="signinUsernameInput">Username</label>
						<input type="text" class="form-control" id="signinUsernameInput" placeholder="Enter username" name="username" required>
					</div>
					<div class="form-group">
						<label for="signinNameInput">Full Name</label>
						<input type="text" class="form-control" id="signinNameInput" placeholder="Enter your full name" name="name" required>
					</div>
					<div class="form-group">
						<label for="signinEmailInput">Email</label>
						<input type="email" class="form-control" id="signinEmailInput" placeholder="Enter email" name="email" required>
					</div>
					<div class="form-group passwords">
						<label for="signinPasswordInput">Password</label>
						<input type="password" class="form-control" id="signinPasswordInput" placeholder="Password" name="password" required autocomplete="off" oninput="checkPasswords();" maxlength="64" data-toggle="tooltip" data-placement="top" title="Password must start with a lowercase letter, have 6 or more characters and contain at least one number.">
						<p></p>
						<input type="password" class="form-control" id="signinConfirmPasswordInput" placeholder="Confirm Password" name="confirmationPassword" required autocomplete="off" oninput="checkPasswords();" maxlength="64">
					</div>
					<div class="form-group">
						<label for="signinAddressInput">Address</label>
						<input type="text" class="form-control" id="signinAddressInput" placeholder="Enter your address" name="address" required>
					</div>
					<div class="form-group">
						<label for="signinNIFInput">NIF</label>
						<input type="text" class="form-control" id="signinNIFInput" placeholder="Enter your NIF" name="nif" required onkeypress="return isNumberKey(event);" maxlength="9">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" id="submit-registration-btn" onclick="validateForm(this, event);">Register</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
