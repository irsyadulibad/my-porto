<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('style') ?>
	<style>
		#image-preview{
			background: url(/assets/img/<?= get_option('site_hero') ?>);
			background-position: 50%;
			background-size: cover;
		}
	</style>
<?= $this->endSection() ?>

<?= $this->section('header') ?>
	<h1>General Settings</h1>
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
				<?= form_open_multipart(route_to('settings-save-general')) ?>

				<?= csrf_field() ?>
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" id="title" class="form-control" value="<?= old('title') ?? get_option('site_title') ?>">
					<small class="text-danger">
						<?= $errors['title'] ?? '' ?>
					</small>
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<input type="text" name="description" id="description" class="form-control" value="<?= old('description') ?? get_option('site_description') ?>">
					<small class="text-danger">
						<?= $errors['description'] ?? '' ?>
					</small>
				</div>

				<div class="form-group">
					<label for="keywords">Keywords</label>
					<input type="text" name="keywords" id="keywords" class="form-control" value="<?= old('keywords') ?? get_option('site_keywords') ?>">
					<small class="text-danger">
						<?= $errors['keywords'] ?? '' ?>
					</small>
				</div>

				<div class="form-group">
					<label for="hero">Hero Background (Recommended size 1920 x 1053)</label>
					<div class="form-group mb-4">
						<div id="image-preview" class="image-preview" style="height: 12em; width: 22em;">
							<label for="image-upload" id="image-label">Choose File</label>
							<input type="file" name="hero" id="image-upload" />
						</div>
						<small class="text-danger">
							<?= $errors['hero'] ?? '' ?>
						</small>
					</div>
				</div>

				<div class="form-group text-right">
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
				</div>

				<?= form_close() ?>
			</div>
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
