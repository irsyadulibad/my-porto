<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title ?? 'Admin' ?></title>

  <?= $this->include('auth/layouts/style') ?>
</head>

<body>
  <div id="app">
    <?= $this->renderSection('content') ?>
  </div> 

  <?= $this->include('auth/layouts/script') ?>
</body>
</html>