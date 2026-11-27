<?php
$main_dir_title = carbon_get_the_post_meta('main_dir_title');
$main_dir_descr = carbon_get_the_post_meta('main_dir_descr');
$main_dir_fio = carbon_get_the_post_meta('main_dir_fio');
$main_dir_list = carbon_get_the_post_meta('main_dir_list');
$main_dir_logo = carbon_get_the_post_meta('main_dir_logo');

$main_dir_video_link = carbon_get_the_post_meta('main_dir_video_link');
$main_dir_video_text_1 = carbon_get_the_post_meta('main_dir_video_text_1');
$main_dir_video_text_2 = carbon_get_the_post_meta('main_dir_video_text_2');
$main_dir_video_poster = carbon_get_the_post_meta('main_dir_video_poster');
?>
<section class="dir sect border-b-gray">
  <div class="container position-relative">
    <div class="sect-name">
      <span>основатель клиники</span>
      <span class="sep"></span>
      <span class="sect-name-count">06</span>
    </div>
    <div class="grid-12">
      <div class="col-lg-6 col-xxl-5">
        <h2 class="h2 h2--lg mb-2">
          <?= $main_dir_title; ?>
        </h2>
        <div class="dirDescr text-cursive">
          <?= $main_dir_descr; ?>
        </div>
        <div class="d-none d-lg-block">
          <div class="dirName">
            <?= $main_dir_fio; ?>
          </div>
          <div class="dirWorkList">
            <ul>

              <?php foreach ($main_dir_list as $item) : ?>
                <li><?php echo $item['text']; ?></li>
              <?php endforeach; ?>

            </ul>
          </div>
          <img src="<?= $main_dir_logo; ?>" alt="logo" class="dirLogo">
          <a href="/o-klinike/" class="button button--border-strong h-74 pr-16 pl-42 fz-16">
            Узнать больше о клинике
            <div class="icon">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
              </svg>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-xxl-7">
        <div class="dirVideo">
          <a href="<?= $main_dir_video_link; ?>" class="dirVideoImgW" data-fancybox>
            <img src="<?= $main_dir_video_poster; ?>" alt="image" class="dirVideoImg">
            <button class="video-play">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#play' ?>"></use>
              </svg>
            </button>
          </a>
          <div class="dirVideoFooter">
            <span><?= $main_dir_video_text_1; ?></span>
            <span><?= $main_dir_video_text_2; ?></span>
          </div>
        </div>
        <div class="d-block d-lg-none mt-3">
          <div class="dirName">
            <?= $main_dir_fio; ?>
          </div>
          <div class="d-flex gap-4 align-center mb-3">
            <div class="dirWorkList mb-0">
              <ul>
                <?php foreach ($main_dir_list as $item) : ?>
                  <li><?php echo $item['text']; ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <img src="<?= $main_dir_logo; ?>" alt="logo" class="dirLogo mb-0">
          </div>

          <a href="/o-klinike/" class="button button--border-strong h-74 pr-16 pl-42 fz-16">
            Узнать больше о клинике
            <div class="icon">
              <svg>
                <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>