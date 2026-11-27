<?php
$title = carbon_get_the_post_meta('main_cause_title');
$main_cause_descr = carbon_get_the_post_meta('main_cause_descr');
$main_cause_repeat = carbon_get_the_post_meta('main_cause_repeat');
$main_cause_after_btn = carbon_get_the_post_meta('main_cause_after_btn');
$main_cause_image = carbon_get_the_post_meta('main_cause_image');
$main_cause_doctor_title = carbon_get_the_post_meta('main_cause_doctor_title');
$main_cause_doctor_spec = carbon_get_the_post_meta('main_cause_doctor_spec');
$main_cause_doctor_descr = carbon_get_the_post_meta('main_cause_doctor_descr');
?>
<section class="cause sect position-relative border-b-gray">
  <div class="container position-relative">
    <div class="sect-name">
      <span>консультация</span>
      <span class="sep"></span>
      <span class="sect-name-count">03</span>
    </div>
    <div class="grid-12 swiperW">
      <div class="col-xl-6 col-xxl-5">
        <h2 class="h2 h2--lg mb-2 mb-xl-4">
          <?= $title; ?>
        </h2>
        <div class="causeDescr text--lg text-secondary mb-3 mb-xl-4">
          <?= $main_cause_descr; ?>
        </div>

        <div class="causeDir d-flex d-xl-none mb-3">
          <div class="causeDirImage">
            <img src="<?= $main_cause_image; ?>" alt="image">
            <div class="bg"></div>
          </div>
          <div class="causeDirContent">
            <h3 class="h3 mb-1">
              <?= $main_cause_doctor_title; ?>
            </h3>
            <div class="text-secondary text--md"><?= $main_cause_doctor_spec; ?></div>
            <div class="sep"></div>
            <div class="text-cursive causeDirDescr">
              <?= $main_cause_doctor_descr; ?>
            </div>
          </div>
        </div>

        <div class="swiper causeSlider mb-4 mb-xl-5">
          <div class="swiper-wrapper">

            <?php foreach ($main_cause_repeat as $item) : ?>
              <div class="swiper-slide causeSlide">
                <?php echo $item['text']; ?>
              </div>
            <?php endforeach; ?>

          </div>
          <div class="swiper-scrollbar"></div>
        </div>

        <button class="button button--brand-700 pl-42 pl-lg-24 pr-16 mb-2">
          <span>Записаться на консультацию</span>
          <div class="icon">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
            </svg>
          </div>
        </button>

        <div class="d-flex gap-1 causeLinks">

          <?php foreach ($main_cause_after_btn as $item) : ?>
            <div><?php echo $item['text']; ?></div>
          <?php endforeach; ?>

        </div>

      </div>
      <div class="col-xl-6 col-xxl-7">
        <div class="causeDir d-none d-xl-flex">
          <div class="causeDirImage">
            <img src="<?= $main_cause_image; ?>" alt="image">
            <div class="bg"></div>
          </div>
          <div class="causeDirContent">
            <h3 class="h3 mb-3">
              <?= $main_cause_doctor_title; ?>
            </h3>
            <div class="text-secondary"><?= $main_cause_doctor_spec; ?></div>
            <div class="sep"></div>
            <div class="text-cursive causeDirDescr">
              <?= $main_cause_doctor_descr; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img class="causeAbstr" src="<?= get_template_directory_uri() . '/assets/img/bg/flower-right-bg.svg' ?>" alt="image">
</section>