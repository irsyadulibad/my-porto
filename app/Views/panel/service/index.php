<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('style') ?>
	<link rel="stylesheet" href="/assets/vendor/dataTables/datatables.min.css">
	<link rel="stylesheet" href="/assets/vendor/boxicons/css/boxicons.min.css">
<?= $this->endSection() ?>

<?= $this->section('header') ?>
	<h1>Your Services</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-body">
					<?= $this->include('panel/partials/alert') ?>
					<div class="table-responsive">
					<table class="table table-striped table-bordered" id="service-table">
						<thead>
							<tr>
								<th>No</th>
								<th>Service</th>
								<th>Icon</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
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
		$('#service-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: {
				url: '<?= route_to('service-json') ?>'
			},
			columns: [
			{data: null, sortable: false,
				render: function(data, type, row, meta){
					return meta.row + meta.settings._iDisplayStart + 1;
				}
			},
			{data: 'name', name: 'name'},
			{data: 'icon', name: 'icon'},
			{data: 'description', name: 'description'},
			{data: 'action', name: 'action'}
			]
		});
	</script>
<?= $this->endSection() ?>
