<?php
/*
Template Name: 当社について
*/

get_header();
?>
<div class="container">
  <div class="container__inner inner">
    <section class="about__mission mission">
      <?php
      $missions = array('company_msg_1', 'company_msg_2');
      foreach ($missions as $mission) :
        if (have_rows($mission)) :
          while (have_rows($mission)) : the_row(); ?>
            <div class="mission__item">
              <div class="mission__inner">
                <div class="mission__title <?php echo $mission; ?>">
                  <p class="mission__title-en"><?php the_sub_field('en_msg'); ?></p>
                  <p class="mission__title-jp"><?php the_sub_field('jp_msg'); ?></p>
                </div>
                <div class="mission__text">
                  <p class="mission__head"><?php the_sub_field('header_msg'); ?></p>
                  <p class="mission__body"><?php the_sub_field('msg_body'); ?></p>
                </div>
              </div>
            </div>
      <?php endwhile;
        endif;
      endforeach; ?>
    </section>
    <section class="about__company company">
      <div class="company__inner">
        <h3 class="company__title">会社概要</h3>
        <div class="company__content">
          <table class="company__table">
            <tr>
              <th>代表</th>
              <td><?php the_field('ceo'); ?></td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td><?php the_field('business'); ?></td>
            </tr>
            <tr>
              <th>設立</th>
              <td><?php the_field('established_date'); ?></td>
            </tr>
            <tr>
              <th>所在地</th>
              <td><?php the_field('address'); ?></td>
            </tr>
            <tr>
              <th>TEL</th>
              <td><?php the_field('tel'); ?></td>
            </tr>
            <tr>
              <th>FAX</th>
              <td><?php the_field('fax'); ?></td>
            </tr>
            <tr>
              <th>E-mail</th>
              <td><?php the_field('email'); ?></td>
            </tr>
          </table>
        </div>
      </div>
    </section>
    <section class="members">
    <div class="members__bg"></div>
      <div class="members__inner">
        <h3 class="members__title">役員紹介</h3>
        <div class="members__content">
          <ul class="members__list">
            <?php
            $args = array(
              'post_type' => 'members',
              'posts_per_page' => -1,
            );
            $members = new WP_Query($args);
            if ($members->have_posts()) :
              while ($members->have_posts()) : $members->the_post(); ?>
                <li class="members__item member">
                  <div class="member__img">
                    <?php
                    $img_id = get_field('member_img');
                    echo wp_get_attachment_image($img_id, 'member'); ?>
                  </div>
                  <div class="member__text">
                    <p class="member__head">
                      <span class="member__position"><?php the_field('member_position'); ?></span>
                      <span class="member__name"><?php the_field('member_name'); ?></span>
                    </p>
                    <p class="member__history"><?php the_field('member_history'); ?></p>
                    <ul class="member__sns">
                      <li><a href="<?php the_field('x_twitter'); ?>" rel="noopener noreferrer" target="_blank"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="<?php the_field('facebook'); ?>" rel="noopener noreferrer" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="<?php the_field('instagram'); ?>" rel="noopener noreferrer" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </li>
            <?php endwhile;
              wp_reset_postdata();
            endif; ?>
          </ul>
        </div>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>