<?php
/**
* Загружаемые стили и шрифты 
**/
function load_style_script() {
wp_enqueue_script('jquery-1', get_template_directory_uri() . '/js/jquery-1.js');
wp_enqueue_script('jquery00', get_template_directory_uri() . '/js/jquery00.js');
wp_enqueue_script('init0000', get_template_directory_uri() . '/js/init0000.js');
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

/**
* Загружаем стили и шрифты 
**/
add_action('wp_enqueue_scripts','load_style_script');

/**
* Поддержка миниатюр
**/
add_theme_support('post-thumbnails');

/**
* Поддержка меню
**/
register_nav_menu( 'menu', 'меню' );

/**
* Поддержка виджетов
**/
register_sidebar(array(
'name' => 'Виджеты сайдбара',
'id' => 'sidebar',
'description' => 'Виджеты сайдбара здесь',
'before_widget' => '<div class="vidget">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
	));

/**
* Футер
**/
register_sidebar(array(
'name' => 'Виджеты футера',
'id' => 'footer',
'description' => 'Виджеты футера здесь',
'before_widget' => '<div class="menu-foot">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
	));


?>