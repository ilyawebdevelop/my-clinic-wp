<?php
$cat_intro_subtitle = carbon_get_the_post_meta('cat_intro_subtitle');
$cat_intro_title = carbon_get_the_post_meta('cat_intro_title');
$cat_intro_descr_lg = carbon_get_the_post_meta('cat_intro_descr_lg');
$cat_intro_descr_sm = carbon_get_the_post_meta('cat_intro_descr_sm');
$service_cat_price_text = carbon_get_the_post_meta('service_cat_price_text');
$cat_intro_video_link = carbon_get_the_post_meta('cat_intro_video_link');
$cat_intro_video_btn = carbon_get_the_post_meta('cat_intro_video_btn');
?>
<section class="intro-cat sect pt-0 border-b-gray position-relative pb-0">
  <div class="container position-relative">

    <div class="intro-subtitle-sidebar"><span class="text-brand-300">атлас услуг</span></div>

    <div class="grid-12 gap-0 mb-3 mb-lg-5">
      <div class="col-lg-5">
        <div class="d-flex flex-column intro-cat-left">
          <div class="intro-cat-title-wrap">
            <div class="mb-3 mb-lg-4">
              <?php get_template_part('template-parts/breadcrumbs-inner'); ?>
            </div>
            <?php
            if (!empty($cat_intro_subtitle)) {
            ?>
              <div class="text-uppercase text-secondary fz-20 mb-2">
                <?= $cat_intro_subtitle; ?>
              </div>
            <?php
            }
            if (!empty($cat_intro_title)) {
            ?>
              <h1 class="h1 mb-4">
                <?= $cat_intro_title; ?>
              </h1>
            <?php
            }
            ?>
          </div>
          <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image" class="intro-cat-image d-block d-lg-none">
          <div class="intro-cat-content">
            <?php
            if (!empty($cat_intro_subtitle)) {
            ?>
              <div class="intro-cat-descr h3 text-no-uppercase lh-110 text-white">
                <?= $cat_intro_descr_lg; ?>
              </div>
            <?php
            }
            ?>
            <?php
            if (!empty($cat_intro_descr_sm)) {
            ?>
              <div class="intro-cat-descr-sec text-white">
                <?= $cat_intro_descr_sm; ?>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image" class="intro-cat-image">
      </div>
    </div>

    <div class="grid-12 align-center pb-5">
      <div class="col-lg-6 col-xxl-4 order-lg-2">
        <button class="main-btn button button--brand-700 border-hover-bottom pl-16 mx-xl-auto w-100 w-sm-fit flex-row-reverse flex-lg-row justify-between" data-fancybox data-src="#modalOrder">
          <div class="icon">
            <svg style="fill: var(--brand-200);">
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star' ?>"></use>
            </svg>
          </div>
          <span class="d-block mx-auto">записаться на консультацию</span>
        </button>
      </div>
      <div class="col-lg-6 col-xxl-4 order-lg-1">
        <div class="d-flex flex-column align-center gap-1 gap-lg-2 mb-1 mb-lg-0">
          <span class="d-flex align-start gap-1 intro-cat-price">
            от <?php echo carbon_get_the_post_meta('service_cat_price'); ?>
            <img src="<?= get_template_directory_uri() . '/assets/img/icons/rub-blue.svg' ?>" alt="rub">
          </span>
          <?php
          if (!empty($service_cat_price_text)) {
          ?>
            <span class="h3 fz-22 text-center"><?= $service_cat_price_text; ?></span>
          <?php
          }
          ?>
        </div>
      </div>
      <?php
      if (!empty($cat_intro_video_link)) {
      ?>
        <div class="col-12 col-xxl-4 order-lg-3">
          <a href="<?= $cat_intro_video_link; ?>" class="button button--border-strong h-74 pr-16 pl-42 fz-16 ml-auto mr-xxl-auto w-100 w-sm-fit" data-fancybox>
            <span class="d-block mx-auto"><?= $cat_intro_video_btn; ?></span>
            <div class="icon">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
              </svg>
            </div>
          </a>
        </div>
      <?php
      }
      ?>

    </div>

  </div>
  <img src="<?php echo carbon_get_theme_option('intro_vertical_logo_light'); ?>" alt="logo" class="intro-logo-clinic">
</section>