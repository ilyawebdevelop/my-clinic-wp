<?php
$ways = carbon_get_the_post_meta('main_ways');
?>
<section class="cats sect border-b-gray">
  <div class="container position-relative">
    <div class="sect-name">
      <span>Чем поможем</span>
      <span class="sep"></span>
      <span class="sect-name-count">02</span>
    </div>
    <div class="grid-12 gap-lg-6 mb-2 mb-lg-0">

      <div class="col-lg-5">
        <h2 class="h2 h2--lg mb-1">
          <?php echo carbon_get_theme_option('categories_title'); ?>
        </h2>
        <div class="h4 mb-1 mb-lg-3 text-action">
          <?php echo carbon_get_theme_option('categories_subtitle'); ?>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="text-secondary fz-lg-14">
          <?php echo carbon_get_theme_option('categories_descr'); ?>
        </div>
      </div>
    </div>
    <div class="grid-12 gap-0 catCardList">

      <?php
      if (!empty($ways)) {
        foreach ($ways as $related_item) {
          if ($related_item['type'] == 'post') {
            // получаем данные поста по его ID
            global $post;
            $post = get_post($related_item['id']);
            setup_postdata($post);
      ?>
            <div class="col-md-6 col-xl-4">
              <div class="catCard">
                <div class="catCardContent">
                  <h4 class="catCardTitle h4"><?php echo $post->post_title; ?></h4>

                  <?php
                  // параметры по умолчанию
                  $my_inner_posts = get_posts(array(
                    'numberposts' => -1,
                    'post_type'   => 'page',
                    // 'orderby'     => 'date',
                    // 'order'       => 'DESC',   
                    'post_parent' => $post->ID,
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                  ));

                  if (!empty($my_inner_posts)) {
                  ?>
                    <ul>

                      <?php
                      global $inner_post;
                      foreach ($my_inner_posts as $inner_post) {
                        setup_postdata($inner_post);
                      ?>
                        <li>
                          <a href="<?php echo get_permalink($inner_post->ID); ?>"><?php echo $inner_post->post_title; ?></a>
                        </li>
                      <?php
                      }
                      ?>

                    </ul>
                  <?php
                  }
                  ?>

                  <?php
                  if (!empty(carbon_get_the_post_meta('service_cat_price'))) {
                  ?>
                    <div class="catCardPrice">
                      <span class="catCardPriceText">от</span>
                      <span class="catCardPriceSum"><?php echo carbon_get_the_post_meta('service_cat_price'); ?> ₽</span>
                    </div>
                  <?php
                  }
                  ?>
                </div>
                <img class="catCardImage" src="<?php echo carbon_get_the_post_meta('service_cat_img'); ?>" alt="image">
                <a class="catCardLink" href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"></a>
              </div>
            </div>
      <?php
          }
        }
        wp_reset_postdata(); // сброс
      }
      ?>


    </div>
    <a href="/uslugi" class="button button--brand-100 w-100 justify-between pl-42 pl-lg-24 pr-16 text-action mt-3 h-lg-60">
      <span>посмотреть все услуги</span>
      <div class="icon">
        <svg>
          <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
        </svg>
      </div>
    </a>

  </div>
</section>