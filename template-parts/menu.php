<div class="headerMenu">
  <div class="container">
    <div class="d-flex flex-column h-100 flex-1">
      <div class="headerMenuGrid">
        <nav class="headerMenuNav">
          <div class="headerMenuNavTitle">
            <span class="text-nowrap">Основное</span>
          </div>
          <?php my_clinic_header_menu_nav_main(); ?>
        </nav>
        <div class="headerMenuContent">
          <div class="headerMenuNavTitle headerMenuNavTitle--tabs">
            <span class="text-nowrap">Направления стоматологии</span>
          </div>
          <div class="headerMenuTabs wp-tabs">

            <div class="headerMenuTabsNav wp-tabs__nav">

              <?php
              // параметры по умолчанию
              $my_posts = get_posts(array(
                'numberposts' => -1,
                'post_parent' => 97,
                // 'orderby'     => 'date',
                // 'order'       => 'DESC',             
                'post_type'   => 'page',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ));
              $count_parent = 0;
              global $post;
              foreach ($my_posts as $post) {
                $count_parent++;
                setup_postdata($post);
                if ($count_parent == 1) {
                  $parent_active = 'active';
                } else {
                  $parent_active = '';
                }
              ?>
                <button class="wp-tabs__btn <?= $parent_active; ?>" data-index="<?= $count_parent; ?>">
                  <div><?php echo $post->post_title; ?></div>
                  <a class="arrow-btn" href="<?php echo $post->guid; ?>">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
                    </svg>
                  </a>
                  <div class="headerMenuTabsLinks">
                    <?php
                    // параметры по умолчанию
                    $my_inner_posts = get_posts(array(
                      'numberposts' => -1,
                      'post_type'   => 'page',
                      // 'orderby'     => 'date',
                      // 'order'       => 'DESC',   
                      'post_parent' => $post->ID,
                      'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ));

                    if (!empty($my_inner_posts)) {
                    ?>
                      <ul>
                        <?php
                        global $inner_post;
                        foreach ($my_inner_posts as $inner_post) {
                          setup_postdata($inner_post);
                        ?>
                          <li>
                            <a href="<?php echo $inner_post->guid; ?>"><?php echo $inner_post->post_title; ?></a>
                          </li>
                        <?php
                        }
                        ?>
                      </ul>
                    <?php
                    }
                    ?>
                  </div>
                </button>
              <?php
              }
              wp_reset_postdata(); // сброс
              ?>

            </div>

            <div class="headerMenuTabsBody">

              <?php
              // параметры по умолчанию
              $my_posts = get_posts(array(
                'numberposts' => -1,
                'post_parent' => 97,
                // 'orderby'     => 'date',
                // 'order'       => 'DESC',             
                'post_type'   => 'page',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ));
              $count_parent = 0;
              global $post;
              foreach ($my_posts as $post) {
                $count_parent++;
                setup_postdata($post);
                if ($count_parent == 1) {
                  $parent_active = 'active';
                } else {
                  $parent_active = '';
                }
              ?>
                <div class="wp-tabs__panel <?= $parent_active; ?>" data-index="<?= $count_parent; ?>">
                  <div class="headerMenuTabsLinks">
                    <?php
                    // параметры по умолчанию
                    $my_inner_posts = get_posts(array(
                      'numberposts' => -1,
                      'post_type'   => 'page',
                      // 'orderby'     => 'date',
                      // 'order'       => 'DESC',   
                      'post_parent' => $post->ID,
                      'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ));

                    if (!empty($my_inner_posts)) {
                    ?>
                      <ul>
                        <?php
                        global $inner_post;
                        foreach ($my_inner_posts as $inner_post) {
                          setup_postdata($inner_post);
                        ?>
                          <li>
                            <a href="<?php echo $inner_post->guid; ?>"><?php echo $inner_post->post_title; ?></a>
                          </li>
                        <?php
                        }
                        ?>
                      </ul>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              <?php
              }
              wp_reset_postdata(); // сброс
              ?>

            </div>

          </div>
        </div>
        <img src="<?php echo carbon_get_theme_option('header_menu_image'); ?>" alt="image" class="headerMenuImage">
      </div>
      <div class="headerMenuFooter">
        <div class="d-flex gap-4 gap-lg-3 align-start align-lg-center justify-between flex-column-reverse flex-lg-row">
          <div class="d-flex gap-1 align-star align-sm-center flex-column flex-sm-row">
            <img class="headerMenuLogo" src="<?php echo carbon_get_theme_option('header_menu_logo'); ?>" alt="logo">
            <span class="headerMenuLogoText text-brand-600"><?php echo carbon_get_theme_option('header_menu_logo_descr'); ?></span>
          </div>
          <button class="main-btn button button--brand-700 border-hover-bottom pl-16 w-100 w-sm-fit h-lg-67"
            data-fancybox data-src="#modalOrder">
            <div class="icon">
              <svg style="fill: var(--brand-200);">
                <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#star' ?>"></use>
              </svg>
            </div>
            <span class="d-block mx-auto">записаться на консультацию</span>
          </button>
        </div>

      </div>
    </div>

  </div>
</div>