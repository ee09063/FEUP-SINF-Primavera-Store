{include file='search/search_modal.tpl'}

<div class="collapse navbar-collapse" id="navbar-collapse-top">	
	<ul class="nav navbar-nav navbar-left">
		<li>
			<a class="navbar-brand hidden-xs" href="{$BASE_URL}" title="Homepage"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		</li>
		<li>
			<form action="{$BASE_URL}pages/products/list.php" class="navbar-form" method="GET" id="navbar-search-form" role="search" enctype="multipart/form-data">
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
			<a href="{$BASE_URL}pages/cart/view.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Cart ({$CART_N})</a>
		</li>
		{if $USERNAME && $USER_ID}
			<li>
				<a href="{$BASE_URL}pages/profiles/profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {$USERNAME}</a>
			</li>					
			<li>
				<a href="{$BASE_URL}actions/authentication/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
			</li>
		{else}
			<li>
				<a class="link" data-toggle="modal" data-target="#login-modal">
					<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a>
			</li>					
			<li>
				<a class="link" data-toggle="modal" data-target="#register-modal">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Register</a>
			</li>
		{/if}
	</ul>
</div>