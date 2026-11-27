<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-clinic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Forum&family=Manrope:wght@200..800&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
		rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="wrapper site">

		<!-- Header -->
		<header class="header header-standart" id="header">
			<div class="container">

				<div class="headerW">
					<?php
					get_template_part('template-parts/header/logo');
					?>

					<div class="d-block d-xl-none ml-auto">
						<?php
						get_template_part('template-parts/header/bvi-btn');
						?>
					</div>
					<?php
					get_template_part('template-parts/header/menu-btn');
					get_template_part('template-parts/header/nav');
					?>

					<div class="headerContacts d-none d-xl-flex">
						<div class="d-flex flex-column align-end">
							<a href="/kontakty" class="text--md underline-dotted underline"><?php echo carbon_get_theme_option('filials_num'); ?></a>
							<div class="text-champagne text--md"><?php echo carbon_get_theme_option('crb_work'); ?></div>
						</div>
						<div class="d-flex flex-column">
							<a class="text--md" href="tel:<?php echo carbon_get_theme_option('crb_phone_clean'); ?>"><?php echo carbon_get_theme_option('crb_phone'); ?></a>
							<a class="text-champagne hover-blue text--md" href="#" data-fancybox data-src="#modalOrder">Перезвоните мне</a>
						</div>
						<?php
						get_template_part('template-parts/header/bvi-btn');
						?>
					</div>
				</div>
			</div>

		</header>
		<?php
		get_template_part('template-parts/menu');
		?>