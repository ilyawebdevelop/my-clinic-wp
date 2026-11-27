<?php
$main_gal_title = carbon_get_the_post_meta('main_gal_title');
$main_gal_descr = carbon_get_the_post_meta('main_gal_descr');
$gal_repeat = carbon_get_theme_option('gal_slider_tabs');
?>
<section class="gal sect border-b-gray pb-0 swiperW">
  <div class="container position-relative">

    <div class="sect-name">
      <span>галерея</span>
      <span class="sep"></span>
      <span class="sect-name-count">08</span>
    </div>

    <div class="galHead">
      <div class="grid-12">
        <div class="col-lg-7">
          <h2 class="h2 h2--lg">
            <?= $main_gal_title; ?>
          </h2>
        </div>
        <div class="col-lg-5">
          <p class="text-secondary lh-175 fz-xl-14 mb-3 mb-lg-0">
            <?= $main_gal_descr; ?>
          </p>
        </div>
      </div>
    </div>

  </div>

  <div class="wp-tabs">

    <?php
    $count = 0;
    foreach ($gal_repeat as $item) :
      $count++;
      if ($count == 1) {
        $active = 'active';
      } else {
        $active = '';
      }
    ?>
      <div class="wp-tabs__panel <?= $active; ?>" data-index="<?= $count; ?>">
        <div class="swiperW">
          <div class="container">
            <div class="sliderNav">
              <button type="button" class="navArrow w-76 navArrow--brand-100 navArrowPrev">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-prev' ?>"></use>
                </svg>
              </button>
              <button type="button" class="navArrow w-76 navArrow--brand-100 navArrowNext">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-next' ?>"></use>
                </svg>
              </button>
            </div>
          </div>

          <div class="swiper galSlider">
            <div class="swiper-wrapper">

              <?php $gal = $item['gal_slider']; ?>
              <?php foreach ($gal as $gal_item) : ?>
                <a href="<?php echo wp_get_attachment_url($gal_item); ?>" class="swiper-slide" data-fancybox="gallery-<?= $count; ?>">
                  <img src="<?php echo wp_get_attachment_url($gal_item); ?>" alt="image">
                </a>
              <?php endforeach; ?>

            </div>

          </div>
        </div>
      </div>

    <?php endforeach; ?>

    <div class="wp-tabs__nav-wrap">
      <div class="container">

        <div class="wp-tabs__nav">
          <div class="swiper navSlider">
            <div class="swiper-wrapper">

              <?php
              $count = 0;
              foreach ($gal_repeat as $item) :
                $count++;
                if ($count == 1) {
                  $active = 'active';
                } else {
                  $active = '';
                }
              ?>
                <div class="swiper-slide navSlide">
                  <button class="wp-tabs__btn <?= $active; ?>" data-index="<?= $count; ?>">
                    <span>0<?= $count; ?></span>
                    <div><?php echo $item['gal_slider_name']; ?></div>
                  </button>
                </div>
              <?php endforeach; ?>

            </div>

          </div>
        </div>
        <div class="swiper-scrollbar"></div>

      </div>
    </div>

  </div>

</section>