<!Doctype html>
<html lang=en>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo("name"); ?></title>
</head>
<body>
<h1><?php bloginfo('name');?></h1>
<?php bloginfo('description')?> <br/>
<a href="<?php echo home_url; ?>">Главная страница</a>
<BR>
	<?php bloginfo('template_url');?>
</body>
</html>