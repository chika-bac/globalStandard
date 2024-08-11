<section class="case__section">
  <div class="case__section-inner">
    <h3 id="<?php echo $term->slug; ?>" class="case__subtitle">
      <span class="case__subtitle-ja"><?php echo $term->name; ?></span>
      <span class="case__subtitle-en"><?php the_field('case_study_en_title', $term->taxonomy . '_' . $term->term_id); ?></span>
    </h3>
    <div class="case__items">
      <?php
      $cases = get_specific_contents('case_study', -1, 'junre', $term->slug);
      if ($cases->have_posts()) :
        while ($cases->have_posts()) : $cases->the_post(); ?>
          <article class="case__item case-item">
            <div class="case-item__head">
              <div class="case-item__title">
                <span class="case-item__industry"><?php the_field('industry_type'); ?></span>
                <h3 class="case-item__name">
                  <span><?php the_field('company_name'); ?></span>
                  <span>様</span>
                </h3>
              </div>
              <div class="case-item__img">
                <?php
                $image_id = get_field('company_logo');
                echo wp_get_attachment_image($image_id); ?>
              </div>
            </div>
            <div class="case-item__body">
              <div class="case-item__body-title">
                <span>研修コース：</span>
                <span><?php echo $term->name; ?></span>
              </div>
              <div class="case-item__text">
                <h4 class="case-item__body-head">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M4.2236 6.12015L3.01694 7.32681L6.89585 11.2057L15.5156 2.58594L14.309 1.37927L6.89585 8.749L4.2236 6.12015ZM13.7917 13.7917H1.72397V1.72397H10.3438V0H1.72397C0.775701 0 0 0.775701 0 1.72397V13.7917C0 14.7399 0.775701 15.5156 1.72397 15.5156H13.7917C14.7399 15.5156 15.5156 14.7399 15.5156 13.7917V6.89585H13.7917V13.7917Z" fill="" />
                  </svg>
                  研修の目的
                </h4>
                <p class="case-item__content"><?php echo the_field('training_purpose'); ?></p>
                <h4 class="case-item__body-head">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M4.2236 6.12015L3.01694 7.32681L6.89585 11.2057L15.5156 2.58594L14.309 1.37927L6.89585 8.749L4.2236 6.12015ZM13.7917 13.7917H1.72397V1.72397H10.3438V0H1.72397C0.775701 0 0 0.775701 0 1.72397V13.7917C0 14.7399 0.775701 15.5156 1.72397 15.5156H13.7917C14.7399 15.5156 15.5156 14.7399 15.5156 13.7917V6.89585H13.7917V13.7917Z" fill="" />
                  </svg>
                  選んだ理由
                </h4>
                <p class="case-item__content"><?php echo the_field('choose_reason'); ?></p>
                <h4 class="case-item__body-head"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M4.2236 6.12015L3.01694 7.32681L6.89585 11.2057L15.5156 2.58594L14.309 1.37927L6.89585 8.749L4.2236 6.12015ZM13.7917 13.7917H1.72397V1.72397H10.3438V0H1.72397C0.775701 0 0 0.775701 0 1.72397V13.7917C0 14.7399 0.775701 15.5156 1.72397 15.5156H13.7917C14.7399 15.5156 15.5156 14.7399 15.5156 13.7917V6.89585H13.7917V13.7917Z" fill="" />
                  </svg>
                  導入後の成果・効果</h4>
                <p class="case-item__content"><?php echo the_field('introduce_result'); ?></p>
              </div>
            </div>
          </article>
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </div>
    <div class="case__button">
      <a href="" class="button button--secondary button--arrow"><?php echo $term->name; ?>の詳細</a>
    </div>
  </div>
</section>