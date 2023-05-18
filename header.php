<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<title>Garden Industry</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico">
	
	<!-- <link rel="stylesheet" href="css/style.min.css"> -->
	<?php wp_head(); ?>
	
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__logo logo">
					<a href="#">
						<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.svg" alt="logo" width="140" height="60" />
					</a>
				</div>

				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu">
						<span></span>
					</button>
					<nav class="menu__body">
						<ul class="menu__list">
							<li class="menu__item">
								<a href="#" data-goto-header data-goto="#about" class="menu__link">О нас</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link" data-goto-header data-goto="#services">Услуги</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link" data-goto-header data-goto="#work-scheme">Как мы работаем</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link" data-goto-header data-goto="#gallery">Портфолио</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link" data-goto-header data-goto="#contacts">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="header__actions">
					<div class="header__language language" aria-label="language switcher">
						<a href="#" class="language__linck _active" aria-label="language ru">RU</a><a href="#" class="language__linck" aria-label="language md">MD</a>
					</div>

					<a href="tel:<?php  the_field('phone-number') ?>" class="header__tel">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
							<path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
							<path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
						</svg>
						<span><?php  the_field('phone') ?></span>
					</a>
				</div>
			</div>
		</header>