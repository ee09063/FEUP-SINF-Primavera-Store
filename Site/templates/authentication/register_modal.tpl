<div class="modal fade" id="register-modal" role="dialog" aria-labelledby="register-modal-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="register-modal-label">Register</h4>
			</div>
			<form role="form" id="modal-register-form" method="POST" action="{$BASE_URL}actions/authentication/register.php">
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
</div>