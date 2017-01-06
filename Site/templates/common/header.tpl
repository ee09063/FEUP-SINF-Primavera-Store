<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>{$TITLE}</title>
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Advent+Pro:400,600,700"  type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		
		<link rel="stylesheet" href="{$BASE_URL}css/style.css">
		
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
		
	</head>
	
	<body>
		<div class="container-fluid header">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand hidden-sm hidden-md hidden-lg" href="{$BASE_URL}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
				</div>
				{if !$USERNAME || !$USER_ID}
					{include file='authentication/login_modal.tpl'}
					{include file='authentication/register_modal.tpl'}
				{/if}
				{include file='common/navbar.tpl'}
			</nav>
		</div>