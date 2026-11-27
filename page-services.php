<?php
/*
* Template name: Архив услуг (шаблон страницы)
*/
?>

<?php 
get_header('standart');

get_template_part('template-parts/breadcrumbs');
get_template_part('template-parts/services/content');
get_template_part('template-parts/consult');
get_template_part('template-parts/contacts');

get_template_part('template-parts/modal');
get_footer();
?>