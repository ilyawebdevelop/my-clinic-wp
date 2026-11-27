<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-clinic
 */

?>

<!-- Footer -->
<footer class="footer" id="footer">
	<div class="container">
		<div class="footerT">
			<div class="grid-12">
				<div class="col-lg-6 col-xl-8 col-xxl-9 mb-1 mb-lg-0">
					<h2 class="h2 h2--lg title--white">
						<?php echo carbon_get_theme_option('footer_title'); ?>
					</h2>
				</div>
				<div class="col-xl-4 col-xxl-3">
					<a href="#" class="button button--brand-900 h-74 pr-16 pl-42 fz-16 mb-1 mb-lg-3 w-100 w-sm-fit h-lg-60"
						data-fancybox data-src="#modalOrder">
						<span class="d-block ml-auto"> Нужна консультация</span>
						<div class="icon ml-sm-auto">
							<svg>
								<use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#arrow-link' ?>"></use>
							</svg>
						</div>
					</a>
					<span class="fz-13 text-white d-block text-center text-sm-left"><?php echo carbon_get_theme_option('footer_after_btn_descr'); ?></span>
				</div>
			</div>
		</div>
		<div class="footerC">
			<div class="col footerLogoW">
				<a href="/" class="footerLogo">
					<img src="<?php echo carbon_get_theme_option('crb_logo_white'); ?>" alt="logo">
				</a>
				<div class="text--md text-white">
					<?php echo carbon_get_theme_option('footer_descr'); ?>
				</div>
			</div>
			<div class="col">
				<nav class="footerNav">
					<div class="footerNavTitle action-name text-brand-300">Услуги</div>
					<?php my_clinic_footer_1_menu(); ?>
				</nav>
			</div>
			<div class="col">
				<nav class="footerNav">
					<div class="footerNavTitle action-name text-brand-300">О клинике</div>
					<?php my_clinic_footer_2_menu(); ?>
				</nav>
			</div>
			<div class="col">
				<div class="footerContacts">
					<div class="footerNavTitle action-name text-brand-300 d-flex d-lg-none">Контакты</div>
					<div class="action-content">
						<div class="footerContactsName text-brand-300">
							Приезжайте к нам
						</div>
						<span class="text-white mb-3 d-block footerContactsText"><?php echo carbon_get_theme_option('crb_address_br'); ?></span>
						<div class="footerContactsName text-brand-300">
							Как мы работаем
						</div>
						<span class="text-white mb-3 d-block footerContactsText"><?php echo carbon_get_theme_option('crb_work'); ?></span>
						<div class="footerContactsName text-brand-300">
							Позвоните нам
						</div>
						<a href="tel:<?php echo carbon_get_theme_option('crb_phone_clean'); ?>" class="text-white d-block"><?php echo carbon_get_theme_option('crb_phone'); ?></a>
						<a href="tel:<?php echo carbon_get_theme_option('crb_phone_2_clean'); ?>" class="text-white d-block"><?php echo carbon_get_theme_option('crb_phone_2'); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="footerB">
			<div class="col">
				<div class="text--sm text-white">
					<?php echo carbon_get_theme_option('footer_copyright'); ?>
				</div>
			</div>
			<div class="col">
				<a href="/privacy-policy" class="text--sm text-white">Политика конфиденциальности</a>
			</div>
			<div class="col">
				<a href="#" class="text--sm text-white">Версия для слабовидящих</a>
			</div>
			<div class="col">
				<a href="<?php echo carbon_get_theme_option('footer_develop'); ?>" class="develop text-white d-flex align-center gap-3 text--sm">
					<span>Разработка и продвижение</span>
					<img src="<?= get_template_directory_uri() . '/assets/img/logo/develop.svg' ?>" alt="logo">
				</a>
			</div>
			<img class="footerBLogo" src="<?= get_template_directory_uri() . '/assets/img/footer/bg.svg' ?>" alt="logo">
		</div>
	</div>
</footer>

<button class="fix-order-btn">
	<div class="icon">
		<svg>
			<use xlink:href="<?= get_template_directory_uri() . '/assets/img/icons/icons.svg#calendar' ?>"></use>
		</svg>
	</div>
	<span>записаться на прием</span>
	<div class="border-line"></div>
	<div class="fix-order-btn-bg"></div>
</button>

<div class="footerMobileNav">
	<ul>
		<li>
			<a href="/">
				<img src="<?= get_template_directory_uri() . '/assets/img/icons/main-icon.svg' ?>" alt="icon" style="width: 28px;">
				<span>Главная</span>
			</a>
		</li>
		<li>
			<a href="/uslugi">
				<img src="<?= get_template_directory_uri() . '/assets/img/icons/services-icon.svg' ?>" alt="icon" style="width: 21px;">
				<span>Услуги</span>
			</a>
		</li>
		<li>
			<button class="footerMobileNavOrderBtn" type="button">
				<img src="<?= get_template_directory_uri() . '/assets/img/icons/calendar.svg' ?>" alt="icon" style="width: 58px; min-width: 58px;">
				<span>Запись</span>
			</button>
		</li>
		<li>
			<a href="/vrachi">
				<img src="<?= get_template_directory_uri() . '/assets/img/icons/doctors-icon.svg' ?>" alt="icon" style="width: 21px;">
				<span>Врачи</span>
			</a>
		</li>
		<li>
			<a href="/kontakty">
				<img src="<?= get_template_directory_uri() . '/assets/img/icons/contacts-icon.svg' ?>" alt="icon" style="width: 22px;">
				<span>Контакты</span>
			</a>
		</li>
	</ul>
</div>

</div><!-- /wrapper -->

<script src="https://api-maps.yandex.ru/2.1/?apikey=d9a25d85-7d2c-4cef-9199-b938afb5e90b&lang=ru_RU&_v=20250128200343"
	type="text/javascript"></script>

<?php wp_footer(); ?>

</body>

</html>