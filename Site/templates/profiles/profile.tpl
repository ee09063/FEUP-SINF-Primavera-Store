{include file='common/header.tpl'}
{include file='errors/errors.tpl'}
{include file='success/success.tpl'}

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="{$BASE_URL}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</li>
			</ol>
		</div>
		<div class="col-sm-4 col-md-3 col-lg-2">
			{include file='profiles/sidebar.tpl'}
		</div>
		<div class="col-sm-8 col-md-9 col-lg-10">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="page-header">Welcome, <b>{$info.username}</b></h2>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="{$BASE_URL}actions/profiles/update.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-8 col-md-10 col-lg-10 col-sm-offset-2 col-md-offset-1 col-lg-offset-1">
								<div class="form-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cliente Code </span>
									<input type="text" class="form-control form-profile" value='{$info.CodCliente}' name="code" readonly>
								</div>
								<div class="form-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Name </span>
									<input type="text" maxlength="50" class="form-control form-profile" value='{$info.NomeCliente}' name="name">
								</div>
								<div class="form-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Contact </span>
									<input type="text" maxlength="30" class="form-control form-profile" value='{$info.Contacto}' name="contact">
								</div>
								<div class="form-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Address </span>
									<input type="text" maxlength="100" class="form-control form-profile" value='{$info.Morada}' name="address">
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

<script src='{$BASE_URL}javascript/profiles.js'></script>

{include file='common/footer.tpl'}