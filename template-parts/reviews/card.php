<?php
$review_id = isset($args['param_id_review']) ? $args['param_id_review'] : '';
?>
<div class="reviewsCard bg-white cardText">
  <div class="reviewsCardContent">

    <div class="reviewsCardBorderR">
      <div class="reviewsCardContentHead">
        <div class="reviewsCardTitleW">
          <div class="reviewsCardTitle text-secondary"><?php echo !empty($review_id) ? get_the_title($review_id) : get_the_title(); ?></div>
          <img src="<?php echo !empty($review_id) ?  carbon_get_post_meta($review_id, 'reviews_logo') : carbon_get_the_post_meta('reviews_logo'); ?>" alt="logo" class="reviewsCardLogo">
        </div>
        <div class="reviewsCardDateW">
          <div class="reviewsCardStars star_<?php echo !empty($review_id) ?  carbon_get_post_meta($review_id, 'reviews_stars') : carbon_get_the_post_meta('reviews_stars'); ?>">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star-rev' ?>"></use>
            </svg>
            <svg>
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star-rev' ?>"></use>
            </svg>
            <svg>
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star-rev' ?>"></use>
            </svg>
            <svg>
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star-rev' ?>"></use>
            </svg>
            <svg>
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star-rev' ?>"></use>
            </svg>
          </div>
          <div class="reviewsCardDate">
            <?php echo !empty($review_id) ?  carbon_get_post_meta($review_id, 'reviews_date') : carbon_get_the_post_meta('reviews_date'); ?>
          </div>
        </div>
      </div>

      <div class="reviewsCardContentText">
        <div class="content content--hidden">
          <?php echo !empty($review_id) ? get_the_content($review_id) : get_the_content(); ?>
        </div>
        <?php
        if (carbon_get_the_post_meta('reviews_text_btn_hide') == 1 || carbon_get_post_meta($review_id, 'reviews_text_btn_hide')) {
        ?>
          <button class="js-show-more" type="button" style="display: none;">Читать весь отзыв</button>
        <?php
        } else {
        ?>
          <button class="js-show-more" type="button">Читать весь отзыв</button>
        <?php
        }
        ?>

      </div>
    </div>

    <?php
    if (!empty($related = carbon_get_post_meta(!empty($review_id) ? $review_id : get_the_ID(), 'reviews_doctor'))) {
      $post_ids = array_column($related, 'id');
      $my_posts = get_posts(array(
        'numberposts' => -1,
        'orderby' => 'rand',
        'post_type' => 'page',
        'include' => $post_ids,
      ));
      if (!empty($my_posts)) { ?>
        <?php

        global $post;
        foreach ($my_posts as $post) {
          setup_postdata($post);
        ?>
          <!-- Врач, где отображать также данный отзыв -->
          <div class="reviewsCardPersonW mt-4">
            <div class="reviewsCardPersonImg">
              <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image">
            </div>
            <div class="d-flex flex-column w-100 reviewsCardPersonNameW">
              <div class="reviewsCardPersonText text-primary">Отзыв о враче</div>
              <div class="reviewsCardPersonName text-action">
                <?php the_title(); ?>
              </div>

            </div>
          </div>
    <?php
        }
        wp_reset_postdata(); // сброс
      }
    }
    ?>

  </div>
</div>