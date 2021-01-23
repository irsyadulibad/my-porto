<?= $this->extend('panel/layouts/app'); ?>

<?= $this->section('style') ?>
	<style>
		#image-preview{
			background: url(/assets/img/portfolio/<?= $porto->image ?>);
			background-position: 50%;
			background-size: cover;
		}
	</style>
<?= $this->endSection() ?>

<?= $this->section('style') ?>
	<link rel="stylesheet" href="/assets/vendor/summernote/summernote-lite.min.css">
<?= $this->endSection() ?>

<?= $this->section('header') ?>
	<h1>Edit Portfolio</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<?= $this->include('panel/partials/alert') ?>
					<?= form_open_multipart('/panel/portfolio/'.$porto->id) ?>
					<?= csrf_field() ?>
					<input type="hidden" name="_method" value="PATCH">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" value="<?= old('title') ?? $porto->title ?>">
						<small class="text-danger">
							<?= $errors['title'] ?? '' ?>
						</small>
						<small class="text-danger">
							<?= $errors['slug'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="category">Category</label>
						<select name="category_id" id="category" class="form-control">
						<?php foreach($cats as $cat): ?>
							<option value="<?= $cat->id ?>" <?= ($cat->id == $porto->category_id ? 'selected' : '') ?>><?= $cat->name ?></option>
						<?php endforeach; ?>
						</select>
						<small class="text-danger">
							<?= $errors['category_id'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="content">Content Text</label>
						<textarea name="content" id="content"><?= old('content') ?? $porto->content ?></textarea>
						<small class="text-danger">
							<?= $errors['content'] ?? '' ?>
						</small>
					</div>

					<div class="form-group">
						<label for="iamge-upload">Image</label>
						<div id="image-preview" class="image-preview" style="height: 12em; width: 12em">
							<label for="image-upload" id="image-label">Choose File</label>
							<input type="file" name="image" id="image-upload">
						</div>
						<small class="text-danger">
							<?= $errors['image'] ?? '' ?>
						</small>
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
	<script src="/assets/vendor/summernote/summernote-lite.min.js"></script>

	<script>
		$('#content').summernote({
			height: 250,
			toolbar: [
				[ 'style', [ 'style' ] ],
				[ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
				[ 'para', [ 'ol', 'ul', 'paragraph' ] ],
				[ 'table', [ 'table' ] ],
				[ 'insert', [ 'link'] ],
				[ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
			]
		});

		$.uploadPreview({
			input_field: '#image-upload',
			preview_box: '#image-preview',
			label_field: '#image-label',
			label_default: 'Choose Image',
			label_selected: 'Change Image',
			no_label: false,
			success_callback: false
		});
	</script>
<?= $this->endSection() ?>	
