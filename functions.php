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
  // font-awesome CDN読み込み
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css', array(), '5.8.2', 'all');
  // Swiper CDN読み込み
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', false);
  // 自作CSS/JS読み込み
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

/** ------------------------------------------
 * 新着記事にNEWマークを付ける
 * ----------------------------------------**/
function attach_new_label()
{
  $day = 7; // NEWを表示する日数
  $today = date_i18n('U'); // 今日の日付を取得
  $entry = get_the_time('U'); // 投稿日の取得
  $term = date('U', ($today - $entry)) / 86400; // 何日前か計算
  if ($day > $term) {
    return  '<span class="new-label">NEW</span>';
  } else {
    return;
  }
}

/** ------------------------------------------
 * カテゴリの取得と表示
 * ----------------------------------------**/
function get_post_category($anchor = true)
{
  $category = get_the_category();
  if ($category[0]) {
    // aタグを付ける場合
    if ($anchor) {
      return '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
    } else {
      // aタグを付けない場合
      return $category[0]->cat_name;
    }
  }
}

/** ------------------------------------------
 * タイトルの文字数を制限
 * ----------------------------------------**/
function title_trim($title, $length)
{
  if (mb_strlen($title) > $length) {
    $title = mb_substr($title, 0, $length, 'UTF-8');
    $title .= '…';
  }
  return $title;
}

/** ------------------------------------------
 * サイドバーに表示する記事を取得
 * ----------------------------------------**/
function get_sidebar_post($post_type, $posts_per_page, $orderby, $order)
{
  $args = array(
    'posts_per_page' => $posts_per_page,
    'post_type' => $post_type,
    'orderby' => $orderby,
    'order' => $order
  );
  $new_posts = new WP_Query($args);
  return $new_posts;
}

/** ------------------------------------------
 * コンテンツを取得（導入事例）
 * ----------------------------------------**/
function get_specific_contents($post_type, $posts_per_page = -1, $taxonomy = null, $term = null)
{
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => $posts_per_page,
    'tax_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $term
      )
    )
  );

  return new WP_Query($args);
}

/** ------------------------------------------
 * 下層ページのメインタイトル出し分け
 * ----------------------------------------**/
function get_main_title()
{
  if (is_home() || is_single()) {
    // 投稿一覧ページ・投稿詳細ページ
    return array('en_title' => 'NEWS', 'ja_title' => 'ニュース');
  } elseif (is_page('case')) {
    // 導入事例ページ
    return array('en_title' => 'CASE STUDY', 'ja_title' => '導入事例');
  } elseif (is_page('about')) {
    // 当社についてページ
    return array('en_title' => 'ABOUT US', 'ja_title' => '当社について');
  } elseif (is_page('service')) {
    // サービスページ
    return array('en_title' => 'SERVICE', 'ja_title' => 'サービス');
  } elseif (is_page('contact') || is_page('contact/thanks')) {
    // お問い合わせページ
    return array('en_title' => 'CONTACT', 'ja_title' => 'お問い合わせ');
  } elseif (is_page('download') || is_page('download/thanks')) {
    // ダウンロードページ
    return array('en_title' => 'DOWNLOAD', 'ja_title' => '資料ダウンロード');
  }
}

/** ------------------------------------------
 * 下層ページのメイン画像用クラス出し分け
 * ----------------------------------------**/
function get_main_image_class()
{
  if (is_home() || is_single()) {
    // 投稿一覧ページ・投稿詳細ページ
    return 'lower-fv--news';
  } elseif (is_page('case')) {
    // 導入事例ページ
    return 'lower-fv--case';
  } elseif (is_page('about')) {
    // 当社についてページ
    return 'lower-fv--about';
  } elseif (is_page('service')) {
    // サービスページ
    return 'lower-fv--service';
  } elseif (is_page('contact') || is_page('contact/thanks')) {
    // お問い合わせ（完了）ページ
    return 'lower-fv--contact';
  } elseif (is_page('download') || is_page('download/thanks')) {
    // ダウンロード（完了）ページ
    return 'lower-fv--download';
  }
}

/** ------------------------------------------
 * 画像サイズを指定
 * ----------------------------------------**/
add_image_size('member', 480, 640, false);
add_image_size('program', 1120, 1792, false);
