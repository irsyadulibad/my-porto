<?php 
$uri = service('uri')->getSegments();
?>
<div class="card">
	<div class="card-header">
		<h4>Jump To</h4>
	</div>
	<div class="card-body">
		<ul class="nav nav-pills flex-column">
			<li class="nav-item">
				<a href="<?= route_to('about-general') ?>" class="nav-link <?= ($uri[2] == 'general') ? 'active' : '' ?>">General</a>
			</li>
			<li class="nav-item">
				<a href="<?= route_to('about-bio') ?>" class="nav-link <?= ($uri[2] == 'biodata') ? 'active' : '' ?>">Biodata</a>
			</li>
			<li class="nav-item">
				<a href="<?= route_to('about-social') ?>" class="nav-link <?= ($uri[2] == 'social-account') ? 'active' : '' ?>">Socials</a>
			</li>
		</ul>
	</div>
</div>
