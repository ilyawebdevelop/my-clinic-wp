<section class="sect pt-50 pt-xl-25 border-b-gray border-b-sm-none pb-sm-none">
  <div class="container">

    <div class="grid-12 gap-lg-6 mb-2 mb-lg-0">

      <div class="col-lg-6">
        <h1 class="h2 mb-2">
          <?php echo carbon_get_theme_option('categories_title'); ?>
        </h1>
        <div class="h4 mb-1 mb-lg-3 text-action">
          <?php echo carbon_get_theme_option('categories_subtitle'); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="text-secondary fz-lg-14">
          <?php echo carbon_get_theme_option('categories_descr'); ?>
        </div>
      </div>
    </div>

    <div class="grid-12 gap-0 catCardList">

      <?php
      // параметры по умолчанию
      $my_posts = get_posts(array(
        'numberposts' => -1,
        'post_type'   => 'page',
        // 'orderby'     => 'date',
        // 'order'       => 'DESC',   
        'post_parent' => 97,
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ));

      if (!empty($my_posts)) {
      ?>
        <?php
        global $post;
        foreach ($my_posts as $post) {
          setup_postdata($post);
        ?>
          <div class="col-md-6 col-lg-4">
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
        ?>
      <?php
      }
      ?>

    </div>

  </div>
</section>