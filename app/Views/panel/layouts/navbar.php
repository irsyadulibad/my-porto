<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <div class="mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
  </div>
  <ul class="navbar-nav navbar-right">

    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="/assets/img/<?= get_option('bio_image') ?>" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block"><?= get_option('general_name') ?></div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="/panel/settings" class="dropdown-item has-icon">
          <i class="fas fa-cog"></i> Settings
        </a>
        <a href="/panel/change-password" class="dropdown-item has-icon">
          <i class="fas fa-lock"></i> Change Password
        </a>
        <div class="dropdown-divider"></div>
        <a href="<?= route_to('logout') ?>" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>
