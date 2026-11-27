<?php
$title_opt =  carbon_get_theme_option('faq_title');
$descr_opt =  carbon_get_theme_option('faq_descr');
$image_opt =  carbon_get_theme_option('faq_img');
$repeat_opt =  carbon_get_theme_option('faq_repeat');
?>
<section class="faq sect border-b-gray">
  <div class="container position-relative">

    <div class="sect-name">
      <span>вопросы и ответы</span>
      <span class="sep"></span>
      <span class="sect-name-count">11</span>
    </div>

    <div class="grid-12 gap-4 gap-lg-5">
      <div class="col-lg-6">
        <h2 class="h2 h2--lg">
          <?= $title_opt; ?>
        </h2>
        <div class="grid-12 gap-3 gap-xl-5">
          <div class="col-lg-8 col-xxl-6">
            <div class="faqDescr">
              <?= $descr_opt; ?>
            </div>
            <a href="#" class="button button--brand-700 h-74 w-100 pr-16 pl-42 pl-xl-24 fz-15 d-none d-lg-flex"
              data-fancybox data-src="#modalOrder">
              Задать свой вопрос
              <div class="icon">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                </svg>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-xxl-6">
            <img src="<?= $image_opt; ?>" class="faqImage">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="accordion-wrapper">

          <?php
          $count = 0;
          foreach ($repeat_opt as $item) :
            $count++;
            if ($count == 1) {
          ?>
              <div class="accordion-item">
                <div class="accordion-header active">
                  <div class="count">0<?= $count; ?></div>
                  <?php echo $item['title']; ?>
                </div>
                <div class="accordion-content" style="display: block;">
                  <?php echo $item['text']; ?>
                </div>
              </div>
            <?php
            } else {
            ?>
              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="count">0<?= $count; ?></div>
                  <?php echo $item['title']; ?>
                </div>
                <div class="accordion-content">
                  <?php echo $item['text']; ?>
                </div>
              </div>
            <?php
            }
            ?>

          <?php endforeach; ?>

        </div>
        <a href="#" class="button button--brand-700 h-74 w-100 pr-16 pl-42 pl-xl-24 fz-15 d-flex d-lg-none justify-between mt-4"
          data-fancybox data-src="#modalOrder">
          <span class="d-block mx-auto">Задать свой вопрос</span>
          <div class="icon">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
            </svg>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>