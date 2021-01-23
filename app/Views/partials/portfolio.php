<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Portfolio</h2>
      <p><?= get_option('site_desc_portfolio') ?></p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
        <?php foreach($categories as $cat): ?>
          <li data-filter=".filter-<? $cat->slug ?>"><?= $cat->name ?></li>
        <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <?php foreach($portfolios as $porto): ?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $porto->category->slug ?>">
        <div class="portfolio-wrap">
          <img src="/assets/img/portfolio/<?= $porto->image ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?= $porto->title ?></h4>
            <p><?= $porto->category->name ?></p>
            <div class="portfolio-links">
              <a href="/assets/img/portfolio/<?= $porto->image ?>" data-gall="portfolioGallery" class="venobox" title="<?= $porto->title ?>"><i class="bx bx-plus"></i></a>
              <a href="/portfolio/<?= $porto->slug ?>" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>
