   <?php
    //  id услуги страницы
    $cat_id = get_the_ID();
    // параметры по умолчанию
    $reviews_posts = get_posts(array(
      'numberposts' => -1,
      // 'orderby'     => 'date',
      // 'order'       => 'DESC',             
      'post_type'   => 'reviews',
      'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ));

    // Массив для подходящих ID отзывов
    $matched_reviews_ids = array();

    if (!empty($reviews_posts)) {
      // 3. Перебираем каждый отзыв
      foreach ($reviews_posts as $review) {

        // 4. Получаем массив ассоциаций из Carbon Fields для этого отзыва
        $associated_services = carbon_get_post_meta($review->ID, 'reviews_service_cat');

        // 5. Если поле заполнено и это массив
        if (is_array($associated_services) && !empty($associated_services)) {

          // 6. Перебираем связанные услуги
          foreach ($associated_services as $service) {

            // 7. Если ID услуги в ассоциации совпадает с ID текущей страницы
            // Приводим к числу (int) на всякий случай, так как Carbon может отдавать строку
            if (isset($service['id']) && (int)$service['id'] === (int)$cat_id) {

              // 8. Записываем ID этого отзыва в массив (чтобы не дублировать)
              if (!in_array($review->ID, $matched_reviews_ids)) {
                $matched_reviews_ids[] = $review->ID;
              }

              break; // Если нашли совпадение, дальше этот отзыв не проверяем
            }
          }
        }
      }
    }

    ?>
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

              $rev_posts = get_posts(array(
                'numberposts' => -1,
                // 'orderby'     => 'date',
                // 'order'       => 'DESC',             
                'post_type'   => 'reviews',
                'post__in'       => $matched_reviews_ids,
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ));

              global $rev_post;

              foreach ($rev_posts as $rev_post) {
                setup_postdata($rev_post);
                $current_review_id = $rev_post->ID; // или get_the_ID();
                $args = ['param_id_review' =>  $current_review_id];

                $type_card =  carbon_get_post_meta($current_review_id, 'reviews_type');
                if ($type_card == 'text') {
              ?>
                 <div class="swiper-slide reviewsSlide">
                   <?php
                    get_template_part('template-parts/reviews/card', null, $args);
                    ?>
                 </div>
               <?php
                } elseif ($type_card == 'video') {
                ?>
                 <div class="swiper-slide reviewsSlide">
                   <?php
                    get_template_part('template-parts/reviews/card-video', null, $args);
                    ?>
                 </div>
             <?php
                }
                // формат вывода the_title() ...
              }
              wp_reset_postdata(); // сброс
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