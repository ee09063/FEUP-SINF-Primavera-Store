<div class="modal fade" id="login-modal" role="dialog" aria-labelledby="login-modal-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="login-modal-label">Login</h4>
			</div>
			<form role="form" id="modal-login-form" method="POST" action="{$BASE_URL}actions/authentication/login.php">
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
</div>