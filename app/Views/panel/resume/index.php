<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('style') ?>
	<link rel="stylesheet" href="/assets/vendor/dataTables/datatables.min.css">
<?= $this->endSection() ?>

<?= $this->section('header') ?>
	<h1>Your Resume</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row">
		<div class="col-md-10">
			<div class="card">
				<div class="card-body">
					<?= $this->include('panel/partials/alert') ?>
					<div class="table-responsive">
					<table class="table table-striped table-bordered" id="resume-table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Begin</th>
								<th>End</th>
								<th>Place</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody></tbody>
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
		$('#resume-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: {
				url: '<?= route_to('resume-json') ?>'
			},
			columns: [
				{data: null, sortable: false,
					render: function(data, type, row, meta){
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{data: 'name', name: 'name'},
				{data: 'begin_year', name: 'begin_year'},
				{data: 'end_year', name: 'end_year'},
				{data: 'place', name: 'place'},
				{data: 'action', name: 'action'}
			]
		});
	</script>
<?= $this->endSection() ?>
