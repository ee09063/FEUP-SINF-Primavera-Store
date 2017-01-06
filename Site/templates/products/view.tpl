{include file='common/header.tpl'}
{include file='errors/errors.tpl'}
{include file='success/success.tpl'}

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="{$BASE_URL}pages/products/list.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Products</a></li>
				<li><a href="{$BASE_URL}pages/products/list.php?category={$info.product.Categoria}"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> {$info.product.Categoria}</a></li>
				<li class="active"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {$info.product.Nome}</li>
			</ol>
		</div>
		<div class="col-sm-12 col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 product-img-mid">
							<img src="{$BASE_URL}images/products/{$info.image}" alt="" title="product image"/>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-6">
							<label><h1>{$info.product.Nome}</h1></label>
							<p><b>Author:</b> {$info.product.Autor}</p>
							<p><b>Ref:</b> {$info.product.Codigo}</p>
							<p>{$info.product.Sumario}</p>
							<p>{$info.product.Descricao}</p>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2">
							<label class="form-control"><b>Price:</b> {$info.product.Preco_IVA}<span class="glyphicon glyphicon-eur"></span></label>
							<p><a href="{$BASE_URL}actions/cart/add.php?codArtigo={$info.product.Codigo}&quantidade=1">
								<button class="btn btn-primary btn-block">Add to Cart</button>
								</a>
							</p>
							{if $info.product.In_Cart}
								<p><a href="{$BASE_URL}actions/cart/remove.php?codArtigo={$product.Codigo}">
									<button class="btn btn-primary btn-block">Remove from Cart</button></a>
								</p>
							{/if}
							<p><a href="{$BASE_URL}pages/products/stock.php?product_id={$info.product.Codigo}"><button class="btn btn-primary btn-block">Check Stock</button></a></p>
							{if !$info.product.Stock gt 0}
								<div class="alert alert-danger text-center" role="alert">
									<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									<span class="sr-only">Error:</span>
										Not in stock
								</div>
							{/if}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{include file='common/footer.tpl'}
