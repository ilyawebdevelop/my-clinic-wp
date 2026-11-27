<?php
$serv_ind_title = carbon_get_the_post_meta('serv_ind_title');
$serv_ind_descr = carbon_get_the_post_meta('serv_ind_descr');
$serv_ind_repeat = carbon_get_the_post_meta('serv_ind_repeat');

$serv_ind_card_bg_title = carbon_get_the_post_meta('serv_ind_card_bg_title');
$serv_ind_card_bg_descr = carbon_get_the_post_meta('serv_ind_card_bg_descr');
$serv_ind_card_bg_fio = carbon_get_the_post_meta('serv_ind_card_bg_fio');
$serv_ind_card_bg_image = carbon_get_the_post_meta('serv_ind_card_bg_image');
$serv_ind_card_bg_spec = carbon_get_the_post_meta('serv_ind_card_bg_spec');
$serv_ind_card_bg_after_btn = carbon_get_the_post_meta('serv_ind_card_bg_after_btn');
if (!empty($serv_ind_repeat)) {
?>
  <section class="indications sect border-b-gray">
    <div class="container">
      <div class="grid-12 gap-2 mb-3 mb-lg-5">
        <div class="col-lg-7">
          <h2 class="h2">
            <?= $serv_ind_title; ?>
          </h2>
        </div>
        <div class="col-lg-5">
          <div class="text-secondary fz-xl-10 fz-xl-12">
            <?= $serv_ind_descr; ?>
          </div>
        </div>
      </div>
      <div class="grid-12 gap-3">
        <div class="col-lg-7">
          <ul class="indicationsList">

            <?php
            $count = 0;
            foreach ($serv_ind_repeat as $item) :
              $count++;
            ?>
              <li class="indicationsItem">
                <div class="indicationsItemCount">
                  0<?= $count; ?>
                </div>
                <div class="d-flex flex-column gap-1">
                  <h3 class="fz-24 fz-xl-14">
                    <?php echo $item['title']; ?>
                  </h3>
                  <div class="text-secondary fz-xl-10">
                    <?php echo $item['text']; ?>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>

          </ul>
        </div>

        <?php
        if (!empty($serv_ind_card_bg_title)) {
        ?>
          <div class="col-lg-5">
            <div class="indicationsCont">
              <h3 class="fz-32 text-white mb-1 mb-xxl-2">
                <?= $serv_ind_card_bg_title; ?>
              </h3>
              <div class="fz-20 text-brand-300 lh-130 fz-xxl-14">
                <?= $serv_ind_card_bg_descr; ?>
              </div>
              <div class="indicationsContWrap">
                <img src="<?= $serv_ind_card_bg_image; ?>" alt="doctor" class="indicationsContImage">
                <div class="indicationsContAbout">
                  <div class="indicationsContName">
                    <?= $serv_ind_card_bg_fio; ?>
                  </div>
                  <div class="indicationsContWork">
                    <?= $serv_ind_card_bg_spec; ?>
                  </div>
                </div>
                <a href="#" class="button button--surface-bg h-74 pr-16 pl-42 fz-16 w-100" data-fancybox data-src="#modalOrder">
                  <span class="text-center flex-1">Записаться на&nbsp;консультацию</span>
                  <div class="icon ml-auto">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                    </svg>
                  </div>
                </a>
              </div>
              <ul class="indicationsContList">

                <?php foreach ($serv_ind_card_bg_after_btn as $item) : ?>
                  <li>
                  <?php echo $item['text']; ?>
                  </li>
                <?php endforeach; ?>
                
              </ul>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
<?php
}
?>