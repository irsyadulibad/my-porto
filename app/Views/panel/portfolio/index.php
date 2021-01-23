<?php $this->extend('panel/layouts/app'); ?>

<?= $this->section('style') ?>
	<link rel="stylesheet" href="/assets/vendor/dataTables/datatables.min.css">
<?= $this->endSection() ?>

<?= $this->section('header') ?>
	<h1>Your Portfolio</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<?= $this->include('panel/partials/alert') ?>
					<div class="table-responsive">
					<table class="table table-striped table-bordered" id="portfolio-table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Title</th>
								<th>Slug</th>
								<th>Category</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
	<script type="text/javascript" src="/assets/vendor/dataTables/datatables.min.js"></script>

	<script>
		$('#portfolio-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: {
				url: '<?= route_to('portfolio-json') ?>'
			},
			columns: [
				{data: null, sortable: false,
					render: function(data, type, row, meta){
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{data: 'title', name: 'title'},
				{data: 'pslug', name: 'pslug'},
				{data: 'category', name: 'category'},
				{data: 'action', name: 'action'}
			]
		});
	</script>
<?= $this->endSection() ?>
