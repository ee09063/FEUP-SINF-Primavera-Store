{include file='common/header.tpl'}
{include file='errors/errors.tpl'}

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<ol class="breadcrumb">
				<li><a href="{$BASE_URL}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li><a href="{$BASE_URL}pages/products/list.php?category={$info.product.Categoria}"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> {$info.product.Categoria}</a></li>
				<li><a href="{$BASE_URL}pages/products/list.php?category={$info.product.Codigo}"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> {$info.product.Nome}</a></li>
				<li class="active"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Stock</li>
				
			</ol>
		</div>
		<div class="col-sm-12 col-md-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						{if  $info.armazens|@count gt 0}
							{foreach $info.armazens as $warehouse}
								<div class="panel-body product-item">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12">
											<p class="product-title-short"><b class="text">{$warehouse.Nome}</b>
											</p>
											<p><b>Address: </b>{$warehouse.Morada}</p>
											<p><b>Contact: </b>{$warehouse.Telefone}</p>
											<p><b>Items in stock: </b>{$warehouse.Stock}</p>
										</div>
									</div>
								</div>
							{/foreach}
						{else}
							<div class="panel-body product-item">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<p class="product-title-short"><b class="text">No stock</b>
									</div>
								</div>
							</div>
						{/if}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{include file='common/footer.tpl'}