<section class="serv-price sect border-b-gray pb-0">
  <div class="container">
    <div class="grid-12 mb-3 mb-lg-5">
      <div class="col-lg-7">
        <h2 class="h2">
          <?php echo carbon_get_the_post_meta('serv_price_title'); ?>
        </h2>
      </div>
      <div class="col-lg-5">
        <div class="text-secondary fz-lg-14">
          <?php echo carbon_get_the_post_meta('serv_price_descr'); ?>
        </div>
      </div>
    </div>
    <div class="grid-12 gap-4 wp-tabs">
      <div class="col-xl-4">
        <div class="wp-tabs__nav-wrapper">
          <div class="wp-tabs__nav-title ls-08 text-uppercase text-secondary">
            Направления
          </div>
          <div class="wp-tabs__nav">

            <?php
            $count = 0;
            $items = carbon_get_the_post_meta('serv_price_tabs'); ?>
            <?php foreach ($items as $item) :
              $count++;
              $active  = ($count == 1) ? 'active' : '';
            ?>
              <button class="wp-tabs__btn <?= $active; ?>" data-index="<?= $count; ?>">
                <div class="wp-tabs__btn-count">
                  0<?= $count; ?>
                </div>
                <span><?php echo $item['serv_price_tabs_title']; ?></span>
                <img src="<?= get_template_directory_uri() . '/assets/img/icons/arrow-round-link.svg' ?>" alt="icon" class="wp-tabs__btn-icon">
              </button>
            <?php endforeach; ?>

          </div>
          <img src="<?php echo carbon_get_the_post_meta('serv_price_image'); ?>" alt="image" class="serv-price-image">
        </div>

      </div>
      <div class="col-xl-8">
        <div class="serv-price-right">

          <?php
          $count = 0;
          $items = carbon_get_the_post_meta('serv_price_tabs'); ?>
          <?php foreach ($items as $item) :
            $count++;
            $active  = ($count == 1) ? 'active' : '';
          ?>
            <div class="wp-tabs__panel <?= $active; ?>" data-index="<?= $count; ?>">
              <div class="serv-price-content">
                <h3 class="fz-42 fz-xl-22 mb-3 mb-xl-4">
                  <?php echo $item['serv_price_tabs_title']; ?>
                </h3>
                <div class="serv-price-list">
                  <ul>
                    <?php $prices_list = $item['prices_list']; ?>
                    <?php foreach ($prices_list as $prices_item) : ?>
                      <li class="serv-price-item">
                        <div class="serv-price-item-name">
                          <?php echo $prices_item['name']; ?>
                        </div>
                        <?php
                        if (!empty($prices_item['free'])) {
                        ?>
                          <div class="serv-price-item-price serv-price-item-price--text">
                            <?php echo $prices_item['free']; ?>
                          </div>
                        <?php
                        }

                        if (!empty($prices_item['price'])) {
                        ?>
                          <div class="serv-price-item-price">
                            <?php echo $prices_item['price']; ?>
                          </div>
                        <?php
                        }
                        ?>
                      </li>
                    <?php endforeach; ?>

                  </ul>
                </div>
              </div>

            </div>
          <?php endforeach; ?>

          <div class="d-flex gap-4 gap-sm-5 mt-xl-16 mt-65 align-start align-md-center justify-between flex-column flex-md-row">
            <div class="text--sm serv-price-footer-descr text-secondary">
              Цены указаны в рублях <br> и не являются публичной офертой
            </div>
            <a href="/czeny/" class="button button--border-strong h-74 pr-16 pl-42 pl-lg-24 fz-16 text-center fz-lg-14 gap-2 gap-sm-3">
              <span class="text-nowrap text-sm-wrap text-left">посмотреть весь прайс-лист</span>
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
  </div>
</section>