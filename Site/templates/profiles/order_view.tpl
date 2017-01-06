{include file='common/header.tpl'}
{include file='errors/errors.tpl'}
{include file='success/success.tpl'}

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="{$BASE_URL}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li><a href="{$BASE_URL}pages/profiles/orders.php?filter=all"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Orders</a></li>
				<li class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Order {$info.NumDoc}</li>
			</ol>
		</div>
		{if $USER_ID}
			<div class="col-sm-4 col-md-3 col-lg-2">
				{include file='profiles/sidebar.tpl'}
			</div>
		{/if}
		<div class="col-sm-6 col-md-7 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="page-header">Order <b>{$info.NumDoc}</b></h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-7 col-md-7 col-lg-7">
						<p><b>Order Id:</b>{$info.id}</p>
						<p><b>Document Nº: </b>{$info.NumDoc}</p>
						<p><b>Order State: </b>{$info.Estado}</p>
						<p><b>Order Date: </b>{$info.Data|date_format:'%Y-%m-%d'}</p>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3 text-left">
						<p><b>Order Total: </b>{$info.TotalMerc} €</p>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<table class="table table-bordered">
						<tr>
							<th>Ref</th>
							<th>Title</th>
							<th>Price</th>
							<th>Quantity</th>
						</tr>
						{foreach $info.LinhasDoc as $product}
							<tr class="auction-item">
								<td>{$product.CodArtigo}</td>
								<td class="clickable product-title">
									<a href="{$BASE_URL}pages/products/view.php?product_id={$product.CodArtigo}">{$product.DescArtigo}</a>
								</td>
								<td>{$product.PrecoUnitario} €</td>
								<td>{$product.Quantidade}</td>
							</tr>
						{/foreach}
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src='{$BASE_URL}javascript/profiles.js'></script>
{include file='common/footer.tpl'}