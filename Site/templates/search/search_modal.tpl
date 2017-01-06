<div class="modal fade" id="search-modal" role="dialog" aria-labelledby="search-modal-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="search-modal-label">Advanced Search</h4>
			</div>
			<form action="{$BASE_URL}pages/products/list.php" method="GET" id="modal-search-form" role="search" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-8">
							<div class="form-group">
								<label for="search-modal-query">Title</label>
								<input class="form-control" type="text" maxlength="40" id="search-modal-query" name="query" value="" alt="Search field" title="Search field" placeholder="Search for...">
							</div>
						</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="search-modal-category">Category</label>
							<select class="form-control" form="modal-search-form" id="search-modal-category" name="category">
								<option value="">Category</option>
								{foreach $categories as $category}
									<option value="{$category}">{$category}</option>
								{/foreach}
							</select>
						</div>
					</div>
				</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>