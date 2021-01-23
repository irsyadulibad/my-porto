<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
	<!-- ======= Navigation ======= -->
	<?= $this->include('partials/navbar') ?>
	<!-- End Navigation -->

	<!-- ======= Hero Section ======= -->
	<?= $this->include('partials/hero') ?>
	<!-- End Hero Section -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<?= $this->include('partials/about') ?>
		<!-- End About Section -->

		<!-- ======= Skills Section ======= -->
		<?= $this->include('partials/skills') ?>
		<!-- End Skills Section -->

		<!-- ======= Resume Section ======= -->
		<?= $this->include('partials/resume') ?>
		<!-- End Resume Section -->

		<!-- ======= Portfolio Section ======= -->
		<?= $this->include('partials/portfolio') ?>
		<!-- End Portfolio Section -->

		<!-- ======= Services Section ======= -->
		<?= $this->include('partials/services') ?>
		<!-- End Services Section -->

		<!-- ======= Contact Section ======= -->
		<?= $this->include('partials/contact') ?>
		<!-- End Contact Section -->

	</main>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
	let CSRFName = `<?= csrf_token() ?>`;
	let CSRFHash = `<?= csrf_hash() ?>`;

	function handleValidation(errors) {
		for(let name in errors) {
			const el = $(`.validate.${name}-validate`);
			el.addClass('d-block').html(errors[name]);
		}

		$('#contact-message').html('');
	}

	function processResponse(data) {
		$('#contact-message').html(`
			<div class="${(data.status == 'success') ? 'sent' : 'error'}-message">
				${data.message}
			</div>
		`);
	}

	$('#contact-form').submit(function(e) {
		e.preventDefault();
		const form = $(this);

		$('.validate').html('');

		$('#contact-message').html(`
			<div class="text-center loader">
        <i class="bx bx-loader-alt bx-spin"></i>
      </div>
		`);

		$.ajax({
			url: form.attr('action'),
			method: 'post',
			data: form.serialize()+`&${CSRFName}=${CSRFHash}`,
			dataType: 'json',
			success: function(data) {
				CSRFName = data.csrf.name;
				CSRFHash = data.csrf.value;

				if(data.status == 'validate') {
					handleValidation(data.errors);
				} else {
					processResponse(data);
				}
				
			},
			error: function(data) {
				$('#contact-message').html(`
					<div class="error-message">
		        Something went wrong.... Refresh the page and try again
		      </div>
				`);
			}
		})
	})
</script>
<?= $this->endSection() ?>
