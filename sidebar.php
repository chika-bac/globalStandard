  <!-- sidebar -->
  <aside class="side-bar">
    <div class="side-post">
      <h2 class="side-post__title">新着記事</h2>
      <div class="side-post__list post__list">
        <?php
        $new_posts = get_sidebar_post('post', 5, 'date', 'DESC');
        if ($new_posts->have_posts()) :
        ?>
          <?php while ($new_posts->have_posts()) : $new_posts->the_post();
          ?>
            <a href="<?php the_permalink(); ?>" class="post__list-item">
              <div class="post__list-img"><?php the_post_thumbnail(); ?></div>
              <div class="post__list-content">
                <div class="post__list-meta">
                  <div class="post__list-left">
                    <div class="post__list-category side-post__category">
                      <?php echo get_post_category(false); ?>
                    </div>
                  </div>
                  <time class="post__list-time post__list-right" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
                <h3 class="post__list-title"><?php echo title_trim(get_the_title(), 41); ?></h3>
              </div>
            </a>
        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
    <div class="side-category">
      <h2 class="side-category__title">カテゴリ</h2>
      <ul class="side-category__list">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) :
        ?>
          <li class="side-category__item">
            <a href="<?php echo get_category_link($category->term_id); ?>" class="side-category__link">
              <?php echo $category->name; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </aside>
  <!-- end sidebar -->