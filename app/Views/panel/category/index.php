<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('style') ?>
	<link rel="stylesheet" href="/assets/vendor/dataTables/datatables.min.css">
<?= $this->endSection() ?>

<?= $this->section('header') ?>
	<h1>Portfolio's Category</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row">
		<div class="col-md-8">
			<?= $this->include('panel/partials/alert') ?>

			<?php if($errors): ?>
			<div class="alert alert-danger alert-dismissible fade show">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<ul>
				<?php foreach($errors as $error): ?>
					<li><?= $error ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>
			<div class="card">
				<div class="card-body">
					<button class="btn btn-success mb-4 float-right" data-toggle="modal" data-target="#newCategoryModal"><i class="fas fa-plus"></i> Add New</button>
					<div class="table-responsive">
						<table class="table table-stripped table-bordered" id="categories-table">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Slug</th>
									<th>Action</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="newCategoryModal" tabindex="-1" aria-labelledby="newCategoryModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="newCategoryModalLabel">Add New Category</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="/panel/category" method="post">
				<?= csrf_field() ?>
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
				</div>

				</form>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
	<script type="text/javascript" src="/assets/vendor/dataTables/datatables.min.js"></script>
	<script>
		$('#categories-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: {
				url: '<?= route_to('category-json') ?>'
			},
			columns: [
				{data: null, sortable: false,
					render: function(data, type, row, meta){
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{data: 'name', name: 'name'},
				{data: 'slug', name: 'slug'},
				{data: 'action', name: 'action'}
			]
		})
	</script>
<?= $this->endSection() ?>
