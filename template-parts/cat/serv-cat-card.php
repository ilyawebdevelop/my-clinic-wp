<?php
$service_card_after_title = carbon_get_the_post_meta('service_card_after_title');
$service_card_img = carbon_get_the_post_meta('service_card_img');
?>
<a href="<?php the_permalink(); ?>" class="serv-cat-card">
  <div class="serv-cat-card-count">
    <?php echo str_pad($args['param1'], 2, '0', STR_PAD_LEFT); ?>
  </div>
  <div class="serv-cat-card-image">
    <img src="<?= $service_card_img; ?>" alt="image">
  </div>
  <div class="serv-cat-card-content d-flex gap-2 align-end justify-between">
    <div class="d-flex flex-column gap-1">
      <div class="h3 fz-24 fz-sm-14">
        <?php the_title(); ?>
      </div>
      <?php
      if (!empty($service_card_after_title)) {
      ?>
        <div class="text--sm text-uppercase text-secondary fz-sm-8">
          <?= $service_card_after_title; ?>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="round-btn w-46 border-strong mt-auto mb-auto d-none d-xl-flex">
      <svg>
        <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
      </svg>
    </div>
  </div>
</a>