<?php
/*
* Template name: Врач(шаблон страницы)
*/
?>

<?php get_header();
?>
<div class="breadcrumbs">
  <div class="container">
    <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
  </div>
</div>
<?php
get_template_part('template-parts/doctor/intro');
get_template_part('template-parts/doctor/info');
get_template_part('template-parts/reviews');
get_template_part('template-parts/doctor/order');
get_template_part('template-parts/doctor/doctors');
get_template_part('template-parts/contacts');
get_template_part('template-parts/consult-2');

get_footer();
?>