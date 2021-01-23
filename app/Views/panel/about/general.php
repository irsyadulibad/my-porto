<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('header') ?>
	<h1>Edit Your Information</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row">
		<div class="col-md-4">
			<?= $this->include('panel/about/partials/aside') ?>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<?= $this->include('panel/partials/alert') ?>
					<form action="<?= route_to('about-save-general') ?>" method="post">
					<?= csrf_field() ?>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" value="<?= old('name') ?? get_option('general_name') ?>">
						<small class="text-danger">
							<?= $errors['name'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="jobs">Jobs (separate with comma)</label>
						<input type="text" name="jobs" id="jobs" class="form-control" value="<?= old('jobs') ?? get_option('general_jobs') ?>">
						<small class="text-danger">
							<?= $errors['jobs'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="description">Job Description</label>
						<input type="text" name="job_description" id="description" class="form-control" value="<?= old('job_description') ?? get_option('general_job_description') ?>">
						<small class="text-danger">
							<?= $errors['job_description'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="quote">Quote</label>
						<input type="text" name="quote" id="quote" class="form-control" value="<?= old('quote') ?? get_option('general_quote') ?>">
						<small class="text-danger">
							<?= $errors['quote'] ?? '' ?>
						</small>
					</div>

					<div class="form-group text-right">
						<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
					</div>
					</form>

				</div>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>
