<?php
/*
Template Name: サービス
*/

get_header();
?>
<div class="container">
  <div class="container__inner inner">
    <!-- program -->
    <section class="service__program program">
      <div class="program__inner">
        <h3 class="program__title">世界で活躍できる<br>グローバルな人材を育てる<br>３つの研修プログラム</h3>
        <div class="program__content">
          <?php $services = array('program_1', 'program_2', 'program_3');
          foreach ($services as $index => $service) :
            $program_num = sprintf('%02d', $index + 1);
            if (have_rows($service)) :
              while (have_rows($service)) : the_row();
              $program_class = ($service == 'program_2') ? 'service__program_2' : '';
              ?>
              <!-- .program__item -->
                <div class="program__item  <?php echo $program_class; ?>">
                  <div class="program__img">
                    <?php $image_id = get_sub_field('program_img');
                    echo wp_get_attachment_image($image_id, 'program'); ?>
                  </div>
                  <div class="program__text">
                    <div class="program__head">
                      <p class="program__num"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-program-number<?php echo $program_num; ?>.png" alt=""></p>
                      <h4 class="program__title-jp"><?php the_sub_field('program_name_jp'); ?></h4>
                      <span class="program__title-en"><?php the_sub_field('program_name_en'); ?></span>
                    </div>
                    <p class="program__detail"><?php the_sub_field('program_detail'); ?></p>
                    <div class="program__data">
                      <table class="program__table">
                        <tr>
                          <th>対象</th>
                          <td><?php the_sub_field('program_target'); ?></td>
                        </tr>
                          <th>費用</th>
                          <td><?php the_sub_field('program_price'); ?></td>
                        </tr>
                      </table>
                    </div>
                    <div class="program__button">
                      <a href="" class="button button--secondary button--arrow">お申し込みはこちら</a>
                    </div>
                  </div>
                </div>
                <!-- end .program__item -->
          <?php endwhile;
            endif;
          endforeach; ?>
        </div>
      </div>
    </section>
    <!-- end program -->
    <!-- flow -->
    <section class="service__flow flow">
      <div class="flow__inner">
        <h3 class="flow__title">導入の流れ</h3>
        <div class="flow__content">
          <div class="flow__item">
            <div class="flow__step">
              <span class="flow__step-en">step</span>
              <span class="flow__step-num">01</span>
            </div>
            <div class="flow__text flow__text-1">
              <p class="flow__head">お問い合わせ</p>
              <p class="flow__body">お問い合わせフォームより必要事項を誤入力の上、お申し込みください</p>
            </div>
          </div>
          <div class="flow__item">
            <div class="flow__step">
              <span class="flow__step-en">step</span>
              <span class="flow__step-num">02</span>
            </div>
            <div class="flow__text flow__text-2">
              <p class="flow__head">ご提案</p>
              <p class="flow__body">ご依頼の背景をお伺いし、必要なスキルと習得期間から最適なプランをご提案いたします</p>
            </div>
          </div>
          <div class="flow__item">
            <div class="flow__step">
              <span class="flow__step-en">step</span>
              <span class="flow__step-num">03</span>
            </div>
            <div class="flow__text flow__text-3">
              <p class="flow__head">日程調整</p>
              <p class="flow__body">研修日数と開始日を調整し、今後の流れ全体の段取りをご提案いたします</p>
            </div>
          </div>
          <div class="flow__item">
            <div class="flow__step">
              <span class="flow__step-en">step</span>
              <span class="flow__step-num">04</span>
            </div>
            <div class="flow__text flow__text-4">
              <p class="flow__head">研修開始</p>
              <p class="flow__body">
                <span>研修当日はお約束のお時間の30分前に講師が伺います。</span>
                <span class="flow__body--pink">※キャンセルのご連絡は2日前までにお願いいたします</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end flow -->
    <!-- faq -->
    <section class="service__qa qa">
    <div class="qa__inner">
          <h3 class="qa__title">よくあるご質問</h3>
          <div class="qa__content">
          <?php
            $args = array(
              'post_type' => 'qa',
              'posts_per_page' => -1,
            );
            $qa = new WP_Query($args);
if ($qa->have_posts()) : ?>
<?php while ($qa->have_posts()) : $qa->the_post(); ?>
<details class="qa__box js-details is-open" open>
              <summary class="qa__summary js-summary">
                <span class="qa__summary-text"><?php the_title(); ?></span>
                <span class="qa__summary-button"></span>
              </summary>
              <div class="qa__answer js-content">
                <div class="qa__answer-inner">
                  <span class="qa__answer-text">
                    <?php the_content(); ?></span>
                </div>
              </div>
            </details>
<?php endwhile; ?>
<?php endif;
            ?>
          </div>
        </div>
    </section>
    <!-- end faq -->
  </div>
</div>
<?php get_footer(); ?>