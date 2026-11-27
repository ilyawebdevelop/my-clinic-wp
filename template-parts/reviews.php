<section class="reviews sect border-b-gray">
  <div class="container position-relative">

    <div class="sect-name">
      <span>отзывы</span>
      <span class="sep"></span>
      <span class="sect-name-count">09</span>
    </div>

    <div class="reviewsHead mb-3 mb-xl-0">
      <div class="grid-12 gap-2 gap-lg-4">
        <div class="col-lg-7">
          <h2 class="h2 h2--lg">
            <?php echo carbon_get_theme_option('reviews_title'); ?>
          </h2>
        </div>
        <div class="col-lg-5">
          <p class="text-secondary lh-175 fz-xl-14">
            <?php echo carbon_get_theme_option('reviews_descr'); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="swiperW">
      <div class="sliderNav d-none d-xl-flex">
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
      <div class="swiper reviewsSlider">
        <div class="swiper-wrapper">

          <?php
          if (!empty($related = carbon_get_the_post_meta('main_reviews'))) {
            foreach ($related as $related_item) {
              if ($related_item['type'] == 'post') {
                // получаем данные поста по его ID
                global $post;
                $post = get_post($related_item['id']);
                setup_postdata($post);
                $type_card =  carbon_get_the_post_meta('reviews_type');
                if ($type_card == 'text') {
          ?>
                  <div class="swiper-slide reviewsSlide">
                    <?php
                    get_template_part('template-parts/reviews/card');
                    ?>
                  </div>
                <?php
                } elseif ($type_card == 'video') {
                ?>
                  <div class="swiper-slide reviewsSlide">
                    <?php
                    get_template_part('template-parts/reviews/card-video');
                    ?>
                  </div>
                <?php
                }
                ?>
          <?php
              }
            }
            wp_reset_postdata(); // сброс
          }
          ?>

        </div>

        <div class="slider-pagination-wrapper">
          <div class="swiper-scrollbar"></div>
          <!-- <div class="swiper-pagination swiper-pagination-punkt"></div> -->
        </div>

      </div>
    </div>

  </div>
</section>