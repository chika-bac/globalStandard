<!-- 投稿個別ページ -->
<?php get_header(); ?>
<!-- fv -->
<!-- 後でheader.phpに移して、クラス名はページslugによって変更させる -->
<div class="lower-fv lower-fv--news">
  <div class="lower-fv__inner">
    <h2 class="lower-fv__title">
      <span class="lower-fv__en">news</span>
      <span class="lower-fv__ja">ニュース</span>
    </h2>
  </div>
</div>
<?php if (function_exists('bcn_display')) : ?>
  <div class="bread-crumb">
    <?php bcn_display(); ?>
  </div>
<?php endif; ?>
<!-- end fv -->

<!-- container -->
<div class="container">
  <div class="container__inner inner">
    <!-- main -->
    <main>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article class="single__post single-post">
            <div class="single-post__header">
              <div class="single-post__meta">
                <div class="single-post__category">
                  <?php the_category(); ?>
                </div>
                <time class="single-post__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              </div>
              <h1 class="single-post__title"><?php the_title(); ?></h1>
              <div class="single-post__img">
                <!-- todo: アイキャッチが指定されていない場合の処理も書く -->
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
            <div class="single-post__content">
              <?php the_content(); ?>
            </div>
          </article>

          <!-- single-more-link -->
          <?php
          $next_post = get_next_post();
          $prev_post = get_previous_post();
          if ($prev_post || $next_post) :
          ?>
            <div class="single-more-link">
              <?php
              if ($prev_post) :
              ?>
                <div class="single-more-link-prev">
                  <a href="<?php echo get_permalink($prev_post->ID); ?>" class="">
                    < 前の記事へ</a>
                </div>
              <?php endif;
              if ($next_post) :
              ?>
                <div class="single-more-link-next">
                  <a href="<?php echo get_permalink($next_post->ID); ?>" class="">次の記事へ ></a>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <!-- end single-more-link -->
        <?php endwhile; ?>
      <?php endif; ?>
    </main>
    <!-- end main -->
    <?php get_sidebar(); ?>
  </div>
  <!-- end container__inner -->
</div>
<!-- end container -->
<?php get_footer(); ?>