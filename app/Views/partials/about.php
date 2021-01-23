<?php helper('date') ?>
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About</h2>
      <p><?= get_option('site_desc_about') ?></p>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <img src="/assets/img/<?= get_option('bio_image') ?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content">
        <h3><?= get_option('general_jobs') ?></h3>
        <p class="font-italic">
          <?= get_option('general_job_description') ?>
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> <?= get_option('bio_website') ?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> <?= get_option('bio_phone') ?></li>
              <li><i class="icofont-rounded-right"></i> <strong>City:</strong> <?= get_option('bio_city') ?></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> <?= age(get_option('bio_born')) ?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <?= get_option('bio_email') ?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> <?= get_option('bio_freelance') ?></li>
            </ul>
          </div>
        </div>
        <p>
          <?= get_option('bio_description') ?>
        </p>
      </div>
    </div>

  </div>
</section>
