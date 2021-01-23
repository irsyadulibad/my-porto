<?= $this->extend('panel/layouts/app', ['header' => 'Contact Information']) ?>

<?= $this->section('header') ?>
<h1>Edit Contact Information</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row justify-content-center">
	<div class="col-md-5">
		<div class="card">
			<div class="card-header">
				<h6>Contact Information</h6>
			</div>
			<div class="card-body">
				<?= $this->include('panel/partials/alert') ?>
				<form action="<?= route_to('contact-post') ?>" method="post">
					<?= csrf_field() ?>
				 
					<div class="form-group">
						<label>Address</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-map-marker-alt"></i>
								</div>
							</div>
							<input type="text" class="form-control phone-number" value="<?= old('address') ?? get_option('contact_address') ?>" name="address">
						</div>
						<small class="text-danger">
							<?= $errors['address'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label>Email</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-envelope"></i>
								</div>
							</div>
							<input type="email" class="form-control phone-number" value="<?= old('email') ?? get_option('contact_email') ?>" name="email">
						</div>
						<small class="text-danger">
							<?= $errors['email'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label>Phone Number</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-phone"></i>
								</div>
							</div>
							<input type="number" class="form-control phone-number" value="<?= old('phone') ?? get_option('contact_phone') ?>" name="phone">
						</div>
						<small class="text-danger">
							<?= $errors['phone'] ?? '' ?>
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
