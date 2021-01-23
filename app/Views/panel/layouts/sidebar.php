<?php $uri = service('uri')->getSegments(); ?>

<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">My-Porto</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">MP</a>
    </div>
    <ul class="sidebar-menu">
      <li class="nav-item <?= ($uri[1] == 'dashboard') ? 'active' : '' ?>">
        <a href="/panel/dashboard" class="nav-link">
          <i class="fas fa-fire"></i><span>Dashboard</span>
        </a>
      </li>
      <li class="menu-header">General</li>
      <li class="nav-item dropdown <?= ($uri[1] == 'skill') ? 'active' : '' ?>">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-tasks"></i><span>Skills</span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="/panel/skill" class="nav-link">List</a></li>
          <li><a href="/panel/skill/new" class="nav-link">Add New</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown <?= ($uri[1] == 'resume') ? 'active' : '' ?>">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-poll-h"></i><span>Resume</span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="/panel/resume" class="nav-link">List</a></li>
          <li><a href="/panel/resume/new" class="nav-link">Add New</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown <?= ($uri[1] == 'portfolio') ? 'active' : '' ?>">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-image"></i><span>Portfolio</span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="/panel/portfolio" class="nav-link">List</a></li>
          <li><a href="/panel/portfolio/new" class="nav-link">Add New</a></li>
          <li><a href="/panel/category" class="nav-link">Categories</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown <?= ($uri[1] == 'service') ? 'active' : '' ?>">
        <a href="#" class="nav-link has-dropdown">
          <i class="fas fa-th"></i><span>Services</span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="/panel/service/" class="nav-link">List</a></li>
          <li><a href="/panel/service/new" class="nav-link">Add New</a></li>
        </ul>
      </li>

      <li class="menu-header">Personal</li>
      <li class="nav-item dropdown <?= ($uri[1] == 'contact') ? 'active' : '' ?>">
        <a href="<?= route_to('contact') ?>" class="nav-link">
          <i class="fas fa-envelope"></i><span>Contact</span>
        </a>
      </li>
      <li class="nav-item dropdown <?= ($uri[1] == 'about') ? 'active' : '' ?>">
        <a href="<?= route_to('about') ?>" class="nav-link">
          <i class="fas fa-user"></i><span>Biography</span>
        </a>
      </li>

      <li class="menu-header">Site</li>
      <li class="nav-item <?= ($uri[1] == 'inbox') ? 'active' : '' ?>">
        <a href="/panel/inbox" class="nav-link">
          <i class="fas fa-inbox"></i><span>Inbox</span>
        </a>
      </li>
      <li class="nav-item <?= ($uri[1] == 'settings') ? 'active' : '' ?>">
        <a href="<?= route_to('settings') ?>" class="nav-link">
          <i class="fas fa-cog"></i><span>Settings</span>
        </a>
      </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Visit Site
      </a>
    </div>
  </aside>
</div>
