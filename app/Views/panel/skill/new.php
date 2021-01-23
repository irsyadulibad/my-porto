<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('header') ?>
	<h1>Add New Skill</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<?= $this->include('panel/partials/alert') ?>
					<form action="/panel/skill" method="post">
					<?= csrf_field() ?>
					<div class="form-group">
						<label for="name">Skill</label>
						<input type="text" class="form-control" name="name" value="<?= old('name') ?>">
						<small class="text-danger"><?= $errors['name'] ?? '' ?></small>
					</div>

					<div class="form-group">
						<label for="since">Since</label>
						<input type="date" class="form-control" name="since" value="<?= old('since') ?>">
						<small class="text-danger"><?= $errors['since'] ?? '' ?></small>
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
