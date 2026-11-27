<?php
//  id услуги страницы
$cat_id = get_the_ID();

// параметры по умолчанию
$doctor_posts = get_posts(array(
  'numberposts' => -1,
  // 'orderby'     => 'date',
  // 'order'       => 'DESC',             
  'post_type'   => 'page',
  'post_parent' => 33,
  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));

// Массив для подходящих ID докторов
$matched_doctors_ids = array();

if (!empty($doctor_posts)) {
  // 3. Перебираем каждый отзыв
  foreach ($doctor_posts as $doctor) {

    // 4. Получаем массив ассоциаций из Carbon Fields для этого отзыва
    $associated_services = carbon_get_post_meta($doctor->ID, 'doctors_service_cat');

    // 5. Если поле заполнено и это массив
    if (is_array($associated_services) && !empty($associated_services)) {

      // 6. Перебираем связанные услуги
      foreach ($associated_services as $service) {

        // 7. Если ID услуги в ассоциации совпадает с ID текущей страницы
        // Приводим к числу (int) на всякий случай, так как Carbon может отдавать строку
        if (isset($service['id']) && (int)$service['id'] === (int)$cat_id) {

          // 8. Записываем ID этого отзыва в массив (чтобы не дублировать)
          if (!in_array($doctor->ID, $matched_doctors_ids)) {
            $matched_doctors_ids[] = $doctor->ID;
          }

          break; // Если нашли совпадение, дальше этот отзыв не проверяем
        }
      }
    }
  }
}
if (!empty($matched_doctors_ids)) {
?>
  <section class="serv-doctor sect border-b-gray bg-white">
    <div class="container">

      <div class="grid-12 mb-4">
        <div class="col-lg-7">
          <h2 class="h2 h2--lg">
            <?php echo carbon_get_the_post_meta('service_doctor_title'); ?>
          </h2>
        </div>
        <div class="col-lg-5">
          <div class="text-secondary">
            <?php echo carbon_get_the_post_meta('service_doctor_descr'); ?>
          </div>
        </div>
      </div>
      <div class="grid-12 wp-tabs">
        <div class="col-xl-4 serv-doctor-tabs-thumb-wrap">
          <div class="wp-tabs__nav">
            <?php

            // 1. Группируем докторов по категориям
            $doctors_by_category = array();

            foreach ($matched_doctors_ids as $doctor_id) {
              // Получаем категории (термины таксономии doctors_cat) для этого доктора
              $terms = get_the_terms($doctor_id, 'doctors_cat');

              if ($terms && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                  // Складываем ID доктора в массив соответствующей категории
                  // Используем ID термина как ключ (slug тоже подошел бы)
                  $doctors_by_category[$term->term_id]['term'] = $term;
                  $doctors_by_category[$term->term_id]['doctors'][] = $doctor_id;
                }
              } else {
                // Если у доктора нет категории, кидаем его в "Без категории"
                $doctors_by_category[0]['term'] = (object) array('term_id' => 0, 'name' => 'Без категории');
                $doctors_by_category[0]['doctors'][] = $doctor_id;
              }
            }
            $count = 0;
            // 2. Выводим группы
            foreach ($doctors_by_category as $category_data) {
              $count++;
              $active  = ($count == 1) ? 'active' : '';
              $term = $category_data['term'];
              $doctors_in_cat = $category_data['doctors'];
            ?>
              <button class="wp-tabs__btn <?= $active; ?>" data-index="<?= $count; ?>">
                <span><?php echo esc_html($term->name); ?></span>
              </button>          
            <?php
            }
            ?>
          </div>
          <?php
          $count = 0;
          foreach ($doctors_by_category as $category_data) {

            $count++;
            $active  = ($count == 1) ? 'active' : '';
            $term = $category_data['term'];
            $doctors_in_cat = $category_data['doctors'];

          ?>
            <div class="wp-tabs__panel <?= $active; ?>" data-index="<?= $count; ?>">

              <div class="swiper serv-doctor-thumb-slider">
                <div class="swiper-wrapper">

                  <?php
                  // 3. Внутри категории выводим карточки докторов
                  $count_card = 0;
                  foreach ($doctors_in_cat as $doctor_id) :
                    $count_card++;
                    $doctor_post = get_post($doctor_id);
                    if (!$doctor_post) continue;
                  ?>              
                    <div class="swiper-slide serv-doctor-thumb-slide">
                      <div class="serv-doctor-thumb-slide-count">
                        0<?= $count_card; ?>
                      </div>
                      <div class="serv-doctor-thumb-slide-content">
                        <div class="serv-doctor-thumb-slide-title">
                          <?php echo get_the_title($doctor_id); ?>
                        </div>
                        <div class="serv-doctor-thumb-slide-work">
                          <?php echo carbon_get_post_meta($doctor_id, 'doctor_specs'); ?>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>

                </div>
              </div>

            </div>
          <?php
          }
          ?>
        </div>
        <div class="col-xl-8 serv-doctor-tabs-wrap">
          <?php
          $count = 0;
          // 2. Выводим группы
          foreach ($doctors_by_category as $category_data) {
            $count++;
            $active  = ($count == 1) ? 'active' : '';
            $term = $category_data['term'];
            $doctors_in_cat = $category_data['doctors'];
          ?>
            <div class="wp-tabs__panel <?= $active; ?>" data-index="<?= $count; ?>">
              <div class="sliderNav d-flex justify-end gap-3 align-center">
                <button type="button" class="navArrow w-72 navArrow--brand-100 navArrowPrev">
                  <svg>
                    <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-prev' ?>"></use>
                  </svg>
                </button>

                <button type="button" class="navArrow w-72 navArrow--brand-100 navArrowNext">
                  <svg>
                    <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-next' ?>"></use>
                  </svg>
                </button>
              </div>
              <div class="swiper serv-doctor-slider">
                <div class="swiper-wrapper">

                  <?php
                  // 3. Внутри категории выводим карточки докторов
                  $count_card = 0;
                  foreach ($doctors_in_cat as $doctor_id) :
                    $count_card++;
                    $doctor_post = get_post($doctor_id);
                    if (!$doctor_post) continue;
                  ?>
                    <div class="swiper-slide doctor-card">

                      <!-- Вертикальный текст, который виден ТОЛЬКО у неактивных слайдов -->
                      <div class="vertical-badge">Познакомиться с врачом</div>

                      <a href="<?php echo get_permalink($doctor_id); ?>" class="doctor-card__photo">
                        <?php echo get_the_post_thumbnail($doctor_id, 'large', ['class' => 'doctor-card__img']); ?>
                        <div class="bg"></div>
                      </a>

                      <div class="doctor-card__info">
                        <h3 class="doctor-card__name mb-1 mb-lg-2"><a href="#"> <?php echo get_the_title($doctor_id); ?></a></h3>
                        <p class="doctor-card__specialty text--lg"><?php echo carbon_get_post_meta($doctor_id, 'doctor_specs'); ?></p>
                        <?php
                        if (!empty(carbon_get_post_meta($doctor_id, 'doctor_specs_serv_descr'))) {
                        ?>
                          <div class="doctor-card-descr text-secondary">
                            <?php echo carbon_get_post_meta($doctor_id, 'doctor_specs_serv_descr'); ?>
                          </div>
                        <?php
                        }
                        ?>
                        <div class="d-flex gap-3 gap-xxl-6">
                          <div class="d-flex flex-column gap-1" style="min-width: 100px;">
                            <div class="h3 fz-32 fz-lg-26">
                              <?php echo carbon_get_post_meta($doctor_id, 'doctor_stazh'); ?>
                            </div>
                            <div class="text--md text-secondary">
                              стаж работы
                            </div>
                          </div>
                          <div class="d-flex flex-column gap-1">
                            <div class="h3 fz-32 fz-lg-26">
                              <?php echo esc_html($term->name); ?>
                            </div>
                            <div class="text--md text-secondary">
                              направление
                            </div>
                          </div>
                        </div>

                        <div class="doctor-card__cta mt-3">
                          <a href="<?php echo get_permalink($doctor_id); ?>" class="button button--brand-700 h-74 w-100 pr-16 pl-42 fz-15">
                            <span class="d-block mx-auto">Записаться на прием</span>
                            <div class="icon ml-auto">
                              <svg>
                                <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                              </svg>
                            </div>
                          </a>
                        </div>
                      </div>

                    </div>
                  <?php endforeach; ?>

                </div>
                <div class="swiper-scrollbar"></div>
              </div>

            </div>
          <?php
          }
          ?>

        </div>

      </div>
    </div>
  </section>
<?php
}

?>