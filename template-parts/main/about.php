<?php
$title = carbon_get_the_post_meta('main_about_title');
$descr = carbon_get_the_post_meta('main_about_descr');
$image = carbon_get_the_post_meta('main_about_img');
$items = carbon_get_the_post_meta('main_about_items');
?>
<section class="about sect pt-0 pb-0 border-b-gray">
  <div class="grid-12">
    <div class="col col-lg-7 about-main-left">
      <div class="about-main-content">
        <div class="sect-name">
          <span>My Clinic в цифрах</span>
          <span class="sep"></span>
          <span class="sect-name-count">01</span>
        </div>
        <div class="h4 mb-0 mb-lg-1">
          Каждая цифра —
        </div>
        <h2 class="h2">
          <?= $title; ?>
        </h2>
        <div class="text--lg text-secondary mb-70 mb-xl-24" style="max-width: 500px;">
          <?= $descr; ?>
        </div>
        <div class="about-main-image">
          <img class="aboutImg" src="<?= $image; ?>" alt="image">
        </div>
      </div>
    </div>
    <div class="col col-lg-5">
      <div class="aboutList">

        <?php
        $count = 0;
        foreach ($items as $item) :
          $count++;
          if ($count == 4) {
        ?>
            <div class="aboutItem aboutItem--last">
              <div class="aboutItemTitle text-white mb-3"><?php echo $item['title']; ?></div>
              <ul class="aboutItemList text-white" style="max-width: 350px;">

                <?php $inner_list = carbon_get_the_post_meta('main_about_last_list'); ?>
                <?php foreach ($inner_list as $inner_item) : ?>
                  <li>
                    <?php echo $inner_item['text']; ?>
                  </li>
                <?php endforeach; ?>

              </ul>
            </div>
          <?php
          } else {
          ?>
            <div class="aboutItem">
              <div class="d-flex flex-column">
                <div class="aboutItemTitle mb-0 mb-lg-1"><?php echo $item['title']; ?></div>
                <?php
                if (!empty($item['subtitle'])) {
                ?>
                  <div class="aboutItemSubtitle">
                    <?php echo $item['subtitle']; ?>
                  </div>
                <?php
                }
                ?>
              </div>

              <div class="aboutItemDescr">
                <?php echo $item['text']; ?>
              </div>
            </div>
          <?php
          }
          ?>

        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>