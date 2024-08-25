<a href="<?php the_permalink(); ?>" class="post__list-item">
  <div class="post__list-img"><?php the_post_thumbnail(); ?></div>
  <div class="post__list-content">
    <div class="post__list-meta">
      <div class="post__list-left">
        <div class="post__list-category">
          <?php echo get_post_category(false); ?>
        </div>
        <?php
        // 最新2件のみNEWマークを表示
        $num = $wp_query->current_post;
        if ($num < 2) : ?>
          <span class="new-label">NEW</span>
        <?php endif; ?>
      </div>
      <div class="post__list-right">
        <time class="post__list-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
      </div>
    </div>
    <h3 class="post__list-title"><?php echo title_trim(get_the_title(), 41); ?></h3>
  </div>
</a>