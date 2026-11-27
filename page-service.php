<?php
/*
* Template name: Раздел (шаблон страницы)
*/

get_header('standart');

get_template_part('template-parts/cat/intro');
get_template_part('template-parts/cat/list');
get_template_part('template-parts/service/indications');
get_template_part('template-parts/service/type');
get_template_part('template-parts/service/include');
get_template_part('template-parts/service/calc');
get_template_part('template-parts/service/doctor');
get_template_part('template-parts/result');
get_template_part('template-parts/service/price');
get_template_part('template-parts/service/advice');
get_template_part('template-parts/service/how');
get_template_part('template-parts/service/reviews');
get_template_part('template-parts/rate');
get_template_part('template-parts/faq');
get_template_part('template-parts/consult');
get_template_part('template-parts/contacts');

get_template_part('template-parts/modal');
get_footer();
?>