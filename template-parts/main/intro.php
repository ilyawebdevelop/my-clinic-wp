<?php
$title = carbon_get_the_post_meta('main_intro_title');
$main_intro_image = carbon_get_the_post_meta('main_intro_image');
$main_intro_after_btn = carbon_get_the_post_meta('main_intro_after_btn');
?>
<section class="intro intro--home sect">
  <img class="intro-home-abstr-l" src="<?= get_template_directory_uri() . '/assets/img/intro/intro-home-abstr-l.svg' ?>" alt="icon">
  <div class="container">

    <div class="introGrid">
      <img class="introLogoR" src="<?php echo carbon_get_theme_option('intro_vertical_logo'); ?>" alt="logo">
      <img src="<?= get_template_directory_uri() . '/assets/img/intro/intro-home-abstr-r.svg' ?>" alt="image" class="intro-home-abstr-r">
      <div class="introL">
        <h1 class="h1 title--white">
          <?= $title; ?>
        </h1>
        <div class="d-flex flex-column align-center w-100 w-sm-fit">
          <button
            class="main-btn button button--blue-dark border-hover-bottom pl-16 mb-2 h-lg-60 w-100 w-sm-fit justify-start d-none d-md-flex" data-fancybox data-src="#modalOrder">
            <div class="icon">
              <svg style="fill: var(--brand-200);">
                <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star' ?>"></use>
              </svg>
            </div>
            <span>записаться на консультацию</span>
          </button>
          <div class="text-center text-brand-400 mb-70 d-none d-md-flex">
            <?= $main_intro_after_btn; ?>
          </div>
        </div>
        <img src="<?php echo carbon_get_theme_option('intro_logo_my'); ?>" alt="logo" class="introLogoL">
      </div>
      <div class="introR">
        <div class="introImage">
          <img src="<?= $main_intro_image; ?>" alt="image">
        </div>

        <?php get_template_part('template-parts/main/intro-video-btn'); ?>   

        <button
          class="main-btn button button--blue-dark border-hover-bottom pl-16 mb-1 h-lg-60 w-100 w-md-fit justify-start d-flex d-md-none mx-auto">
          <div class="icon">
            <svg style="fill: var(--brand-200);">
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star' ?>"></use>
            </svg>
          </div>
          <span>записаться на консультацию</span>
        </button>
        <div class="text-center text-brand-400 d-flex d-md-none justify-center fz-13">
          <?= $main_intro_after_btn; ?>
        </div>

        <?php get_template_part('template-parts/main/intro-stock'); ?>

      </div>

    </div>

  </div>
</section>