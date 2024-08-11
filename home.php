<!-- ニュース（投稿）一覧ページ -->
<?php get_header(); ?>
<!-- container -->
<div class="container">
  <div class="container__inner inner inner-sidebar">
    <main class="main">
      <h2 class="home-title">ニュース</h2>
      <div class="post__list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content-post'); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php get_template_part('template-parts/content-pagination'); ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>