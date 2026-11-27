<?php
$main_stock_link =  carbon_get_the_post_meta('main_stock_link');
$main_stock_title_1 =  carbon_get_the_post_meta('main_stock_title_1');
$main_stock_title_2 =  carbon_get_the_post_meta('main_stock_title_2');
$main_stock_image =  carbon_get_the_post_meta('main_stock_image');
$main_stock_logo =  carbon_get_the_post_meta('main_stock_logo');
$main_stock_price_old =  carbon_get_the_post_meta('main_stock_price_old');
$main_stock_price_current =  carbon_get_the_post_meta('main_stock_price_current');
?>
<a href="<?= $main_stock_link; ?>" class="intro-stock" style="background-image: url('<?= $main_stock_image; ?>');">
  <div class="d-flex justify-between align-end">
    <div class="d-block">
      <div class="intro-stock-date mb-1 mb-xl-3">
        <span><?= $main_stock_title_1; ?></span>
        <span><?= $main_stock_title_2; ?></span>
      </div>
      <img src="<?= $main_stock_logo; ?>" alt="logo" class="intro-stock-logo mb-1 mb-xl-3">
      <div class="fw-semibold mb-1 text-white intro-stock-price">
        <?= $main_stock_price_old; ?>
      </div>
      <div class="line-trough text-white fz-xl-10">
        <?= $main_stock_price_current; ?>
      </div>
    </div>
    <div class="round-btn w-46 bg-opacity-40">
      <svg>
        <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
      </svg>
    </div>
  </div>
</a>