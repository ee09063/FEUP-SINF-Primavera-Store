<div class="panel panel-default">
	<ul class="nav nav-sidebar hidden-xs">		
		<li role="presentation">
			{if $PAGE == 'profile'}
				<a class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a>
			{else}
				<a href="{$BASE_URL}pages/profiles/profile.php"><span class='glyphicon glyphicon-user' aria-hidden="true"></span> Profile</a>
			{/if}
		</li>
		<li>
			{if $PAGE == 'cart'}
				<a class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cart </a>
			{else}
				<a href="{$BASE_URL}pages/cart/view.php"><span class='glyphicon glyphicon-user' aria-hidden="true"></span> Cart </a>
			{/if}
		</li>
		<li><a class="link" onclick="onSidebarMenuClicked(this, 'products');"><span class='glyphicon glyphicon-th-large' aria-hidden="true"></span> Orders <span class="caret"></span></a></li>
		<li class="products hidden text-center">
			{if $PAGE == 'active_orders'}
				<a class="active">Active Orders</a>
			{else}
				<a href="{$BASE_URL}pages/profiles/orders.php?filter=active">Active Orders</a>
			{/if}
		</li>
		<li class="products hidden text-center">
			{if $PAGE == 'inactive_orders'}
				<a class="active">Inactive Orders</a>
			{else}
				<a href="{$BASE_URL}pages/profiles/orders.php?filter=inactive">Inactive Orders</a>
			{/if}
		</li>
		<li class="products hidden text-center">
			{if $PAGE == 'all_orders'}
				<a class="active">All Orders</a>
			{else}
				<a href="{$BASE_URL}pages/profiles/orders.php?filter=all">All Orders</a>
			{/if}
		</li>
	</ul>
	<ul class="nav nav-sidebar hidden-sm hidden-md hidden-lg">		
		<li>
			<div class="dropdown sidebar-select">
				<button class="btn btn-default dropdown-toggle" type="button" id="profileDropdown" data-toggle="dropdown" aria-expanded="true">
					My profile
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="profileDropdown">
					<li role="presentation">
						{if $PAGE == 'profile'}
							<a role="menuitem" tabindex="-1" class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profile</a>
						{else}
							<a role="menuitem" tabindex="-1" href="{$BASE_URL}pages/profiles/profile.php"><span class='glyphicon glyphicon-user' aria-hidden="true"></span> Profile</a>
						{/if}
					</li>
					<li role="presentation" class="divider"></li>
					<li>
						{if $PAGE == 'cart'}
							<a role="menuitem" tabindex="-1" class="active"><span class='glyphicon glyphicon-tag' aria-hidden="true"></span> Cart </a>
						{else}
							<a role="menuitem" tabindex="-1" href="{$BASE_URL}pages/cart/view.php"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Cart </a>
						{/if}
					</li>
					<li role="presentation" class="divider"></li>
					<li role="presentation">
						{if $PAGE == 'orders'}
							<a role="menuitem" tabindex="-1" class="active"><span class='glyphicon glyphicon-th-large' aria-hidden="true"></span> Orders</a>
						{else}
							<a role="menuitem" tabindex="-1" href="{$BASE_URL}pages/orders/list.php"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Orders </a>
						{/if}
					</li>
				</ul>
			</div>
		</li>
	</ul>
</div>