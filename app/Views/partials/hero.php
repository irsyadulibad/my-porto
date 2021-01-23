<style>
  #hero {
    width: 100%;
    height: 100vh;
    background: url("/assets/img/<?= get_option('site_hero') ?>") top right no-repeat;
    background-size: cover;
    position: relative;
  }
</style>

<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1><?= get_option('general_name') ?></h1>
    <p>I'm <span class="typed" data-typed-items="<?= get_option('general_jobs') ?>"></span></p>
    <div class="social-links">
      <a href="https://facebook.com/<?= get_option('social_facebook') ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="https://instagram.com/<?= get_option('social_instagram') ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="https://t.me/<?= get_option('social_telegram') ?>" class="telegram"><i class="bx bxl-telegram"></i></a>
      <a href="https://linkedin.com/in/<?= get_option('social_linkedin') ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      <a href="https://github.com/<?= get_option('social_github') ?>" class="github"><i class="bx bxl-github"></i></a>
    </div>
  </div>
</section>
