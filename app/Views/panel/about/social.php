<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('header') ?>
	<h1>Manage Social Accounts</h1>
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

					<form action="<?= route_to('general-save-social') ?>" method="post">
					<?= csrf_field() ?>
					<div class="form-group">
						<label for="facebook">Facebook</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									facebook.com/
								</div>
							</div>
							<input type="text" class="form-control" value="<?= old('facebook') ?? get_option('social_facebook') ?>" name="facebook">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fab fa-facebook"></i>
								</div>
							</div>
						</div>
						<small class="text-danger">
							<?= $errors['facebook'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="instagram">Instagram</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									instagram.com/
								</div>
							</div>
							<input type="text" class="form-control" value="<?= old('instagram') ?? get_option('social_instagram') ?>" name="instagram">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fab fa-instagram"></i>
								</div>
							</div>
						</div>
						<small class="text-danger">
							<?= $errors['instagram'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="telegram">Telegram</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									t.me/
								</div>
							</div>
							<input type="text" class="form-control" value="<?= old('telegram') ?? get_option('social_telegram') ?>" name="telegram">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fab fa-telegram"></i>
								</div>
							</div>
						</div>
						<small class="text-danger">
							<?= $errors['telegram'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="linkedin">Linked In</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									linkedin.com/in/
								</div>
							</div>
							<input type="text" class="form-control" value="<?= old('linkedin') ?? get_option('social_linkedin') ?>" name="linkedin">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fab fa-linkedin"></i>
								</div>
							</div>
						</div>
						<small class="text-danger">
							<?= $errors['linkedin'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="github">Github</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									github.com/
								</div>
							</div>
							<input type="text" class="form-control" value="<?= old('github') ?? get_option('social_github') ?>" name="github">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fab fa-github"></i>
								</div>
							</div>
						</div>
						<small class="text-danger">
							<?= $errors['github'] ?? '' ?>
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
