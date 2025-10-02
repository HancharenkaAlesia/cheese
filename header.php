<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php the_title(); ?></title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header page-<?php the_ID(); ?>">
			<div class="header__container">
				<div class="header__flex">
					<a href="<?php echo get_home_url(); ?>" class="header__logo">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/logo.webp" alt="Сыроварня Юлии Поляковой" title="Сыроварня Юлии Поляковой">
					</a>
					<div data-da=".header__flex, 915" class="header__menu menu">
						<button type="button" class="menu__icon icon-menu"><span></span></button>
							<nav class="menu__body">
								<ul class="menu__list">
									  <?php 
											$menuParameters = array(
												'menu'            => 'menu_header',
												'container'       => false,
												'menu_class'      => 'menu__list',
												'echo'            => false,
												'fallback_cb'     => 'wp_page_menu',
												'items_wrap'      => '%3$s',
												);

												echo strip_tags(wp_nav_menu( $menuParameters ), '<nav><a><li>' );
										?>
								</ul>
							</nav> 
					</div>
					<div data-da=".header__menu, 915, 0" class="header__wrap">
						<div class="header__socials">
							<div class="header__descr">Свяжитесь с нами<br>в мессенджерах</div>
							<a target="_blank" href="<?php the_field('whatsapp', 9) ?>" class="header__soc _green">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/whatsapp.svg" alt="Whatsapp иконка">
							</a>
							<a target="_blank" href="<?php the_field('telegram', 9) ?>" class="header__soc _blue">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/telegram.svg" alt="Telegram иконка">
							</a>
						</div>
						<a data-da=".menu__body, 915" data-popup="#popup-form" href="#" class="header__call">Заказать звонок</a>
						<div data-da=".menu__body, 915" class="header__wrapper">
							<div class="header__shedule"><?php the_field('shedule', 9) ?></div>
							<a href="tel:<?php the_field('phone', 9) ?>" class="header__phone"><?php the_field('phone', 9) ?></a>
						</div>
					</div>

				</div>
			</div>
		</header>