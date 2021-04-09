<?= $this->extend('layouts/portfolio') ?>

<?= $this->section('content') ?>
	<main id="main">

    <!-- ======= Portfolio Details ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title"><?= $portfolio->title ?></h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="/assets/img/portfolio/<?= $portfolio->image ?>" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: <?= $portfolio->category->name ?></li>
            </ul>

            <?= $portfolio->content ?>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details -->

  </main><!-- End #main -->
<?= $this->endSection() ?>
