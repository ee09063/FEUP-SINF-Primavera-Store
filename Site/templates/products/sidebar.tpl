<div class="panel panel-default">
	<ul class="nav nav-sidebar hidden-xs">
		<li class="title text-center"><label>Categories</label></li>
		{foreach $categories as $category}
			{if $info.category_id == $category}
				<li><a class="active">{$category}</a></li>
			{else}
				<li><a href="{$BASE_URL}pages/products/list.php?category={$category}">{$category}</a></li>
			{/if}	
		{/foreach}
	</ul>
	<ul class="nav nav-sidebar hidden-sm hidden-md hidden-lg">
		<li>
			<div class="dropdown sidebar-select">
				<button class="btn btn-default dropdown-toggle" type="button" id="categoryDropdown" data-toggle="dropdown" aria-expanded="true">
					Categories
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="categoryDropdown">
					{foreach $categories as $category}
						{if $info.category_id == $category}
							<li><a class="active">{$category}</a></li>
						{else}
							<li><a href="{$BASE_URL}pages/products/list.php?category={$category}">{$category}</a></li>
						{/if}	
					{/foreach}
				</ul>
			</div>
		</li>
	</ul>
</div>