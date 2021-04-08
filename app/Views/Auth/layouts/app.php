<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title ?? 'Admin' ?></title>

  <?= $this->include('Auth/layouts/style') ?>
</head>

<body>
  <div id="app">
    <?= $this->renderSection('content') ?>
  </div> 

  <?= $this->include('Auth/layouts/script') ?>
</body>
</html>
