<?php
if (!empty(carbon_get_the_post_meta('serv_how_repeat'))) {
?>
  <section class="service-how sect border-b-gray swiperW">
    <div class="container">
      <div class="grid-12 mb-2">
        <div class="col-lg-7">
          <h2 class="h2">
            <?php echo carbon_get_the_post_meta('serv_how_title'); ?>
          </h2>
        </div>
        <div class="col-lg-5">
          <div class="text-secondary fz-xl-14">
            <?php echo carbon_get_the_post_meta('serv_how_descr'); ?>
          </div>
        </div>
      </div>
      <div class="grid-12">
        <div class="col-lg-4">
          <div class="fz-24 text-secondary mb-6 d-none d-lg-block">
            <?php echo carbon_get_the_post_meta('serv_how_descr_lg'); ?>
          </div>
          <div class="swiper howThumbSlider">
            <div class="swiper-wrapper">

              <?php
              $count = 0;
              $items = carbon_get_the_post_meta('serv_how_repeat'); ?>
              <?php foreach ($items as $item) :
                $count++;
              ?>
                <div class="swiper-slide howThumbSlide">
                  <div class="howThumbSlideCount">
                    0<?= $count; ?>
                  </div>
                  <div class="howThumbSlideContent">
                    <div class="howThumbSlideChanged">
                      выбрано
                    </div>
                    <div class="howThumbSlideTitle">
                      <?php echo $item['title']; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
            <div class="swiper-scrollbar"></div>
          </div>
          <div class="sliderNav d-none d-lg-flex gap-4 align-center">
            <button type="button" class="navArrow w-76 navArrow--brand-100 navArrowPrev">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-prev' ?>"></use>
              </svg>
            </button>
            <div class="service-how-pagination swiper-pagination"></div>
            <button type="button" class="navArrow w-76 navArrow--brand-100 navArrowNext">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-next' ?>"></use>
              </svg>
            </button>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="swiper howSlider">
            <div class="swiper-wrapper">

              <?php
              $count = 0;
              $items = carbon_get_the_post_meta('serv_how_repeat');
              foreach ($items as $item) :
                $count++;
              ?>
                <div class="swiper-slide howSlide">
                  <img class="howSlideImg" src="<?php echo $item['image']; ?>" alt="image">
                  <div class="howSlideContent">
                    <div class="howSlideTitle">
                      Этап <?= $count; ?>
                    </div>
                    <div class="howSlideText">
                      <?php echo $item['textarea']; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}
?>