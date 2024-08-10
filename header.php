<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">Global standard</h1>
      <nav class="header__nav" aria-label="ヘッダーナビゲーション">
        <?php wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'global',
            'container' => '',
            'menu_class' => 'header__list'
          )
        ); ?>
        <div class="header__nav-button">
          <div class="nav-button">
            <a href="#" class="button button--sm button--secondary">資料ダウンロード</a>
          </div>
          <div class="nav-button">
            <a href="#" class="button button--sm button--primary">お問い合わせ</a>
          </div>
        </div>
      </nav>

      <!-- menu icon -->
      <button type="button" id="js-drawer-icon" class="drawer-icon" aria-label="メニューを開閉する">
        <span class="drawer-icon__bar"></span>
        <span class="drawer-icon__bar"></span>
        <span class="drawer-icon__bar"></span>
      </button>
    </div>
  </header>

  <!-- drawer -->
  <div id="js-drawer-panel" class="drawer__panel">
    <nav class="drawer__nav" aria-label="ドロワーナビゲーション">
      <?php wp_nav_menu(
        array(
          'depth' => 1,
          'theme_location' => 'drawer',
          'container' => '',
          'menu_class' => 'drawer__nav-list'
        )
      ); ?>
      <div class="drawer__nav-button">
        <div class="nav-button">
          <a href="#" class="button button--lg button--primary">資料ダウンロード</a>
        </div>
        <div class="nav-button">
          <a href="#" class="button button--lg button--secondary">お問い合わせ</a>
        </div>
      </div>
    </nav>
  </div>

  <?php if (is_front_page()) : ?>
    <!-- fv -->
    <div class="fv">
      <div class="fv__inner">
        <div class="swiper fv__swiper">
          <div class="swiper-wrapper fv__swiper-wrapper">
            <div class="swiper-slide fv__swiper-slide">
              <picture>
                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img1-pc.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img1-sp.png" alt="" />
              </picture>
            </div>
            <div class="swiper-slide fv__swiper-slide">
              <picture>
                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img2-pc.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img2-sp.png" alt="" />
              </picture>
            </div>
            <div class="swiper-slide fv__swiper-slide">
              <picture>
                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img3-pc.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img3-sp.png" alt="" />
              </picture>
            </div>
          </div>
        </div>
        <div class="fv__text">
          <p class="fv__title">
            <span>you can</span>
            <span>change</span>
            <span>the world</span>
          </p>
          <p class="fv__desc">世界で活躍できるグローバルな人材を育てる</p>
        </div>
      </div>
    </div>
  <?php else : ?>
    <div class="lower-fv <?php echo get_main_image_class(); ?>">
      <div class="lower-fv__inner">
        <h2 class="lower-fv__title">
          <span class="lower-fv__en"><?php echo get_main_title()['en_title']; ?></span>
          <span class="lower-fv__ja"><?php echo get_main_title()['ja_title']; ?></span>
        </h2>
      </div>
    </div>
    <?php if (function_exists('bcn_display')) : ?>
      <div class="bread-crumb inner">
        <?php bcn_display(); ?>
      </div>
    <?php endif; ?>
    <!-- end fv -->
  <?php endif; ?>