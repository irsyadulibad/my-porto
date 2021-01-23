<?php
helper('service');
?>
<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
      <p><?= get_option('site_desc_services') ?></p>
    </div>

    <div class="row justify-content-center">

    <?php foreach($services as $service): ?>
      <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="<?= rand(100, 300) ?>">
        <div class="icon-box iconbox-<?= generate_color() ?>">
          <div class="icon">
            <?= generate_svg() ?>
            <i class="bx bx-<?= $service->icon ?>"></i>
          </div>
          <h4><?= $service->name ?></h4>
          <p><?= $service->description ?></p>
        </div>
      </div>
    <?php endforeach; ?>

    </div>

  </div>
</section>
