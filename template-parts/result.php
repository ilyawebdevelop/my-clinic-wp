<?php
$main_portf_related = carbon_get_post_meta(11, 'main_portf_related');
if (!empty($main_portf_related)) {
?>

  <section class="result sect border-b-gray">
    <div class="container position-relative ">
      <div class="sect-name">
        <span>результаты лечения</span>
        <span class="sep"></span>
        <span class="sect-name-count">05</span>
      </div>
      <div class="grid-12 wp-tabs gap-4">
        <div class="resultLeft col-xl-6">
          <h2 class="h2 h2--lg mb-80 mb-xl-16">
            <?php echo carbon_get_theme_option('portfolio_title'); ?>
          </h2>
          <p class="text-secondary lh-175 d-block d-xl-none mb-4 fz-lg-14">
            <?php echo carbon_get_theme_option('portfolio_descr'); ?>
          </p>
          <div class="wp-tabs__nav mb-3">
            <!-- <button class="wp-tabs__btn active" data-index="1">Все</button> -->

            <?php
            $count = 0;
            foreach ($main_portf_related as $related_item) {
              $count++;
              if ($related_item['type'] == 'post') {
                $item_id = $related_item['id'];
                $active  = ($count == 1) ? 'active' : '';
            ?>
                <!-- Услуга -->
                <button class="wp-tabs__btn <?= $active; ?>" data-index="<?= $count; ?>"> <?= esc_html(get_the_title($item_id)); ?></button>
            <?php
              }
            }
            ?>

          </div>
          <div class="wp-tabs-body">

            <?php
            $count = 0;
            foreach ($main_portf_related as $related_item) {
              $count++;
              if ($related_item['type'] == 'post') {
                // получаем данные поста по его ID
                global $post;
                $post = get_post($related_item['id']);
                setup_postdata($post);
                $active  = ($count == 1) ? 'active' : '';
            ?>
                <!-- Услуга -->
                <div class="wp-tabs__panel <?= $active; ?>" data-index="<?= $count; ?>">
                  <?php
                  $cat_id = $post->ID;
                  ?>

                  <div class="swiperW">
                    <div class="resultThumbSliderW">
                      <button type="button" class="navArrow w-76 navArrow--brand-050 navArrowPrev vertical">
                        <svg>
                          <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-prev' ?>"></use>
                        </svg>
                      </button>
                      <div class="swiper resultThumbSlider">
                        <div class="swiper-wrapper">

                          <?php
                          // параметры по умолчанию
                          $my_posts = get_posts(array(
                            'numberposts' => -1,
                            // 'orderby'     => 'date',
                            // 'order'       => 'DESC',             
                            'post_type'   => 'portfolio',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                          ));
                          global $portfolio;
                          foreach ($my_posts as $portfolio) {
                            setup_postdata($portfolio);
                            $portfolio_id = $portfolio->ID;
                            $service_of_portfolio = carbon_get_post_meta($portfolio_id, 'portfolio_service');

                            // 2. Проверяем, что это массив и он не пустой
                            if (is_array($service_of_portfolio) && !empty($service_of_portfolio)) {

                              // 3. Перебираем массив связей
                              foreach ($service_of_portfolio as $item) {

                                // 4. Сравниваем ID из массива с вашей переменной $cat_id
                                // (Приводим к int на всякий случай, так как в массиве может быть строка)
                                if (isset($item['id']) && (int)$item['id'] === (int)$cat_id) {
                          ?>
                                  <div class="swiper-slide resultThumbSlide">
                                    <?php
                                    // Передаем $portfolio_id в функцию картинки (до картинки!)
                                    $img_id = carbon_get_post_meta($portfolio_id, 'portfolio_after_img');
                                    if ($img_id) : ?>
                                      <img src="<?php echo $img_id; ?>" alt="image">
                                    <?php endif; ?>
                                  </div>
                          <?php
                                }
                              }
                            }

                            // формат вывода the_title() ...
                          }
                          wp_reset_postdata(); // сброс
                          ?>

                        </div>
                      </div>
                      <button type="button" class="navArrow w-76 navArrow--brand-050 navArrowNext vertical">
                        <svg>
                          <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-next' ?>"></use>
                        </svg>
                      </button>
                    </div>
                    <div class="resultSliderW">

                      <div class="swiper resultSlider">
                        <div class="swiper-wrapper">

                          <?php
                          // параметры по умолчанию
                          $my_posts = get_posts(array(
                            'numberposts' => -1,
                            // 'orderby'     => 'date',
                            // 'order'       => 'DESC',             
                            'post_type'   => 'portfolio',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                          ));
                          global $portfolio;
                          foreach ($my_posts as $portfolio) {
                            setup_postdata($portfolio);
                            $portfolio_id = $portfolio->ID;
                            $service_of_portfolio = carbon_get_post_meta($portfolio_id, 'portfolio_service');

                            // 2. Проверяем, что это массив и он не пустой
                            if (is_array($service_of_portfolio) && !empty($service_of_portfolio)) {

                              // 3. Перебираем массив связей
                              foreach ($service_of_portfolio as $item) {

                                // 4. Сравниваем ID из массива с вашей переменной $cat_id
                                // (Приводим к int на всякий случай, так как в массиве может быть строка)
                                if (isset($item['id']) && (int)$item['id'] === (int)$cat_id) {
                          ?>
                                  <!-- Работа -->
                                  <div class="swiper-slide resultSlide">

                                    <h3 class="mb-2 mb-xl-3 text-action d-block d-xl-none"><?php echo get_the_title($portfolio_id); ?></h3>
                                    <?php
                                    $img_id = carbon_get_post_meta($portfolio_id, 'portfolio_after_img');
                                    $img_id_before = carbon_get_post_meta($portfolio_id, 'portfolio_before_img');
                                    if ($img_id) : ?>
                                      <div class="resultSlideBefore active">
                                        <img src="<?= $img_id_before; ?>" alt="image">
                                        <span>До</span>
                                      </div>
                                    <?php endif; ?>
                                    <div class="resultSlideAfter">
                                      <img src="<?= $img_id; ?>" alt="image">
                                      <span>После</span>
                                    </div>
                                    <div class="resultSlideAction">
                                      <button class="resultSlideBtn resultSlideBeforeBtn active">
                                        <img src="<?= $img_id_before; ?>" alt="image">
                                      </button>
                                      <button class="resultSlideBtn resultSlideAfterBtn">
                                        <img src="<?= $img_id; ?>" alt="image">
                                      </button>
                                    </div>
                                  </div>
                          <?php
                                }
                              }
                            }

                            // формат вывода the_title() ...
                          }
                          wp_reset_postdata(); // сброс
                          ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            }
            wp_reset_postdata(); // сброс
            ?>

          </div>
        </div>

        <div class="resultRight col-xl-6">
          <div class="mb-5 mb-xl-24 d-none d-xl-block">
            <p class="text-secondary lh-175">
              <?php echo carbon_get_theme_option('portfolio_descr'); ?>
            </p>
          </div>
          <div class="wp-tabs__nav mb-5">
            <!-- <button class="wp-tabs__btn active" data-index="1">Все</button> -->

            <?php
            $count = 0;
            foreach ($main_portf_related as $related_item) {
              $count++;
              if ($related_item['type'] == 'post') {
                $item_id = $related_item['id'];
                $active  = ($count == 1) ? 'active' : '';
            ?>
                <!-- Услуга -->
                <button class="wp-tabs__btn <?= $active; ?>" data-index="<?= $count; ?>"> <?= esc_html(get_the_title($item_id)); ?></button>
            <?php
              }
            }
            ?>

          </div>

          <div class="wp-tabs-body">

            <?php
            $count = 0;
            foreach ($main_portf_related as $related_item) {
              $count++;
              if ($related_item['type'] == 'post') {
                // получаем данные поста по его ID
                $cat_id = $related_item['id'];
                $active  = ($count == 1) ? 'active' : '';
            ?>
                <!-- Услуга -->
                <div class="wp-tabs__panel <?= $active; ?>" data-index="<?= $count; ?>">
                  <div class="swiper resultContentSlider">
                    <div class="swiper-wrapper">

                      <?php
                      // параметры по умолчанию
                      $my_posts = get_posts(array(
                        'numberposts' => -1,
                        // 'orderby'     => 'date',
                        // 'order'       => 'DESC',             
                        'post_type'   => 'portfolio',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                      ));
                      global $portfolio;
                      foreach ($my_posts as $portfolio) {
                        setup_postdata($portfolio);
                        $portfolio_id = $portfolio->ID;
                        $service_of_portfolio = carbon_get_post_meta($portfolio_id, 'portfolio_service');

                        // 2. Проверяем, что это массив и он не пустой
                        if (is_array($service_of_portfolio) && !empty($service_of_portfolio)) {

                          // 3. Перебираем массив связей
                          foreach ($service_of_portfolio as $item) {

                            // 4. Сравниваем ID из массива с вашей переменной $cat_id
                            // (Приводим к int на всякий случай, так как в массиве может быть строка)
                            if (isset($item['id']) && (int)$item['id'] === (int)$cat_id) {

                              $portfolio_time_count = carbon_get_post_meta($portfolio_id, 'portfolio_time_count');
                              $portfolio_time_name = carbon_get_post_meta($portfolio_id, 'portfolio_time_name');
                              $portfolio_number_count = carbon_get_post_meta($portfolio_id, 'portfolio_number_count');
                              $portfolio_number_name = carbon_get_post_meta($portfolio_id, 'portfolio_number_name');
                              $portfolio_specs_count = carbon_get_post_meta($portfolio_id, 'portfolio_specs_count');
                              $portfolio_specs_name = carbon_get_post_meta($portfolio_id, 'portfolio_specs_name');
                              $portfolio_doctor = carbon_get_post_meta($portfolio_id, 'portfolio_doctor');

                      ?>
                              <!-- Работа -->
                              <div class="swiper-slide resultContentSlide">
                                <h3 class="mb-4 text-action d-none d-xl-block"><?php echo get_the_title($portfolio_id); ?></h3>
                                <div class="text-uppercase text-champagne font-family-second mb-2 fz-xl-18">Проведенная работа</div>
                                <div class="content fz-xl-14">
                                  <?php
                                  echo apply_filters('the_content', get_post_field('post_content', $portfolio_id));
                                  ?>
                                </div>

                                <div class="swiper resultStatSlider mb-4 mb-lg-5">
                                  <div class="swiper-wrapper">


                                    <?php
                                    if (!empty($portfolio_time_count)) {
                                    ?>
                                      <div class="swiper-slide">
                                        <div class="resultStatItem">
                                          <div class="resultStatItemCount text-action">
                                            <?= $portfolio_time_count; ?>
                                          </div>
                                          <div class="d-flex flex-column">
                                            <div class="text-action">
                                              <?= $portfolio_time_name; ?>
                                            </div>
                                            <div class="text-primary text--sm">заняло лечение</div>
                                          </div>
                                        </div>
                                      </div>
                                    <?php
                                    }
                                    if (!empty($portfolio_number_count)) {
                                    ?>
                                      <div class="swiper-slide">
                                        <div class="resultStatItem">
                                          <div class="resultStatItemCount text-action">
                                            <?= $portfolio_number_count; ?>
                                          </div>
                                          <div class="d-flex flex-column">
                                            <div class="text-action">
                                              <?= $portfolio_number_name; ?>
                                            </div>
                                            <div class="text-primary text--sm">потребовалось</div>
                                          </div>
                                        </div>
                                      </div>
                                    <?php
                                    }
                                    if (!empty($portfolio_specs_count)) {
                                    ?>
                                      <div class="swiper-slide">
                                        <div class="resultStatItem">
                                          <div class="resultStatItemCount text-action">
                                            <?= $portfolio_specs_count; ?>
                                          </div>
                                          <div class="d-flex flex-column">
                                            <div class="text-action">
                                              <?= $portfolio_specs_name; ?>
                                            </div>
                                            <div class="text-primary text--sm">работали над результатом</div>
                                          </div>
                                        </div>
                                      </div>
                                    <?php
                                    }
                                    ?>

                                  </div>
                                </div>

                                <?php
                                if (!empty($portfolio_doctor)) {
                                  $post_ids = array_column($portfolio_doctor, 'id');
                                  $doctors_posts = get_posts(array(
                                    'numberposts' => -1,
                                    'post_type' => 'page',
                                    'include' => $post_ids,
                                  ));
                                  if (!empty($portfolio_doctor)) { ?>
                                    <div class="text-uppercase text-champagne font-family-second mb-2 fz-xl-18">Кто проводил лечение</div>
                                    <div class="swiper doctorListSlider mb-4 mb-xl-5">
                                      <div class="swiper-wrapper">

                                        <?php
                                        global $doctors_post;
                                        foreach ($doctors_posts as $doctors_post) {
                                          setup_postdata($doctors_post);
                                          $doctor_specs = carbon_get_post_meta($doctors_post->ID, 'doctor_specs');
                                          $featured_img_url = get_the_post_thumbnail_url($doctors_post->ID, 'medium');
                                        ?>
                                          <div class="swiper-slide">
                                            <div class="resultDoctorItem">
                                              <a href="<?php echo get_the_permalink($doctors_post->ID); ?>" class="resultDoctorItemImg">
                                                <img src="<?= $featured_img_url; ?>" alt="image">
                                              </a>
                                              <div class="d-flex flex-column">
                                                <a href="<?php echo get_the_permalink($doctors_post->ID); ?>" class="resultDoctorItemTitle lh-140 fz-xl-14"><?php echo get_the_title($doctors_post->ID); ?></a>
                                                <span class="text-secondary text--md fz-xl-12"><?= $doctor_specs; ?></span>
                                              </div>
                                            </div>
                                          </div>
                                        <?php
                                        }
                                        wp_reset_postdata(); // сброс
                                        ?>

                                      </div>
                                      <div class="swiper-scrollbar"></div>
                                    </div>
                                <?php
                                  }
                                }
                                ?>
                                <div class="d-flex gap-3 gap-lg-4 resultContentSlideActionBtnW">

                                  <a href="#" class="button button--brand-700 h-74 pr-16 pl-42 pl-lg-24 fz-16 justify-between" data-fancybox data-src="#modalOrder">
                                    <span class="d-block mx-auto">хочу такую улыбку</span>
                                    <div class="icon">
                                      <svg>
                                        <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                                      </svg>
                                    </div>
                                  </a>

                                  <a href="/nashi-raboty/" class="button button--border-strong h-74 pr-16 pl-42 pl-lg-24 fz-16 justify-between">
                                    <span class="d-block mx-auto">все наши работы</span>
                                    <div class="icon">
                                      <svg>
                                        <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                                      </svg>
                                    </div>
                                  </a>

                                </div>
                              </div>
                      <?php
                            }
                          }
                        }

                        // формат вывода the_title() ...
                      }
                      wp_reset_postdata(); // сброс
                      ?>

                    </div>
                  </div>
                </div>
            <?php
              }
            }
            ?>

          </div>

        </div>
      </div>
    </div>
  </section>
<?php
}
?>