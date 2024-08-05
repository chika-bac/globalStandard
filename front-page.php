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
</main>
<?php get_footer(); ?>