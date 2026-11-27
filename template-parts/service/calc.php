<section class="serv-calc sect quiz">
  <div class="container">

    <h2 class="h2 mb-3 mb-lg-4">
      <?php echo carbon_get_theme_option('quiz_title'); ?>
    </h2>

    <div class="grid-12 gap-4 gap-xl-1">
      <div class="col-xl-8 col-xxl-9">
        <div class="quiz__body">



          <div class="quiz__step quiz__step--active" data-validate="radio" data-step="1">

            <div class="grid-12 align-center mb-3 mb-xl-5 gap-3 gap-lg-0">
              <div class="col-8 col-lg-9">
                <div class="quizBlockTitle"><?php echo carbon_get_theme_option('quiz_block_1_title'); ?></div>
                <div class="text-secondary">
                  <?php echo carbon_get_theme_option('quiz_block_1_descr'); ?>
                </div>
              </div>
              <div class="col-4 col-lg-3">
                <div class="serv-calc-state d-flex flex-column">
                  <div class="h2 fz-32 text-action text-no-uppercase mb-1">
                    1 из 5
                  </div>
                  <div class="text-secondary text--md">
                    ≈ 2 минуты до результата
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__options">

              <?php
              $items = carbon_get_theme_option('quiz_block_1_repeat'); ?>
              <?php foreach ($items as $item) : ?>
                <label class="quiz__option">
                  <input type="radio" name="teeth_count" value="<?php echo $item['title']; ?>" class="quiz__input visually-hidden">
                  <div class="quiz__option-img">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                    <div class="quiz__checkbox"></div>
                  </div>
                  <span class="quiz__option-text"><?php echo $item['title']; ?></span>
                </label>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="quiz__step" data-validate="radio" data-step="2">

            <div class="grid-12 align-center mb-3 mb-xl-5 gap-0">
              <div class="col-8 col-lg-9">
                <div class="quizBlockTitle"><?php echo carbon_get_theme_option('quiz_block_2_title'); ?></div>
                <div class="text-secondary">
                  <?php echo carbon_get_theme_option('quiz_block_2_descr'); ?>
                </div>
              </div>
              <div class="col-4 col-lg-3">
                <div class="serv-calc-state d-flex flex-column">
                  <div class="h2 fz-32 text-action text-no-uppercase mb-1">
                    2 из 5
                  </div>
                  <div class="text-secondary text--md">
                    &asymp; 1,5 минуты до&nbsp;результата
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__options">

              <?php $items = carbon_get_theme_option('quiz_block_2_repeat'); ?>
              <?php foreach ($items as $item) : ?>
                <label class="quiz__option">
                  <input type="radio" name="how_now" value="<?php echo $item['title']; ?>" class="quiz__input visually-hidden">
                  <div class="quiz__option-img">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                    <div class="quiz__checkbox"></div>
                  </div>
                  <span class="quiz__option-text"><?php echo $item['title']; ?></span>
                </label>
              <?php endforeach; ?>

            </div>
          </div>

          <div class="quiz__step" data-validate="radio" data-step="3">
            <div class="grid-12 align-center mb-3 mb-xl-5 gap-0">
              <div class="col-8 col-lg-9">
                <div class="quizBlockTitle"><?php echo carbon_get_theme_option('quiz_block_3_title'); ?></div>
                <div class="text-secondary">
                  <?php echo carbon_get_theme_option('quiz_block_3_descr'); ?>
                </div>
              </div>
              <div class="col-4 col-lg-3">
                <div class="serv-calc-state d-flex flex-column">
                  <div class="h2 fz-32 text-action text-no-uppercase mb-1">
                    3 из 5
                  </div>
                  <div class="text-secondary text--md">
                    ≈ 1 минута до результата
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__options">

              <?php $items = carbon_get_theme_option('quiz_block_3_repeat'); ?>
              <?php foreach ($items as $item) : ?>
                <label class="quiz__option">
                  <input type="radio" name="method_lech" value="<?php echo $item['title']; ?>" class="quiz__input visually-hidden">
                  <div class="quiz__option-img">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                    <div class="quiz__checkbox"></div>
                  </div>
                  <span class="quiz__option-text"><?php echo $item['title']; ?></span>
                </label>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="quiz__step" data-validate="radio" data-step="4">
            <div class="grid-12 align-center mb-3 mb-xl-5 gap-0">
              <div class="col-8 col-lg-9">
                <div class="quizBlockTitle"><?php echo carbon_get_theme_option('quiz_block_4_title'); ?></div>
                <div class="text-secondary">
                  <?php echo carbon_get_theme_option('quiz_block_4_descr'); ?>
                </div>
              </div>
              <div class="col-4 col-lg-3">
                <div class="serv-calc-state d-flex flex-column">
                  <div class="h2 fz-32 text-action text-no-uppercase mb-1">
                    4 из 5
                  </div>
                  <div class="text-secondary text--md">
                    ≈ 30 секунд до результата
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz__options">

              <?php $items = carbon_get_theme_option('quiz_block_4_repeat'); ?>
              <?php foreach ($items as $item) : ?>
                <label class="quiz__option">
                  <input type="radio" name="termin" value="<?php echo $item['title']; ?>" class="quiz__input visually-hidden">
                  <div class="quiz__option-img">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                    <div class="quiz__checkbox"></div>
                  </div>
                  <span class="quiz__option-text"><?php echo $item['title']; ?></span>
                </label>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="quiz__step" data-validate="radio" data-step="5">
            <div class="grid-12 align-center mb-3 mb-xl-5 gap-0">
              <div class="col-8 col-lg-9">
                <div class="quizBlockTitle"><?php echo carbon_get_theme_option('quiz_block_5_title'); ?></div>
                <div class="text-secondary">
                  <?php echo carbon_get_theme_option('quiz_block_5_descr'); ?>
                </div>
              </div>
              <div class="col-4 col-lg-3">
                <div class="serv-calc-state d-flex flex-column">
                  <div class="h2 fz-32 text-action text-no-uppercase mb-1">
                    5 из 5
                  </div>
                  <div class="text-secondary text--md">
                    последний вопрос
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__options">

              <?php $items = carbon_get_theme_option('quiz_block_5_repeat'); ?>
              <?php foreach ($items as $item) : ?>
                <label class="quiz__option">
                  <input type="radio" name="choise" value="<?php echo $item['title']; ?>" class="quiz__input visually-hidden">
                  <div class="quiz__option-img">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                    <div class="quiz__checkbox"></div>
                  </div>
                  <span class="quiz__option-text"><?php echo $item['title']; ?></span>
                </label>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="quiz__step" data-validate="none" data-step="6">
            <div class="mb-3 mb-lg-5">
              <div class="quizBlockTitle"><?php echo carbon_get_theme_option('quiz_form_title'); ?></div>
            </div>
            <div class="grid-12 gap-0">
              <div class="col-lg-6">
                <img src="<?php echo carbon_get_theme_option('quiz_form_image'); ?>" alt="image" class="quizFormImg">
              </div>
              <div class="col-lg-6">

                <div class="quizForm">
                  <div class="fz-20 fz-lg-16 text-secondary mb-3">
                    <?php echo carbon_get_theme_option('quiz_form_descr'); ?>
                  </div>
                  <?php
                  echo do_shortcode('[contact-form-7 id="b2eedc0" title="Квиз"]');
                  ?>
                </div>

              </div>
            </div>

          </div>

        </div>
        <!-- ПАНЕЛЬ НАВИГАЦИИ (01, 02, 03...) -->
        <ul class="quiz__navigation">
          <li class="quiz__nav-item quiz__nav-item--active" data-nav="1">
            <span class="quiz__nav-num">01</span>
            <span class="quiz__nav-text">Ситуация</span>
          </li>
          <li class="quiz__nav-item" data-nav="2">
            <span class="quiz__nav-num">02</span>
            <span class="quiz__nav-text">Объем</span>
          </li>
          <li class="quiz__nav-item" data-nav="3">
            <span class="quiz__nav-num">03</span>
            <span class="quiz__nav-text">Метод</span>
          </li>
          <li class="quiz__nav-item" data-nav="4">
            <span class="quiz__nav-num">04</span>
            <span class="quiz__nav-text">Сроки</span>
          </li>
          <li class="quiz__nav-item" data-nav="5">
            <span class="quiz__nav-num">05</span>
            <span class="quiz__nav-text">Расчет</span>
          </li>
        </ul>
        <!-- Футер с подарком и кнопками -->
        <div class="quiz__footer">
          <div class="quiz__gift d-flex gap-4">
            <img src="<?php echo carbon_get_theme_option('quiz_block_footer_icon'); ?>" alt="image" class="quiz__gift-image">
            <div class="d-flex flex-column gap-3px">
              <div class="fz-24 fz-lg-20 lh-150 text-uppercase">
                <?php echo carbon_get_theme_option('quiz_block_footer_title'); ?>
              </div>
              <div class="text-neutral-600 fz-lg-12" style="max-width: 345px;">
                <?php echo carbon_get_theme_option('quiz_block_footer_descr'); ?>
              </div>
            </div>
          </div>
          <div class="quiz__buttons">
            <button type="button" class="button button--border-strong quiz__btn quiz__btn--prev pl-16 h-66" disabled>
              <div class="icon" style="transform: rotate(180deg);">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                </svg>
              </div>
              НАЗАД
            </button>
            <button type="button" class="button button--brand-700 quiz__btn quiz__btn--next h-66 pr-16" disabled>
              <span class="text-btn">дальше</span>
              <div class="icon">
                <svg>
                  <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                </svg>
              </div>
            </button>
          </div>
        </div>
      </div>
      <?php
      $serv_ind_card_bg_title = carbon_get_the_post_meta('serv_ind_card_bg_title');
      $serv_ind_card_bg_descr = carbon_get_the_post_meta('serv_ind_card_bg_descr');
      $serv_ind_card_bg_fio = carbon_get_the_post_meta('serv_ind_card_bg_fio');
      $serv_ind_card_bg_image = carbon_get_the_post_meta('serv_ind_card_bg_image');
      $serv_ind_card_bg_spec = carbon_get_the_post_meta('serv_ind_card_bg_spec');
      ?>
      <div class="col-xl-4 col-xxl-3">
        <div class="serv-calc-contact">
          <div class="text--sm text-uppercase text-brand-300 mb-2 fz-xxl-14 d-none d-sm-block">
            После расчета
          </div>
          <h3 class="h3 fz-24 text-white lh-125 mb-1 mb-sm-2">
            <?= $serv_ind_card_bg_title; ?>
          </h3>
          <div class="text-brand-300 mb-2 fz-xxl-14">
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
            <a href="#" class="button button--surface-bg h-74 pr-16 pl-24 fz-16 w-100" data-fancybox
              data-src="#modalOrder">
              <span class="text-start flex-1">Записаться<br> на консультацию</span>
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
</section>