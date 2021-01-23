<section id="resume" class="resume">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Resume</h2>
      <p><?= get_option('site_desc_resume') ?></p>
    </div>

    <div class="row justify-content-center">
    <?php foreach($resumeC as $resume): ?>
      <div class="col-lg-6">
        
      <?php foreach($resume as $rsm): ?>
        <div class="resume-item">
          <h4><?= $rsm->name ?></h4>
          <h5><?= $rsm->begin_year . ' - ' . $rsm->end_year ?></h5>
          <p><em><?= $rsm->place ?></em></p>
          <?= $rsm->description ?>
        </div>
      <?php endforeach; ?>

      </div>
    <?php endforeach; ?>
    </div>

  </div>
</section>
