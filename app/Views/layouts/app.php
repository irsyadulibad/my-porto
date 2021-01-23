<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?= $title ?? 'Portfolio' ?></title>
	<meta content="<?= get_option('site_description') ?>" name="description">
	<meta content="<?= get_option('site_keywords') ?>" name="keywords">

	<?= $this->include('layouts/style') ?>
</head>
<body>
	<?= $this->renderSection('content') ?>

	<?= $this->include('layouts/footer') ?>
	
	<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

	<?= $this->include('layouts/script') ?>
</body>
</html>
