<?php
$main_intro_video_link = carbon_get_the_post_meta('main_intro_video_link');
$main_intro_video_text = carbon_get_the_post_meta('main_intro_video_text');
?>
<div class="spin-button-wrapper">
  <!-- Внутренний металлический круг с кастомной стрелкой Play -->
  <a data-fancybox href="<?= $main_intro_video_link; ?>" class="play-btn w-105">
    <!-- Иконка кастомной стрелочки, похожей на вашу птичку/Play -->
    <svg style="fill: #29415f;">
      <use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#play' ?>"></use>
    </svg>
  </a>

  <!-- Крутящийся текст вокруг -->
  <svg class="button-spin-text" viewBox="0 0 200 200" width="200" height="200">
    <defs>
      <!-- Идеальный круг радиусом 72px, ориентированный для правильного чтения текста -->
      <path id="circlePath" d="M 100, 100 m -72, 0 a 72,72 0 1,1 144,0 a 72,72 0 1,1 -144,0" />
    </defs>
    <text>
      <!-- Метод startOffset центрирует текст на круге -->
      <textPath href="#circlePath" startOffset="0%">
        <?= $main_intro_video_text; ?>
      </textPath>
    </text>
  </svg>
</div>