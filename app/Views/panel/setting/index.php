<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('header') ?>
	<h1>Site Settings</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
	<h2 class="section-title">Overview</h2>
	<p class="section-lead">
		Organize and adjust all settings about the site.
	</p>

	<div class="row">
		<div class="col-lg-6">
			<div class="card card-large-icons">
				<div class="card-icon bg-primary text-white">
					<i class="fas fa-cog"></i>
				</div>
				<div class="card-body">
					<h4>General</h4>
					<p>General settings such as, site title, hero background, description, and others.</p>
					<a href="<?= route_to('settings-general') ?>" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card card-large-icons">
				<div class="card-icon bg-primary text-white">
					<i class="fas fa-file"></i>
				</div>
				<div class="card-body">
					<h4>Page</h4>
					<p>Change your home section description. You can blank it all (optional).</p>
					<a href="<?= route_to('settings-page') ?>" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>
