<section class="doctors sect bg-white overflow-hidden border-b-gray swiperW">
  <div class="container position-relative">
    <div class="sect-name">
      <span>команда клиники</span>
      <span class="sep"></span>
      <span class="sect-name-count">04</span>
    </div>
    <div class="grid-12 mb-3">
      <div class="col-lg-5">
        <h2 class="h2 h2--lg" style="max-width: 350px;">
          <?php echo carbon_get_the_post_meta('main_doctors_title'); ?>
        </h2>
      </div>
      <div class="col-lg-7">
        <div class="text-secondary ml-auto fz-lg-14" style="max-width: 745px;">
          <?php echo carbon_get_the_post_meta('main_doctors_descr'); ?>
        </div>
      </div>
    </div>
    <div class="swiper doctorsSlider">
      <div class="swiper-wrapper">

        <?php
        if (!empty($related = carbon_get_the_post_meta('main_doctors'))) {
          $count_total = count($related);
          $count_doctor = 0;
          foreach ($related as $related_item) {
            $count_doctor++;
            if ($related_item['type'] == 'post') {
              // получаем данные поста по его ID

              $post = get_post($related_item['id']);
              $terms = get_the_terms($post->ID, 'doctor_spec');
              // print_r($post);
        ?>
              <div class="swiper-slide doctor-card">

                <!-- Вертикальный текст, который виден ТОЛЬКО у неактивных слайдов -->
                <div class="vertical-badge">Познакомиться с врачом</div>

                <a href="<?php the_permalink(); ?>" class="doctor-card__photo">
                  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                  <div class="bg"></div>
                </a>

                <div class="doctor-card__info">
                  <!-- Информация, которая показывается ТОЛЬКО у активного слайда -->
                  <div class="doctor-card__active-details">
                    <div class="doctor-card__number">
                      <span><?= str_pad($count_doctor, 2, '0', STR_PAD_LEFT); ?></span>
                      <span class="sep"></span>
                      <span><?= str_pad($count_total, 2, '0', STR_PAD_LEFT); ?></span>
                    </div>
                    <?php
                    if (!empty(carbon_get_the_post_meta('doctor_specs'))) {
                    ?>
                      <div class="doctor-card__status" style="display: none;"><?php echo carbon_get_the_post_meta('doctor_specs'); ?></div>
                    <?php
                    }
                    ?>
                  </div>

                  <h3 class="doctor-card__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php
                  if (!empty(carbon_get_the_post_meta('doctor_specs'))) {
                  ?>
                    <p class="doctor-card__specialty"><?php echo carbon_get_the_post_meta('doctor_specs'); ?></p>
                  <?php
                  }
                  ?>
                  <div class="doctor-card__experience">
                    <span>стаж работы</span>
                    <div class="sep"></div>
                    <span><?php echo carbon_get_the_post_meta('doctor_stazh'); ?></span>
                  </div>

                  <!-- Кнопка CTA, которая плавно появляется ТОЛЬКО у активного слайда -->
                  <div class="doctor-card__cta">
                    <a href="<?php the_permalink(); ?>" class="button button--brand-700 h-74 w-100 pr-16 pl-42 pl-xl-24 fz-15 fz-xl-14">
                      <span>Записаться на прием</span>
                      <div class="icon">
                        <svg>
                          <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                        </svg>
                      </div>
                    </a>
                  </div>
                </div>

              </div>
        <?php
            }
          }
          wp_reset_postdata(); // сброс

        }
        ?>

      </div>
      <!-- <div class="slider-pagination-wrapper">
        <div class="swiper-scrollbar"></div>
      </div> -->
      <div class="doctorsSliderNav">
        <button type="button" class="navArrow w-76 navArrow--brand-050 navArrowPrev">
          <svg>
            <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-prev' ?>"></use>
          </svg>
        </button>
        <button type="button" class="navArrow w-76 navArrow--brand-050 navArrowNext">
          <svg>
            <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-next' ?>"></use>
          </svg>
        </button>
      </div>

    </div>
  </div>
</section>