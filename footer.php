<footer class="footer">
  <div class="footer__inner">
    <div class="footer__top">
      <div class="footer__download">
        <p class="footer__title">
          <span class="footer__title-en">Download</span>
          <span class="footer__title-ja">資料ダウンロード</span>
        </p>
        <div class="footer__button">
          <a href="<?php echo home_url("download"); ?>" class="button button--more">View more</a>
        </div>
      </div>
      <div class="footer__contact">
        <p class="footer__title">
          <span class="footer__title-en">contact</span>
          <span class="footer__title-ja">お問い合わせ</span>
        </p>
        <div class="footer__button">
          <a href="<?php echo home_url("contact"); ?>" class="button button--more">View more</a>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <p class="footer__logo">Global Standard</p>
      <ul class="footer__info">
        <li class="footer__info-item">〒550-1000　大阪市西区土佐堀9-5-5</li>
        <li class="footer__info-item">TEL　06-123-4567</li>
        <li class="footer__info-item">FAX　06-123-4568</li>
      </ul>
      <small class="footer__copy">&copy;2021 Global Standard. All Rights Reserved.</small>
    </div>
  </div>
</footer>

<!-- go to top -->
<div class="floating" id="js-page-top">
  <a href="#">
    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g id="icon-top">
        <path id="&#227;&#131;&#145;&#227;&#130;&#185; 4107" d="M9.577 24.3559C8.85584 23.6348 8.85584 22.4521 9.577 21.731L18.7789 12.5579C19.4808 11.856 20.6155 11.8367 21.3366 12.5002L30.4039 21.5386C30.7693 21.904 30.952 22.3752 30.952 22.856C30.952 23.3271 30.7693 23.8079 30.4135 24.1636C29.6924 24.8848 28.5193 24.8944 27.7885 24.1636L20.0001 16.4906L12.202 24.3656C11.4808 25.0867 10.3078 25.0867 9.577 24.3559Z" fill="white" />
        <path id="&#227;&#131;&#145;&#227;&#130;&#185; 4108" d="M20 40C31.0481 40 40 31.0481 40 20C40 8.95192 31.0481 0 20 0C8.95192 0 0 8.95192 0 20C0 31.0481 8.95192 40 20 40ZM20 36.9231C15.4808 36.9231 11.2308 35.1635 8.03846 31.9615C4.83654 28.7692 3.07692 24.5192 3.07692 20C3.07692 15.4808 4.83654 11.2308 8.03846 8.03846C11.2308 4.83654 15.4808 3.07692 20 3.07692C24.5192 3.07692 28.7692 4.83654 31.9615 8.03846C35.1635 11.2308 36.9231 15.4808 36.9231 20C36.9231 24.5192 35.1635 28.7692 31.9615 31.9615C28.7692 35.1635 24.5192 36.9231 20 36.9231Z" fill="white" />
      </g>
    </svg>

  </a>
</div>
<?php wp_footer(); ?>
</body>

</html>