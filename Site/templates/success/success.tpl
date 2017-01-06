{if ($SUCCESS_MESSAGES|@count gt 0)}
<div class="container">
	<div class="row">
		<div class="hidden-xs col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-default breadcrumb">
				{foreach $SUCCESS_MESSAGES as $message}
					<div class="panel-title text-center good">
						<span class="glyphicon glyphicon-exclamation-sign"></span> {$message}
					</div>
				{/foreach}
			</div>
		</div>
		<div class="hidden-xs col-sm-3"></div>
	</div>
</div>
{/if}
