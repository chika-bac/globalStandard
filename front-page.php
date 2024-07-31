<?php get_header(); ?>
<main>
  <!-- fv -->
  <div class="fv">
    <div class="fv__inner">
      <div class="swiper fv__swiper">
        <div class="swiper-wrapper fv__swiper-wrapper">
          <div class="swiper-slide fv__swiper-slide">
            <picture class="fv__swiper-slide-img">
              <source media="(min-width:900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img1-pc.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img1-sp.png" alt="" />
            </picture>
          </div>
          <div class="swiper-slide fv__swiper-slide">
            <picture class="fv__swiper-slide-img">
              <source media="(min-width:900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img2-pc.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img2-sp.png" alt="" />
            </picture>
          </div>
          <div class="swiper-slide fv__swiper-slide">
            <picture class="fv__swiper-slide-img">
              <source media="(min-width:900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img3-pc.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv-img3-sp.png" alt="" />
            </picture>
          </div>
        </div>
      </div>
      <div class="fv__text">
        <p class="fv__title">
          <span>you can</span>
          <span>change</span>
          <span>the world</span>
        </p>
        <p class="fv__desc">世界で活躍できるグローバルな人材を育てる</p>
      </div>
    </div>
  </div>
  <!-- end fv -->
</main>
<?php get_footer(); ?>