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
        <ul class="header__list">
          <li class="header__item"><a href="" class="header__nav-link">トップ</a></li>
          <li class="header__item"><a href="" class="header__nav-link">当社について</a></li>
          <li class="header__item"><a href="" class="header__nav-link">サービス</a></li>
          <li class="header__item"><a href="" class="header__nav-link">導入事例</a></li>
          <li class="header__item"><a href="" class="header__nav-link">お知らせ</a></li>
        </ul>
        <div class="header__nav-button">
          <a href="#" class="button">資料ダウンロード</a>
        </div>
        <div class="header__nav-button">
          <a href="#" class="button">お問い合わせ</a>
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
      <ul class="drawer__nav-list">
        <li class="drawer__nav-item"><a href="" class="drawer__link">トップ</a></li>
        <li class="drawer__nav-item"><a href="" class="drawer__link">当社について</a></li>
        <li class="drawer__nav-item"><a href="" class="drawer__link">サービス</a></li>
        <li class="drawer__nav-item"><a href="" class="drawer__link">導入事例</a></li>
        <li class="drawer__nav-item"><a href="" class="drawer__link">お知らせ</a></li>
        <li class="drawer__nav-item"><a href="#" class="drawer__button button">資料ダウンロード</a></li>
        <li class="drawer__nav-item"><a href="#" class="drawer__button button">お問い合わせ</a></li>
      </ul>
    </nav>
  </div>