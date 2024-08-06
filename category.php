<!-- カテゴリーごとの記事一覧 -->
<?php get_header(); ?>
<!-- container -->
<div class="container">
  <div class="container__inner inner">
    <main class="main">
      <h2 class="home-title"><?php echo get_post_category(false); ?></h2>
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