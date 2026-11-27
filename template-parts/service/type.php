<?php
$serv_type_title = carbon_get_the_post_meta('serv_type_title');
$serv_type_descr = carbon_get_the_post_meta('serv_type_descr');
$serv_type_repeat = carbon_get_the_post_meta('serv_type_repeat');
if (!empty($serv_type_repeat)) {
?>
  <section class="service-type sect">
    <div class="container">

      <div class="grid-12 mb-4">
        <div class="col-lg-7">
          <h2 class="h2">
            <?= $serv_type_title; ?>
          </h2>
        </div>
        <div class="col-lg-5">
          <div class="text--lg text-secondary fz-xl-12">
            <?= $serv_type_descr; ?>
          </div>
        </div>
      </div>

      <div class="grid-12 gap-0 gap-lg-4 wp-tabs">
        <div class="col-lg-6">
          <div class="wp-tabs__nav">

            <?php
            $count = 0;
            foreach ($serv_type_repeat as $item) :
              $count++;
              $active  = ($count == 1) ? 'active' : '';
            ?>
              <button class="wp-tabs__btn <?= $active; ?>" data-index="<?= $count; ?>">
                <div class="wp-tabs__btn-head">
                  <span class="accord-type-icon-list">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star' ?>"></use>
                    </svg>
                  </span>
                  <div><?php echo $item['title']; ?></div>
                  <span class="accord-type-icon"></span>
                </div>
                <div class="wp-tabs__btn-body">
                  <div class="wp-tabs__btn-body-text">
                    <?php echo $item['text']; ?>
                  </div>
                  <?php
                  if (!empty($item['link'])) {
                  ?>
                    <a href="<?php echo $item['link']; ?>" class="stocksCardBtn mt-auto">
                      <?php echo $item['link_name']; ?>
                      <svg>
                        <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                      </svg>
                    </a>
                  <?php
                  }
                  ?>

                </div>
              </button>
            <?php endforeach; ?>

          </div>
        </div>
        <div class="col-lg-6">

          <?php
          $count = 0;
          foreach ($serv_type_repeat as $item) :
            $count++;
            $active  = ($count == 1) ? 'active' : '';
          ?>
            <div class="wp-tabs__panel <?= $active; ?>" data-index="<?= $count; ?>">
              <div class="implant-slider-wrap">
                <div class="swiper implant-slider">
                  <div class="swiper-wrapper">

                    <?php $images = $item['gal']; ?>
                    <?php foreach ($images as $image) : ?>
                      <div class="swiper-slide">
                        <img src="<?php echo wp_get_attachment_url($image); ?>" alt="image">
                      </div>
                    <?php endforeach; ?>

                  </div>
                </div>

                <div class="implant-slider-pagination-wrap">
                  <div class="implant-slider-pagination">
                    <span class="current">01</span>
                    <span class="current-title text--lg fw-medium text-secondary text-uppercase">
                      <?php echo $item['title']; ?>
                    </span>
                  </div>
                </div>

              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>

    </div>
  </section>
<?php
}
?>