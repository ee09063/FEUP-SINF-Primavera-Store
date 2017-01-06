{include file='common/header.tpl'}
{include file='errors/errors.tpl'}
{include file='success/success.tpl'}

<div class="container">
	<div class="row">
		<div class="col-sm-12" id="category-grid">
			<div class="page-header">
				<h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> SINF Bookstore</h1>
				<h4 class="hidden-xs">Just what you were looking for!</h4>
			</div>
			<div class="row">
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
				{foreach $info.categories as $category}
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<a href="{$BASE_URL}pages/products/list.php?category={$category}" class="thumbnail" title="{$category}">
							<img class="png" src="{$BASE_URL}images/homepage/{$category}.png" alt="{$category}" title="{$category}"/>
							<p>{$category}</p>
						</a>
					</div>
				{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>

{include file='common/footer.tpl'}