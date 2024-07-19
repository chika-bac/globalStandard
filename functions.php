<?php

/** ------------------------------------------
 * WP標準機能の拡張
 * ----------------------------------------**/
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'my_setup');

/** ------------------------------------------
 * CSS/JS読み込み
 * ----------------------------------------**/
function my_script_init()
{
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('/assets/css/style.css')), 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime(get_theme_file_path('/assets/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/** ------------------------------------------
 * メニューの登録
 * ----------------------------------------**/
function my_menu_init()
{
  register_nav_menus(array(
    'global' => 'ヘッダーメニュー',
    'drawer' => 'ドロワーメニュー',
    'footer' => 'フッターメニュー',
  ));
}

add_action('init', 'my_menu_init');
