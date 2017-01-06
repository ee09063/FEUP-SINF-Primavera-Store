{include file='common/header.tpl'}
{include file='errors/errors.tpl'}
{include file='success/success.tpl'}

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="{$BASE_URL}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage</a></li>
				<li class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Orders</li>
			</ol>
		</div>
		<div class="col-sm-4 col-md-3 col-lg-2">
			{include file='profiles/sidebar.tpl'}
		</div>
		<div class="col-sm-6 col-md-7 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="page-header">Orders of <b>{$info.username}</b></h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-12">
						{if !$info.empty}
						<table class="table table-bordered">
						<tr>
							<th>Ref</th>
							<th>Total</th>
							<th>Date</th>
							<th>State</th>
						</tr>				
						{foreach $info.orders as $order}
							<tr class="product-item">
								<td class="clickable product-title">
									<a href="{$BASE_URL}pages/profiles/order_view.php?order_id={$order.NumDoc}">{$order.NumDoc}</a>
								</td>
								<td>{$order.TotalMerc} €</td>
								<td>{$order.Data|date_format:'%Y-%m-%d'}</td>
								<td>{$order.Estado}</td>
							</tr>
						{/foreach}
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
	</div>
</div>

<script src='{$BASE_URL}javascript/profiles.js'></script>
{include file='common/footer.tpl'}