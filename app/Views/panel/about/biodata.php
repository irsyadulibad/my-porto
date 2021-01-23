<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('style') ?>
	<style>
		#image-preview{
			background: url(/assets/img/<?= get_option('bio_image') ?>);
			background-position: 50%;
			background-size: cover;
		}
	</style>
<?= $this->endSection() ?>

<?= $this->section('header') ?>
<h1>Edit Your Biodata</h1>
<?= $this->endSection() ?>

<?php
$this->section('content');
helper('form');
// Freelance option values
$freelances = ['Available', 'Unavailable'];
?>

<div class="row justify-content-center">
	<div class="col-md-4">
		<?= $this->include('panel/about/partials/aside') ?>
	</div>
	<div class="col-md-8">
		<div class="card">
			<form action="<?= route_to('about-save-bio') ?>" method="post">
			<div class="card-header">
				<h4>Your Biodata</h4>
			</div>
			<div class="card-body row">
				<?= csrf_field() ?>
				<div class="col-md-6">
					<?= $this->include('panel/partials/alert') ?>
					<div class="form-group">
						<label>Website</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-globe"></i>
								</div>
							</div>
							<input type="text" class="form-control" value="<?= get_option('bio_website') ?>" name="website">
						</div>
						<small class="text-danger">
							<?= $errors['website'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label>Phone</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-phone"></i>
								</div>
							</div>
							<input type="text" class="form-control phone-number" value="<?= get_option('bio_phone') ?>" name="phone">
						</div>
						<small class="text-danger">
							<?= $errors['phone'] ?? '' ?>
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
							<input type="email" class="form-control" value="<?= get_option('bio_email') ?>" name="email">
						</div>
						<small class="text-danger">
							<?= $errors['email'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label>City</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-city"></i>
								</div>
							</div>
							<input type="text" class="form-control" value="<?= get_option('bio_city') ?>" name="city">
						</div>
						<small class="text-danger">
							<?= $errors['city'] ?? '' ?>
						</small>
					</div>

				</div>
				<div class="col-md-6">

					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" id="description" class="form-control" style="height: 9.8em;" name="description"><?= get_option('bio_description') ?></textarea>
						<small class="text-danger">
							<?= $errors['description'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label>Age</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-list-ol"></i>
								</div>
							</div>
							<input type="date" class="form-control" value="<?= get_option('bio_born') ?>" name="born">
						</div>
						<small class="text-danger">
							<?= $errors['born'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label>Freelance</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fas fa-user-tie"></i>
								</div>
							</div>
							<select name="freelance" class="form-control" name="freelance">
							<?php foreach($freelances as $freelance): ?>
								<option value="<?= $freelance ?>" <?= ($freelance == get_option('bio_freelance') ? 'selected' : '') ?>>
									<?= $freelance ?>
								</option>
							<?php endforeach; ?>
							</select>
						</div>
						<small class="text-danger">
							<?= $errors['freelance'] ?? '' ?>
						</small>
					</div>

				</div>
			</div>
			<div class="card-footer text-center">
				<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
			</div>
			</form>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				<h4>Profile Pict</h4>
			</div>
			<?= form_open_multipart(route_to('about-profile')) ?>

			<div class="card-body text-center">
				<?= csrf_field() ?>
				<div class="form-group mb-4">
					<div id="image-preview" class="image-preview" style="height: 12em; width: 12em;">
						<label for="image-upload" id="image-label">Choose File</label>
						<input type="file" name="image" id="image-upload" />
					</div>
					<small class="text-danger">
						<?= $errors['image'] ?? '' ?>
					</small>
				</div>
				
			</div>
			<div class="card-footer text-right">
				<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
			</div>

			<?= form_close() ?>
		</div>
	</div>
</div>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="/assets/vendor/jquery.uploadPreview/jquery.uploadPreview.min.js"></script>

<script>
	$.uploadPreview({
		input_field: "#image-upload",
		preview_box: "#image-preview",
		label_field: "#image-label",
		label_default: "Choose File",
		label_selected: "Change File",
		no_label: false,
		success_callback: null
	});
</script>
<?= $this->endSection() ?>
