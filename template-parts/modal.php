<!-- modal -->
<!-- order -->
<div class="modal modalOrder" id="modalOrder">

  <div class="modalHead d-flex justify-between gap-4">
    <h2 class="h2">
      <?php echo carbon_get_theme_option('modal_order_title'); ?>
    </h2>
    <button data-fancybox-close class="f-button is-close-btn" title="Close">
      <svg class="headerMenuBtn__border" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="46"></circle>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1">
        <path d="M20 20L4 4m16 0L4 20"></path>
      </svg>
    </button>
  </div>

  <div class="modalContent">
    <div class="grid-12 gap-0">
      <div class="col-lg-6">
        <p class="modalDescr mb-3 fz-lg-14">
          <?php echo carbon_get_theme_option('modal_order_descr'); ?>
        </p>
        <img src="<?php echo carbon_get_theme_option('modal_order_image'); ?>" alt="image" class="modalOrderImage d-none d-lg-block">
      </div>
      <div class="col-lg-6">
        <div class="modalForm">
          <?php echo do_shortcode('[contact-form-7 id="67f70ca" title="Модалка заказать звонок"]'); ?>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- quiz -->
<div class="modal" id="modalQuiz">

  <div class="modalHead">
    <button data-fancybox-close class="f-button is-close-btn" title="Close"><svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24" tabindex="-1">
        <path d="M20 20L4 4m16 0L4 20"></path>
      </svg>
    </button>

    <h2 class="h2 fz-40 fz-lg-28 mb-2 mb-lg-3">
      <span>Рассчитайте стоимость</span> лечения «под ключ»
    </h2>

  </div>

  <div class="modalContent">
    <div class="grid-12">
      <div class="col-lg-6">
        <div class="fz-20 text-uppercase text-action mb-2 mb-lg-5 modalQuiz-subtitle">
          Заявка принята
        </div>
        <img src="@img/admin/quiz/image-1.jpg" alt="image" class="modalQuizImg d-block d-lg-none mb-2">

        <div class="h2 fz-40 text-no-uppercase text-brand-700 mb-2 mb-lg-4">
          Спасибо за ответы!
        </div>
        <div class="fz-20 fz-lg-18 text-secondary lh-140 mb-3 mb-lg-4">
          Ваш предварительный план сохранен. Администратор клини свяжется с вами в ближайшее время.
        </div>
        <a href="#" class="button button--brand-700 pr-16 w-100 f-sm-fit">
          <span class="text-btn d-block ml-auto fz-15">посмотреть услуги</span>
          <div class="icon ml-auto">
            <svg>
              <use xlink:href="img/icons/icons.svg#arrow-link"></use>
            </svg>
          </div>
        </a>
        <div class="modalQuizGift d-flex align-center gap-3">
          <img src="@img/admin/quiz/gift.jpg" alt="image" class="quiz__gift-image">
          <div class="d-flex flex-column">
            <div class="fz-18 text-uppercase font-family-second fz-lg-20 mb-1 mb-lg-0">
              Ваш подарок ждет вас
            </div>
            <div class="text-neutral-600 text--md fz-lg-12">
              Консультация хирурга-имплантолога / Индивидуальный план лечения / КТ
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-none d-lg-block">
        <img src="@img/admin/quiz/image-1.jpg" alt="image" class="modalQuizImg">


      </div>
    </div>
  </div>
</div>

<!-- thanks -->
<div class="modal modalThanks" id="modalThanks">

  <div class="modalHead d-flex justify-between gap-4">
    <button data-fancybox-close class="f-button is-close-btn" title="Close">
      <svg class="headerMenuBtn__border" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="46"></circle>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" tabindex="-1">
        <path d="M20 20L4 4m16 0L4 20"></path>
      </svg>
    </button>
  </div>

  <div class="modalContent">
    <div class="grid-12 gap-4">
      <div class="col-lg-6 d-none d-lg-block">
        <img src="<?php echo carbon_get_theme_option('crb_thanks_image'); ?>" alt="image" class="modalOrderImage d-none d-lg-block">
      </div>
      <div class="col-lg-6">
        <h2 class="h2">
          <?php echo carbon_get_theme_option('crb_thanks_title'); ?>
        </h2>
        <div class="modalDescr text--lg mb-3">
          <?php echo carbon_get_theme_option('crb_thanks_descr'); ?>
        </div>
        <button class="button button--brand-700 h-74 pr-16 pl-42 fz-15 w-100 w-lg-fit" data-fancybox-close>
          <span class="d-block mx-auto">Хорошо</span>
          <div class="icon ml-sm-auto">
            <svg>
              <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
            </svg>
          </div>
        </button>
      </div>
    </div>
  </div>
  
</div>