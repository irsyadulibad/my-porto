<?= $this->extend('panel/layouts/app'); ?>

<?= $this->section('style') ?>
	<link rel="stylesheet" href="/assets/vendor/dataTables/datatables.min.css">
<?= $this->endSection() ?>

<?= $this->section('header') ?>
	<h1>Your Skills</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<?= $this->include('panel/partials/alert') ?>
					<div class="table-responsive">
						<table id="skill-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Skill</th>
									<th>Since</th>
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
		$('#skill-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: {
				url: '<?= route_to('skill-json') ?>'
			},
			columns: [
				{data: null, sortable: false,
					render: function(data, type, row, meta){
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{data: 'name', name: 'name'},
				{data: 'since', name: 'since'},
				{data: 'action', name: 'action'}
			]
		});
	</script>
<?= $this->endSection() ?>
