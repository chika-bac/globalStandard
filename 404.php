<?php get_header(); ?>
<div class="container">
  <div class="container__inner inner inner-sidebar">
    <main class="main">
      <div class="notfound__text">
        <p>お探しのページは見つかりません。<br>お探しのページは一時的にアクセスできない状態にあるか、削除された可能性があります。
        </p>
        <p>このページをブックマークに登録されていた方は、お手数ですがブックマークの更新をお願い致します。</p>
      </div>
      <div class="notfound__link">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--secondary">トップページへ戻る</a>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>