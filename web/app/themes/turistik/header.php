<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Главная страница</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/libs.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css">
</head>
<div class="wrapper">
<body>
	<header class="main-header">
		<div class="top-header">
			<div class="top-header__wrap">
				<div class="logotype-block">
					<div class="logo-wrap"><a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
				</div>
				<nav class="main-navigation">
					<ul class="nav-list">
						<li class="nav-list__nav-item"><a href="http://tourist.wp/" class="nav-list__nav-item__nav-link">Главная</a></li>
						<li class="nav-list__nav-item"><a href="http://tourist.wp/poleznaya-informatsiya/" class="nav-list__nav-item__nav-link">Полезная информация</a></li>
						<li class="nav-list__nav-item"><a href="http://tourist.wp/aktualnyie-aktsii/" class="nav-list__nav-item__nav-link">Последние акции</a></li>
						<li class="nav-list__nav-item"><a href="http://tourist.wp/privacy-policy/" class="nav-list__nav-item__nav-link">О сервисе</a></li>
						<li class="nav-list__nav-item"><a href="http://tourist.wp/news/" class="nav-list__nav-item__nav-link">Новости</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="bottom-header">
			<div class="search-form-wrap">
				<form class="search-form">
					<input type="text" placeholder="Поиск..." class="search-form__input">
					<button class="search-form__btn-search"><i class="icon icon-search"></i></button>
				</form>
			</div>
		</div>
	</header>

