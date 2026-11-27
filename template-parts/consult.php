<section class="consult sect border-b-gray">
  <div class="container position-relative">

    <div class="sect-name">
      <span>консультация</span>
      <span class="sep"></span>
      <span class="sect-name-count">12</span>
    </div>

    <div class="grid-12 align-center">
      <div class="col-lg-5">

        <div class="sectHead">
          <h2 class="h2 h2--lg">
            <?php echo carbon_get_theme_option('crb_sconsult_title'); ?>
          </h2>
        </div>

        <div class="sectDescr mb-3 mb-lg-5">
          <?php echo carbon_get_theme_option('crb_sconsult_descr'); ?>
        </div>

        <div class="consultSmWrapBg">
          <div class="consultImageW d-block d-lg-none">
            <img src="<?php echo carbon_get_theme_option('crb_sconsult_image'); ?>" alt="image">
            <img class="consultImageAbstr" src="<?= get_template_directory_uri() . '/assets/img/consult/abstract.svg' ?>" alt="abstract">
          </div>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="f4fcdc1" title="Консультация"]'); ?>

      </div>
      <div class="col-lg-1 d-none d-lg-block"></div>

      <div class="col-lg-6 d-none d-lg-block">
        <div class="consultImageW">
          <img src="<?php echo carbon_get_theme_option('crb_sconsult_image'); ?>" alt="image">
          <img class="consultImageAbstr" src="<?= get_template_directory_uri() . '/assets/img/consult/abstract.svg' ?>" alt="abstract">
        </div>
      </div>

    </div>

  </div>
</section>