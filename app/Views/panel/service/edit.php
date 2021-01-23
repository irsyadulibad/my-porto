<?= $this->extend('panel/layouts/app'); ?>

<?= $this->section('style') ?>
	<link rel="stylesheet" href="/assets/vendor/boxicons/css/boxicons.min.css">
<?= $this->endSection() ?>

<?= $this->section('header') ?>
	<h1>Edit Service</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row justify-content-center">
		<div class="col-md-5">
			<div class="card">
				<div class="card-body">
					<form action="/panel/service/<?= $service->id ?>" method="post">
					<?= csrf_field() ?>
					<input type="hidden" name="_method" value="PATCH">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" value="<?= old('name') ?? $service->name ?>">
						<small class="text-danger"><?= $errors['name'] ?? '' ?></small>
					</div>

					<div class="form-group">
						<label for="icon">Icon</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">bx bx-</div>
							</div>
							<input type="text" class="form-control" id="icon" name="icon" value="<?= old('icon') ?? $service->icon ?>">
							<div class="input-group-append">
								<div class="input-group-text" id="icon-preview">
									<span class="bx bx-low-vision"></span>
								</div>
							</div>
						</div>
						<small>See the list icons <a href="https://boxicons.com/" target="_blank">here</a> (at regular tab).</small>
						<small class="text-danger"><?= $errors['icon'] ?? '' ?></small>
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" name="description" id="description" style="min-height: 5em;"><?= old('description') ?? $service->description ?></textarea>
						<small class="text-danger"><?= $errors['description'] ?? '' ?></small>
					</div>

					<div class="form-group text-right">
						<button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
	<script>
		function previewIcon(icon) {
			let html = `<span class="bx bx-${icon}"></span>`;
			$('#icon-preview').html(html);
		}

		$('#icon').keyup(function() {
			previewIcon($(this).val());
		});

		const iVal = $('#icon').val();
		if(iVal.length > 0) previewIcon(iVal);
	</script>
<?= $this->endSection() ?>	
