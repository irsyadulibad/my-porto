<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('header') ?>
	<h1>Inbox Detail</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h6>
						<strong><?= $inbox->name ?></strong>
						<span class="text-muted">&lt;<?= $inbox->email ?>&gt;</span>
					</h6>
				</div>
				<div class="card-body">
					<h5 class="text-center mb-4"><?= $inbox->subject ?></h5>
					<p class="mt-4" style="font-size: 1.1em;">
						<?= $inbox->message ?>
					</p>
				</div>
				<div class="card-footer text-left">
					<a href="/panel/inbox" class="btn btn-primary">
						<i class="fas fa-arrow-left"></i> Back
					</a>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>
