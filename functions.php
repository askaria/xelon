<?php
/*
	Функции темы
*/

/*************************************************************
	ОСНОВНОЕ
 *************************************************************/
if (!function_exists('xelon_setup')) {
    function xelon_setup()
    {
        add_theme_support('html5', ['script', 'style']);
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('automatic-feed-links');

        register_nav_menus(array(
            'primary' => 'Главное меню',
        ));
    }
    add_action('after_setup_theme', 'xelon_setup');
}


/*************************************************************
	ПОДКЛЮЧЕНИЕ СКРИПТОВ И СТИЛЕЙ
 *************************************************************/

add_action('wp_enqueue_scripts', 'xelon_enqueue_scripts');
function xelon_enqueue_scripts()
{
    wp_register_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'xelon_enqueue_styles');
function xelon_enqueue_styles()
{
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/style.css');
}
