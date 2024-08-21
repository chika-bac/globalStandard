<?php get_header(); ?>
<main>
  <!-- about -->
  <section class="about section">
    <div class="about__img-bg hidden-sp"></div>
    <div class="about__inner inner">
      <div class="about__heading heading">
        <h2 class="heading__en">about us</h2>
        <p class="heading__ja">当社について</p>
      </div>
      <div class="about__content">
        <div class="about__text">
          <p class="about__desc">
            急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。</p>
          <p class="about__desc">
            コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。</p>
          <p class="about__desc">
            文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
          </p>
        </div>
        <div class="about__img-wrapper">
          <div class="about__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-img.png" alt="" />
          </div>

          <a href="" class="about__link more-link">
            <span class="more-link__text">View more</span>
            <span class="more-link__circle"></span>
          </a>
          <div class="about__img-bg hidden-pc"></div>
        </div>
      </div>
    </div>

  </section>
  <!-- end about -->

  <!-- top-service -->
  <section class="top-service section">
    <div class="top-service__inner inner">
      <div class="top-service__heading heading">
        <h2 class="heading__en">service</h2>
        <p class="heading__ja">サービス</p>
      </div>
      <div class="top-service__content">
        <div class="top-service__items">
          <div class="top-service__item">
            <div class="top-service__num">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-program-number01.png" alt="">
            </div>
            <div class="top-service__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wp_upload/service-program01.png" alt="">
              <p class="top-service__name"><span>ビジネス英語研修</span></p>
            </div>
            <p class="top-service__text">
              ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
            </p>

          </div>
          <div class="top-service__item">
            <div class="top-service__num">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-program-number02.png" alt="">
            </div>
            <div class="top-service__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wp_upload/service-program02.png" alt="">
              <p class="top-service__name">
                <span>異文化</span>
                <span>コミュニケーション研修</span>
              </p>
            </div>
            <p class="top-service__text">
              急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。
            </p>
          </div>
          <div class="top-service__item">
            <div class="top-service__num">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-program-number03.png" alt="">
            </div>
            <div class="top-service__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wp_upload/service-program03.png" alt="">
              <p class="top-service__name">
                <span>ビジネス留学</span>
                <span>サポートプログラム</span>
              </p>
            </div>
            <p class="top-service__text">
              将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。
              通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。
            </p>
          </div>
        </div>

        <a href="" class="top-service__link more-link">
          <span class="more-link__text more-link__text--blue">View more</span>
          <span class="more-link__circle more-link__circle--yellow"></span>
        </a>
      </div>
    </div>
    </div>
  </section>
  <!-- end top-service -->

  <!-- top-case -->
  <section class="top-case section">
    <div class="top-case__inner inner">
      <div class="top-case__heading heading">
        <h2 class="heading__en">case study</h2>
        <p class="heading__ja">導入事例</p>
      </div>
      <div class="top-case__content">
        <div class="top-case__items">
          <?php
          $terms = get_terms('pickup');
          foreach ($terms as $term) :
            $cases = get_specific_contents('case', -1, 'pickup', 'pickup');
            if ($cases->have_posts()) :
              while ($cases->have_posts()) : $cases->the_post(); ?>
                <div class="top-case__item">
                  <div class="top-case__img">
                    <?php
                    $image_id = get_field('company_logo');
                    echo wp_get_attachment_image($image_id); ?>
                  </div>
                  <p class="top-case__company">
                    <span><?php the_field('company_name'); ?></span>
                    <span>様</span>
                  </p>
                  <div class="top-case__detail">
                    <div class="top-case__cat">
                      <?php
                      $junre_terms = get_the_terms($post->ID, 'junre');
                      echo $junre_terms[0]->name;
                      ?>
                    </div>
                    <div class="top-case__more">
                      <a href="" class="top-case__more-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-top.svg" alt=""></a>
                    </div>
                  </div>
                </div>

          <?php endwhile;
              wp_reset_postdata();
            endif;
          endforeach; ?>

        </div>
        <a href="" class="top-case__link more-link">
          <span class="more-link__text">View more</span>
          <span class="more-link__circle"></span>
        </a>
      </div>
    </div>
    </div>
  </section>
  <!-- end top-case -->

  <!-- top-news -->
  <section class="top-news section">
    <div class="top-news__inner inner">
      <div class="top-news__heading heading">
        <h2 class="heading__en">news</h2>
        <p class="heading__ja">新着情報</p>
      </div>
      <div class="top-news__content">
        <div class="top-news__items">
          <?php
          $args = array(
            'posts_per_page' => 3,
          );

          $news = new WP_Query($args);
          if ($news->have_posts()) : ?>
            <?php while ($news->have_posts()) : $news->the_post(); ?>
              <article class="top-news__item">
                <a href="<?php the_permalink(); ?>">
                  <div class="top-news__meta">
                    <div class="top-news__cat"><?php echo get_post_category(false); ?></div>
                    <time class="top-news__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  </div>
                  <h3 class="top-news__title"><?php the_title(); ?></h3>
                </a>
              </article>
          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
        </div>
        <a href="" class="top-news__link more-link">
          <span class="more-link__text more-link__text--black">View more</span>
          <span class="more-link__circle more-link__circle--yellow"></span>
        </a>
      </div>
    </div>
  </section>
  <!-- end top-news -->
</main>
<?php get_footer(); ?>