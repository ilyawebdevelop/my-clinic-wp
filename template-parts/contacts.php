<section class="contacts sect">
  <div class="container">

    <div class="sect-name d-flex d-xxl-none">
      <span>контакты</span>
      <span class="sep"></span>
      <span class="sect-name-count">13</span>
    </div>

    <div class="sectHead">
      <h2 class="h2 h2--lg">
        <?php echo carbon_get_theme_option('contacts_title'); ?>
      </h2>
    </div>

    <div class="grid-12 gap-4">
      <div class="col-xl-7 col-xxl-7 contactsLeft">
        <div class="contactsMapW">

          <div class="contactsMapCont">
            <div class="map contacts__map" data-center="[<?php echo carbon_get_theme_option('map_coord'); ?>]" data-zoom="<?php echo carbon_get_theme_option('map_zoom'); ?>"
              id="map">
            </div>
          </div>

          <img src="<?php echo carbon_get_theme_option('contacts_map_logo'); ?>" alt="logo" class="contactsLogo">

          <div class="mapInfo">
            <ul>

              <?php $items = carbon_get_theme_option('contacts_after_map_list');
              $count = 0;
              ?>
              <?php foreach ($items as $item) :
                $count++;
                if ($count == 1) {
              ?>
                  <li>
                    <?php echo $item['text_1']; ?>
                  </li>
                <?php
                } else {
                ?>
                  <li>
                    <span><?php echo $item['text_1']; ?></span>
                    <div class="sep"></div>
                    <span><?php echo $item['text_2']; ?></span>
                  </li>
                <?php
                }
                ?>

              <?php endforeach; ?>

            </ul>
          </div>

        </div>
      </div>
      <div class="col-xxl-1 d-none d-xxl-block"></div>
      <div class="col-xl-5 col-xxl-4">
        <div class="mb-4 mb-xl-5">
          <div class="font-family-third text-uppercase text-champagne mb-1 ls-12 fz-xl-14">
            Приезжайте к нам
          </div>
          <div class="fz-24 fz-xl-20 text-uppercase lh-140">
            <?php echo carbon_get_theme_option('crb_address_br'); ?>
          </div>
        </div>
        <div class="mb-4 mb-xl-5">
          <div class="font-family-third text-uppercase text-champagne mb-1 ls-12 fz-xl-14">
            Позвоните нам
          </div>
          <a href="tel:<?php echo carbon_get_theme_option('crb_phone_clean'); ?>" class="hover-champagne d-flex h3 mb-0 text-uppercase">
            <?php echo carbon_get_theme_option('crb_phone'); ?>
          </a>
          <a href="tel:<?php echo carbon_get_theme_option('crb_phone_2_clean'); ?>" class="hover-champagne d-flex h3 text-uppercase">
            <?php echo carbon_get_theme_option('crb_phone_2'); ?>
          </a>
        </div>
        <div class="mb-4 mb-xl-5">
          <div class="font-family-third text-uppercase text-champagne mb-1 ls-12 fz-xl-14">
            Написать нам
          </div>
          <a href="mailto:myclinicstomatologia@gmail.com" class="hover-champagne d-flex fz-20">
            <?php echo carbon_get_theme_option('crb_mail'); ?>
          </a>
          <div class="socials d-block d-lg-none">
            <ul>
              <?php $items = carbon_get_theme_option('socials_repeat'); ?>
              <?php foreach ($items as $item) : ?>
                <li>
                  <a href="<?php echo $item['link']; ?>" target="_blank" rel="nofollow">
                    <?php echo $item['text']; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="sep contacts-sep"></div>

        <div class="contactsDescr">
          <?php echo carbon_get_theme_option('contacts_answer'); ?>
        </div>

        <a href="<?php echo carbon_get_theme_option('crb_way_link'); ?>" class="button button--brand-700 h-74 pr-16 pl-42 fz-15 w-100 w-sm-fit" target="_blank">
          <span class="d-block mx-auto">построить маршрут</span>
          <div class="icon ml-sm-auto">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
            </svg>
          </div>
        </a>

        <div class="socials d-none d-lg-block">
          <ul>

            <?php $items = carbon_get_theme_option('socials_repeat'); ?>
            <?php foreach ($items as $item) : ?>
              <li>
                <a href="<?php echo $item['link']; ?>" target="_blank" rel="nofollow">
                  <?php echo $item['text']; ?>
                </a>
              </li>
            <?php endforeach; ?>

          </ul>
        </div>

      </div>
    </div>

  </div>
</section>