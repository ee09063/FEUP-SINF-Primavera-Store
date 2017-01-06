{if ($ERROR_MESSAGES|@count gt 0 || $FIELD_ERRORS|@count gt 0)}
<div class="container">
	<div class="row">
		<div class="hidden-xs col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-default breadcrumb">
				{foreach $ERROR_MESSAGES as $error}
					<div class="panel-title text-center error">
						<span class="glyphicon glyphicon-exclamation-sign" style="color:orange;"></span> {$error}
					</div>
				{/foreach}
				{foreach $FIELD_ERRORS as $error}
					<div class="panel-title text-center warning">
						<span class="glyphicon glyphicon-warning-sign" style="color:orange;"></span> {$error}
					</div>
				{/foreach}
			</div>
		</div>
		<div class="hidden-xs col-sm-3"></div>
	</div>
</div>
{/if}
