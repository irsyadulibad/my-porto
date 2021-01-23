<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('style') ?>
	<link rel="stylesheet" href="/assets/vendor/summernote/summernote-lite.min.css">
<?= $this->endSection() ?>

<?= $this->section('header') ?>
	<h1>Edit the Resume</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row justify-content-center">
		<div class="col-md-5">
			<div class="card">
				<form action="/panel/resume/<?= $resume->id ?>" method="post">
				<div class="card-body">
					<?= $this->include('panel/partials/alert') ?>
					<input type="hidden" name="_method" value="PATCH">
					<?= csrf_field() ?>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" value="<?= old('name') ?? $resume->name ?>">
						<small class="text-danger">
							<?= $errors['name'] ?? '' ?>
						</small>
					</div>

					<div class="form-group row">
						<div class="col-md-6">
							<small for="begin">Begin (Year)</small>
							<input type="number" name="begin_year" id="begin" class="form-control" value="<?= old('begin_year') ?? $resume->begin_year ?>">
							<small class="text-danger">
								<?= $errors['begin_year'] ?? '' ?>
							</small>
						</div>
						<div class="col-md-6">
							<small for="end">End (Year)</small>
							<input type="text" name="end_year" id="end" class="form-control" value="<?= old('end_year') ?? $resume->end_year ?>">
							<small class="text-danger">
								<?= $errors['end_year'] ?? '' ?>
							</small>
						</div>
					</div>

					<div class="form-group">
						<label for="place">Place</label>
						<input type="text" name="place" id="place" class="form-control" value="<?= old('place') ?? $resume->place ?>">
						<small class="text-danger">
							<?= $errors['place'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" id="description" class="form-control" style="height: 9.8em;"><?= old('description') ?? $resume->description ?></textarea>
						<small class="text-danger">
							<?= $errors['description'] ?? '' ?>
						</small>
					</div>
				</div>

				<div class="card-footer text-right">
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
				</div>
				</form>

			</div>
		</div>
	</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
	<script src="/assets/vendor/summernote/summernote-lite.min.js"></script>

	<script>
		$('#description').summernote({
			height: 250,
			toolbar: [
				[ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
				[ 'para', [ 'ol', 'ul' ] ],
				[ 'insert', [ 'link'] ],
				[ 'view', [ 'undo', 'redo', 'fullscreen', 'help' ] ]
			]
		});
	</script>
<?= $this->endSection() ?>
