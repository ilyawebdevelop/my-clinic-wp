<?php
$service_include_title = carbon_get_the_post_meta('service_include_title');
$service_include_descr = carbon_get_the_post_meta('service_include_descr');
$service_include_image = carbon_get_the_post_meta('service_include_image');
$service_include_after_image = carbon_get_the_post_meta('service_include_after_image');
$service_include_after_image = carbon_get_the_post_meta('service_include_after_image');

$service_include_table_top_title = carbon_get_the_post_meta('service_include_table_top_title');
$service_include_table_top_repeat = carbon_get_the_post_meta('service_include_table_top_repeat');

$service_include_table_top_2_title = carbon_get_the_post_meta('service_include_table_top_2_title');
$service_include_table_top_2_image = carbon_get_the_post_meta('service_include_table_top_2_image');
$service_include_table_top_2_link = carbon_get_the_post_meta('service_include_table_top_2_link');
$service_include_table_top_2_text = carbon_get_the_post_meta('service_include_table_top_2_text');
$service_include_table_top_2_price = carbon_get_the_post_meta('service_include_table_top_2_price');
$service_include_table_top_2_price_old = carbon_get_the_post_meta('service_include_table_top_2_price_old');

$service_include_price_from = carbon_get_the_post_meta('service_include_price_from');
$service_include_price_old = carbon_get_the_post_meta('service_include_price_old');
?>
<section class="service-include sect bg-white">
  <div class="container">
    <div class="grid-12">
      <div class="col-lg-7 mb-3 mb-lg-0">
        <h2 class="h2 mb-2 mb-lg-4">
          <?= $service_include_title; ?>
        </h2>
        <div class="content text-secondary mb-3 fz-lg-14">
          <p>
            <?= $service_include_descr; ?>
          </p>
        </div>
        <img src="<?= $service_include_image; ?>" alt="image" class="service-include-image mb-3">

        <div class="service-include-tags">
          <ul>

            <?php foreach ($service_include_after_image as $item) : ?>
              <li>
                <?php echo $item['text']; ?>
              </li>
            <?php endforeach; ?>

          </ul>
        </div>

      </div>
      <div class="col-lg-5">
        <div class="service-include-table">

          <div class="service-include-table-light">

            <div class="service-include-item">
              <div class="service-include-item-head mb-2 mb-lg-3">
                <div class="service-include-item-count">
                  01
                </div>
                <div class="fz-20 fz-xxl-16 fw-medium text-uppercase service-include-item-title">
                  <?= $service_include_table_top_title; ?>
                </div>
              </div>
              <div class="service-radio-list">

                <?php
                $count = 0;
                foreach ($service_include_table_top_repeat as $item) :
                  $count++;
                  $checked  = ($count == 1) ? 'checked' : '';
                ?>
                  <div class="service-radio-item">
                    <input id="sys_<?= $count; ?>" type="radio" name="system" <?= $checked; ?> hidden>
                    <label for="sys_<?= $count; ?>">
                      <div class="rect">

                      </div>
                      <div class="service-radio-item-text">
                        <?php echo $item['title']; ?>
                      </div>
                      <div class="service-radio-item-country">
                        <?php echo $item['text']; ?>
                      </div>
                    </label>
                  </div>
                <?php endforeach; ?>

              </div>
            </div>

            <div class="service-include-item">
              <div class="service-include-item-head mb-2 mb-lg-3">
                <div class="service-include-item-count">
                  02
                </div>
                <div class="fz-20 fz-xxl-16 fw-medium text-uppercase service-include-item-title">
                  <?= $service_include_table_top_2_title; ?>
                </div>
              </div>
              <div class="d-flex align-start align-xl-center gap-4 flex-column flex-xl-row">
                <div class="d-flex gap-2">
                  <?php
                  if (!empty($service_include_table_top_2_image)) {
                  ?>
                    <img class="service-include-item-image" src="<?= $service_include_table_top_2_image; ?>" alt="image">
                  <?php
                  }
                  ?>
                  <div class="text--sm text-brand-600 lh-160">
                    <?php
                    if (!empty($service_include_table_top_2_link)) {
                    ?>
                      <a class="hover-blue underline underline-dotted" href="<?= $service_include_table_top_2_link; ?>">В стоимость входят:</a><?php } ?> <?= $service_include_table_top_2_text; ?>
                  </div>
                </div>
                <div class="d-flex gap-2 flex-row-reverse flex-xl-column">
                  <div class="fz-18 line-trough text-action text-nowrap">
                    <?= $service_include_table_top_2_price_old; ?>
                  </div>
                  <div class="fz-32 text-brand-600 text-nowrap">
                    <?= $service_include_table_top_2_price; ?>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="service-include-table-dark">
            <div class="service-include-item">
              <div class="service-include-item-head">
                <div class="service-include-item-count">
                  03
                </div>
                <div class="fz-20 fz-xxl-16 fw-medium fw-lg-regular text-uppercase service-include-item-title text-white">
                  итого под ключ
                </div>
              </div>
              <div class="d-flex align-end gap-3 mb-2 mb-xxl-2">
                <div class="service-include-item-price-main text-white fz-52 fz-xxl-33">
                  <?= $service_include_price_from; ?>
                </div>
                <div class="service-include-item-price-old text-brand-100 line-trough fz-22 fz-xxl-18">
                  <?= $service_include_price_old; ?>
                </div>
              </div>
              <a href="#" class="button button--surface-bg h-74 pr-16 pl-42 fz-16 w-100" data-fancybox
                data-src="#modalOrder">
                <span class="text-center flex-1">Записаться на консультацию</span>
                <div class="icon ml-auto">
                  <svg>
                    <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                  </svg>
                </div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>