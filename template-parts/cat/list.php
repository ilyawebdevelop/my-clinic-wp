<?php
$cat_serv_title = carbon_get_the_post_meta('cat_serv_title');
$cat_serv_descr = carbon_get_the_post_meta('cat_serv_descr');
$page_id = get_the_ID();

?>
<?php

$my_posts = get_posts(array(
  'numberposts' => -1,
  'post_type' => 'page',
  'post_parent' => $page_id,
));
if (!empty($my_posts)) { ?>
  <section class="cat-type sect border-b-gray">
    <div class="container">

      <div class="grid-12 mb-3 mb-lg-5">
        <div class="col-lg-7">
          <h2 class="h2">
            <?= $cat_serv_title; ?>
          </h2>
        </div>
        <div class="col-lg-5">
          <div class="text-secondary fz-xl-12">
            <?= $cat_serv_descr; ?>
          </div>
        </div>
      </div>

      <div class="grid-12 gap-1">

        <?php
        global $post;
        $count_post = 0;
        foreach ($my_posts as $post) {
          setup_postdata($post);
          $count_post++;
          $args = ['param1' => $count_post];
        ?>
          <div class="col-6 col-lg-4 col-xl-3">
            <?php
            get_template_part('template-parts/cat/serv-cat-card', null, $args);
            ?>
          </div>
        <?php
        }
        wp_reset_postdata(); // сброс
        ?>

      </div>

    </div>
  </section>
<?php
}
?>