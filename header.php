<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" />
	
    <script src="<?php bloginfo('template_url') ?>/js/jquery-1.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/jquery00.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/init0000.js"></script> 
<title><?php bloginfo('name'); wp_title(); ?></title>
<?php wp_head(); ?> 
</head>

<body>
<div class="main">
	<div class="head">
		<h2>Выбери своё <br />Путешествие</h2>
		<a href="<?php home_url(); ?>"><span>C</span>hoose <span>T</span>ravel</a>
	</div>


	<div class="content-main">
	<ul class="menu">
		<li><a href="#">Главная</a></li>
		<li><a href="#">Автор</a></li>
		<li><a href="#">Контакты</a></li>
		<form class="search-main" action="" method="">
			<input class="serch-txt" type="text" name="search" />
			<input class="serch-btn" type="image" src="<?php bloginfo('template_url') ?>/images/serach-btn.jpg" />
		</form>
	</ul>	
	
	<div id="slider">
		<ul id="cycle">
			<li><img src="<?php bloginfo('template_url') ?>/images/galery.jpg" height="266" width="927" alt="Slides" /></li>
			<li><img src="<?php bloginfo('template_url') ?>/images/kolizey.jpg" height="266" width="927" alt="Slides" /></li>
			<li><img src="<?php bloginfo('template_url') ?>/images/piramide.jpg" height="266" width="927" alt="Slides" /></li>
			<li><img src="<?php bloginfo('template_url') ?>/images/galery.jpg" height="266" width="927" alt="Slides" /></li>
			<li><img src="<?php bloginfo('template_url') ?>/images/kolizey.jpg" height="266" width="927" alt="Slides" /></li>
			<li><img src="<?php bloginfo('template_url') ?>/images/piramide.jpg" height="266" width="927" alt="Slides" /></li>
		</ul>
		<div id="cyclePager"></div>
	</div>   