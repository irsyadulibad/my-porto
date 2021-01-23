<?= $this->extend('panel/layouts/app') ?>

<?= $this->section('header') ?>
	<h1>About Settings</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
	<h2 class="section-title">Overview</h2>
	<p class="section-lead">
		Organize and adjust all settings about information of yourself.
	</p>

	<div class="row">
		<div class="col-lg-6">
			<div class="card card-large-icons">
				<div class="card-icon bg-primary text-white">
					<i class="fas fa-cog"></i>
				</div>
				<div class="card-body">
					<h4>General</h4>
					<p>General information include your name jobs, and your general job description.</p>
					<a href="<?= route_to('about-general') ?>" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card card-large-icons">
				<div class="card-icon bg-primary text-white">
					<i class="fas fa-user"></i>
				</div>
				<div class="card-body">
					<h4>Biodata</h4>
					<p>Change your detail biodata information like address, age, email, etc.</p>
					<a href="<?= route_to('about-bio') ?>" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card card-large-icons">
				<div class="card-icon bg-primary text-white">
					<i class="fas fa-th-large"></i>
				</div>
				<div class="card-body">
					<h4>Social Media</h4>
					<p>Change your social media information, like Facebook, Instagram, and others ID.</p>
					<a href="<?= route_to('about-social') ?>" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>
