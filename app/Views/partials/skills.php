<?php helper('date') ?>
<section id="skills" class="skills section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Skills</h2>
      <p><?= get_option('site_desc_skills') ?></p>
    </div>

    <div class="row skills-content">

    <?php foreach($skillsC as $skills): ?>
      <div class="col-lg-6">

      <?php foreach($skills as $skill): ?>
        <div class="progress">
          <span class="skill"><?= $skill->name ?> <i class="val"><?= elapsed_time($skill->since) ?></i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      <?php endforeach; ?>

      </div>
    <?php endforeach; ?>
    </div>

  </div>
</section>
