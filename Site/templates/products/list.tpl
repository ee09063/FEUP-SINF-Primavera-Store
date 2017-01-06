{include file='common/header.tpl'}
{include file='errors/errors.tpl'}
{include file='success/success.tpl'}

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<ol class="breadcrumb">
				<li><a href="{$BASE_URL}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				{if $info.has_category}
					{foreach $info.categories as $category}
						{if $category == $info.category_id}
							<li class="active"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> {$category}</li>
						{/if}
					{/foreach}
				{else}
					<li class="active"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Products</li>
				{/if}
				
			</ol>
		</div>
		<div class="col-sm-3 col-md-2">
			{include file='products/sidebar.tpl'}
		</div>
		<div class="col-sm-9 col-md-10">
			<div class="row">
				<div class="col-sm-12">
				{if !$info.empty && $info.products|@count gt 0}
					<div class="panel panel-default">
						<div class="panel-heading">
							<label>Filter by title:</label>
							<input type="text" maxlength="20" oninput="filterProducts();" id="filter-box" class="form-control" title="Insert keywords to filter the list" placeholder="Insert keywords..."/>
						</div>
						{foreach $info.products as $product}
							<a href="{$BASE_URL}pages/products/view.php?product_id={$product.Codigo}">
								<div class="panel-body product-item">
									<div class="row">
										<div class="col-xs-4 col-sm-3 col-md-2 product-img-short">				
											<img src="{$BASE_URL}images/products/{$product.image}" alt="" title="product image"/>
										</div>
										<div class="col-xs-5 col-sm-6 col-md-7">
											<p class="product-title-short"><b class="text">{$product.Nome}</b></p>
											<p><b>Author: </b>{$product.Autor}</p>
											<p><b>Ref: </b>{$product.Codigo}</p>
											<p>{$product.Sumario}</p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 text-center">
											<p class="product-price"><b>{$product.Preco_IVA} €</b></p>
											<p><a href="{$BASE_URL}actions/cart/add.php?codArtigo={$product.Codigo}&quantidade=1">
												<button class="btn btn-primary" style="height:2em; width:10em">Add to Cart</button></a>
											</p>
											{if $product.In_Cart}
											<p><a href="{$BASE_URL}actions/cart/remove.php?codArtigo={$product.Codigo}">
												<button class="btn btn-primary" style="height:2em; width:10em">Remove from Cart</button></a>
											</p>
											{/if}
											{if !$product.Stock gt 0}
												<div class="alert alert-danger" role="alert" >
													<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
													<span class="sr-only">Error:</span>
														Not in stock
												</div>
											{/if}
										</div>
									</div>
								</div>
							</a>
						{/foreach}
					</div>
					{else}
					<div class="panel panel-default">
						<div class="panel-heading text-center">
							<label>No products found</label>
						</div>
					</div>
					{/if}
				</div>
			</div>
		</div>
	</div>
</div>

<script src='{$BASE_URL}javascript/products.js'></script>

{include file='common/footer.tpl'}