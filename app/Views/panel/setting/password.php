<?= $this->extend('panel/layouts/app'); ?>

<?= $this->section('header') ?>
	<h1>Change Password</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<form action="<?= route_to('save-change-password') ?>" method="post">
				<?= csrf_field() ?>
				<div class="card-body">
					<?= $this->include('panel/partials/alert') ?>
					<div class="form-group">
						<label for="password">Old Password</label>
						<input id="password" class="form-control" name="password" type="password">
						<small class="text-danger"><?= $errors['password'] ?? '' ?></small>
					</div>
					<div class="form-group">
						<label for="new-password">New Password</label>
						<input id="new-password" class="form-control" name="new-password" type="password">
						<small class="text-danger"><?= $errors['new-password'] ?? '' ?></small>
					</div>
					<div class="form-group">
						<label for="confirm-password">Confirm Password</label>
						<input id="confirm-password" class="form-control" name="confirm-password" type="password">
						<small class="text-danger"><?= $errors['confirm-password'] ?? '' ?></small>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>
