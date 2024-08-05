<!-- ニュース（投稿）一覧ページ -->
<?php get_header(); ?>
<!-- container -->
<div class="container">
  <div class="container__inner inner">
    <main class="main">
      <h2 class="home-title">ニュース</h2>
      <div class="post__list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="post__list-item">
              <div class="post__list-img"><?php the_post_thumbnail(); ?></div>
              <div class="post__list-content">
                <div class="post__list-meta">
                  <div class="post__list-left">
                    <div class="post__list-category">
                      <?php echo get_post_category(false); ?>
                    </div>
                    <?php echo attach_new_label(); ?>
                  </div>
                  <time class="post__list-time post__list-right" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
                <h3 class="post__list-title"><?php echo title_trim(get_the_title(), 41); ?></h3>
              </div>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php get_template_part('template-parts/content-pagination'); ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>