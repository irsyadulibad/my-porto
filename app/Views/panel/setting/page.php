<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('header') ?>
	<h1>Section Description</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
	<div class="col-md-4">
		<?= $this->include('panel/setting/partials/aside') ?>
	</div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<?= $this->include('panel/partials/alert') ?>
				<form action="<?= route_to('settings-save-page') ?>" method="post">

				<?= csrf_field() ?>
				<div class="form-group">
					<label for="about">About's Section</label>
					<input type="text" name="about" id="about" class="form-control" value="<?= old('about') ?? get_option('site_desc_about') ?>">
					<small class="text-danger">
						<?= $errors['about'] ?? '' ?>
					</small>
				</div>

				<div class="form-group">
					<label for="skills">Skill's Section</label>
					<input type="text" name="skills" id="skills" class="form-control" value="<?= old('skills') ?? get_option('site_desc_skills') ?>">
					<small class="text-danger">
						<?= $errors['skills'] ?? '' ?>
					</small>
				</div>

				<div class="form-group">
					<label for="resume">Resume's Section</label>
					<input type="text" name="resume" id="resume" class="form-control" value="<?= old('resume') ?? get_option('site_desc_resume') ?>">
					<small class="text-danger">
						<?= $errors['resume'] ?? '' ?>
					</small>
				</div>

				<div class="form-group">
					<label for="portfolio">Portfolio's Section</label>
					<input type="text" name="portfolio" id="portfolio" class="form-control" value="<?= old('portfolio') ?? get_option('site_desc_portfolio') ?>">
					<small class="text-danger">
						<?= $errors['portfolio'] ?? '' ?>
					</small>
				</div>

				<div class="form-group">
					<label for="services">Service's Section</label>
					<input type="text" name="services" id="services" class="form-control" value="<?= old('services') ?? get_option('site_desc_services') ?>">
					<small class="text-danger">
						<?= $errors['services'] ?? '' ?>
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
