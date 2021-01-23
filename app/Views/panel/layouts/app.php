<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title ?? 'Admin' ?></title>

  <?= $this->include('panel/layouts/style') ?>
</head>

<body>
  <div id="app">
  	<div class="main-wrapper">
  		<!-- Navbar -->
  		<?= $this->include('panel/layouts/navbar') ?>
  		<!-- End Navbar -->

  		<!-- Sidebar -->
  		<?= $this->include('panel/layouts/sidebar') ?>
  		<!-- End Sidebar -->

  		<!-- Content -->
  		<div class="main-content">
  			<section class="section">
  				<!-- Header Section -->
  				<div class="section-header">
            <?= $this->renderSection('header') ?>
          </div>
          <!-- End Header -->
  			</section>

  			<?= $this->renderSection('content') ?>
  		</div>
  		<!-- End Content -->

  		<!-- Footer -->
  		<?= $this->include('panel/layouts/footer') ?>
  		<!-- End Footer -->
  	</div>
  </div> 

  <?= $this->include('panel/layouts/script') ?>
</body>
</html>
