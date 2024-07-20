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