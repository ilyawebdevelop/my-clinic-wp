<?php
$rate_title = carbon_get_theme_option('rate_title');
$rate_img = carbon_get_theme_option('rate_img');
$rate_main_count = carbon_get_theme_option('rate_main_count');
$rate_main_title = carbon_get_theme_option('rate_main_title');
$rate_main_descr = carbon_get_theme_option('rate_main_descr');
$rate_list = carbon_get_theme_option('rate_list');
?>
<section class="rate sect border-b-gray pb-0">
  <div class="container position-relative">

    <div class="sect-name">
      <span>рейтинг</span>
      <span class="sep"></span>
      <span class="sect-name-count">10</span>
    </div>

    <h2 class="h2 h2--lg">
      <?= $rate_title; ?>
    </h2>
  </div>

  <div class="rateContentSect">
    <div class="container">
      <div class="rateContentWrap">
        <div class="rateContentInner">

          <div class="rateNumW">
            <div class="rateNum">
              <div class="rateNumTitle">
                <?= $rate_main_count; ?>
              </div>
              <div class="rateNumStars">
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
              <div class="rateNumAv">
                <?= $rate_main_title; ?>
              </div>
              <div class="rateNumDescr">
                <?= $rate_main_descr; ?>
              </div>
            </div>
            <div class="rateContentImageWrap d-block d-xl-none">
              <img src="<?= $rate_img; ?>" alt="image" class="rateContentImage">
            </div>
          </div>

          <div class="rateList">

            <?php foreach ($rate_list as $item) : ?>
              <div class="rateItem">
                <a href="<?php echo $item['link']; ?>" class="rateItemLogo" target="_blank">
                  <img src="<?php echo $item['icon']; ?>" alt="logo">
                </a>
                <div class="rateItemLinkW">
                  <div class="rateItemCount">
                    <?php echo $item['number']; ?>
                  </div>
                  <a href="<?php echo $item['link']; ?>" class="rateItemLink" target="_blank">
                    <?php echo $item['count']; ?>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
        <div class="rateContentImageWrap d-none d-xl-block">
          <img src="<?= $rate_img; ?>" alt="image" class="rateContentImage">
        </div>
      </div>
    </div>
  </div>

</section>