<?php
/*
Template Name: 導入事例
*/

get_header();
?>
<div class="container">
  <div class="container__inner inner">
    <div class="case__tabs">
      <ul class="case__tabs-list">
        <li class="case__tab">
          <a href="#tab1" class="case__tab-link">ビジネス英語研修</a>
        </li>
        <li class="case__tab">
          <a href="#tab1" class="case__tab-link">異文化コミュニケーション</a>
        </li>
        <li class="case__tab">
          <a href="#tab1" class="case__tab-link">ビジネス留学プログラム</a>
        </li>
      </ul>
    </div>
    <div class="case__container">
      <section class="case__section">
        <div class="case__section-inner">
          <?php
          $terms = get_terms('junre');
          foreach ($terms as $term) : ?>
            <h3 class="case__subtitle"><?php echo $term->name; ?></h3>
            <div class="case__items">
              <?php
              $args = array(
                'post_type' => 'case_study',
                'posts_per_page' => -1,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'junre',
                    'field' => 'slug',
                    'terms' => $term->slug
                  )
                )
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <article class="case__item case-item">
                    <div class="case-item__head">
                      <div class="case-item__title">
                        <span class="case-item__industry"><?php the_field('industry_type'); ?></span>
                        <h3 class="case-item__name"><?php the_field('company_name'); ?></h3>
                      </div>
                      <div class="case-item__img">
                        <?php
                        $image_id = get_field('company_logo');
                        echo wp_get_attachment_image($image_id); ?>
                      </div>
                    </div>
                  </article>
              <?php endwhile;
                wp_reset_postdata();
              endif; ?>
            </div>
            <!-- ?> -->
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </div>
</div>
<?php get_footer(); ?>