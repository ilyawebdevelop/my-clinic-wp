<?php
$review_id = isset($args['param_id_review']) ? $args['param_id_review'] : '';
?>
<div class="reviewsCard">
  <a href="<?php echo !empty($review_id) ?  carbon_get_post_meta($review_id, 'reviews_video_link') : carbon_get_the_post_meta('reviews_video_link'); ?>" class="reviewsCardImageW" data-fancybox>
    <img src="<?php echo get_the_post_thumbnail_url(!empty($review_id) ? $review_id : get_the_ID(), 'full'); ?>" alt="image" class="reviewsCardImage">

    <div class="reviewsCardVideoContent">
      <div class="reviewsCardTitle"><?php echo !empty($review_id) ? get_the_title($review_id) : get_the_title(); ?></div>
      <div class="reviewsCardDate">
        <?php echo !empty($review_id) ?  carbon_get_post_meta($review_id, 'reviews_date') : carbon_get_the_post_meta('reviews_date'); ?>
      </div>

      <?php
      if (!empty($related = carbon_get_post_meta(!empty($review_id) ? $review_id : get_the_ID(), 'reviews_doctor'))) {
        $post_ids = array_column($related, 'id');
        $my_posts = get_posts(array(
          'numberposts' => -1,
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
            <div class="reviewsCardPersonW">
              <div class="reviewsCardPersonImg">
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image">
              </div>
              <div class="d-flex flex-column">
                <div class="reviewsCardPersonText text-white">Отзыв о враче</div>
                <div class="reviewsCardPersonName text-white"><?php the_title(); ?></div>
              </div>
            </div>
      <?php
          }
          wp_reset_postdata(); // сброс
        }
      }
      ?>

    </div>

    <button class="video-play">
      <svg>
        <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#play' ?>"></use>
      </svg>
    </button>
  </a>
</div>