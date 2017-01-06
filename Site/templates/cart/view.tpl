{include file='common/header.tpl'}
{include file='errors/errors.tpl'}
{include file='success/success.tpl'}

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="{$BASE_URL}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cart</li>
			</ol>
		</div>
		{if $USER_ID}
			<div class="col-sm-4 col-md-3 col-lg-2">
				{include file='profiles/sidebar.tpl'}
			</div>
		{else}
			<div class="col-sm-4 col-md-3 col-lg-2">
				
			</div>
		{/if}
		<div class="col-sm-6 col-md-7 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="page-header">Cart of <b>{$info.username}</b></h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-12">
						{if $CART_N > 0}
						<table class="table table-bordered">
						<tr>
							<th>Ref</th>
							<th>Title</th>
							<th>Price</th>
							<th>Quantity</th>
							<th></th>
						</tr>
						<style type="text/css">
							.asd {
								background:rgba(0,0,0,0);
								border:none;
							}
						</style>
						<form role="form"  id="cart_form" method="POST" action="{$BASE_URL}actions/cart/order.php" enctype="multipart/form-data">
						{foreach $info.cart as $product}
							<tr class="auction-item">
								<td>{$product.Codigo}</td>
								<td class="clickable auction-title"><a href="{$BASE_URL}pages/products/view.php?product_id={$product.Codigo}">{$product.Nome}</a></td>
								<td>{$product.Preco_IVA} €</td>
								<td>{$product.Quantidade}</td>
								<td class="clickable auction-title"><a href="{$BASE_URL}actions/cart/remove.php?codArtigo={$product.Codigo}">Remove</a></td>
							</tr>
						{/foreach}
						</form>
					</table>
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
		<div class="col-sm-4 col-md-3 col-lg-2">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<label>Total : {$info.total} €</label>
				</div>
				{if $CART_N > 0}
					<div class="panel-body text-center">
						<p><a id="complete_order" href="{$BASE_URL}actions/cart/order.php"><button class="btn btn-primary">Confirm Order</button></a></p>
					</div>
				{else}
					{if $USER_ID}
						<div class="panel-body text-center">
							<p><a href="#"><button class="btn btn-primary" disabled>Confirm Order</button></a></p>
						</div>
					{else}
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<label>Guest Account</label>
							</div>
						</div>
					{/if}
				{/if}
			</div>
		</div>
	</div>
</div>

<script src='{$BASE_URL}javascript/profiles.js'></script>
<script src='{$BASE_URL}javascript/cart.js'></script>
{include file='common/footer.tpl'}