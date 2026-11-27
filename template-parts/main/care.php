<?php
$main_care_title = carbon_get_the_post_meta('main_care_title');
$main_care_descr = carbon_get_the_post_meta('main_care_descr');
$main_care_image = carbon_get_the_post_meta('main_care_image');
$main_care_image_descr = carbon_get_the_post_meta('main_care_image_descr');
$main_care_adv_list = carbon_get_the_post_meta('main_care_adv_list');
?>
<section class="care sect border-b-gray swiperW">
  <div class="container">

    <div class="careW">
      <div class="careContent position-relative">
        <div class="sect-name">
          <span>наш подход</span>
          <span class="sep"></span>
          <span class="sect-name-count">07</span>
        </div>
        <div class="sectHead">
          <h2 class="h2 h2--lg">
            <?= $main_care_title; ?>
          </h2>
        </div>

        <div class="careDescr fz-xl-14">
          <?= $main_care_descr; ?>
        </div>
      </div>

      <div class="careImageW">
        <div class="careImageDescr line-star-vertical"><?= $main_care_image_descr; ?></div>
        <div class="careImage">
          <img src="<?= $main_care_image; ?>" alt="image">
        </div>
      </div>

      <div class="carListW">

        <div class="swiper careSlider">
          <div class="swiper-wrapper">

            <?php foreach ($main_care_adv_list as $item) :
              $w39 = 'w-39';
              $w70 = 'w-70';
              $icon_width = $item['icon_width'];
            ?>
              <div class="swiper-slide">

                <div class="careItem">
                  <div class="careItemIcon">
                    <span><?php echo $item['count']; ?></span>
                    <img class="<?= $icon_width; ?>" src="<?php echo $item['icon']; ?>" alt="icon">
                  </div>
                  <div class="careItemContent">
                    <h4><?php echo $item['title']; ?></h4>
                    <div class="careItemDescr">
                      <?php echo $item['text']; ?>
                    </div>
                  </div>
                </div>

              </div>
            <?php endforeach; ?>

          </div>

        </div>
        <div class="swiper-scrollbar"></div>

      </div>
    </div>

  </div>
</section>