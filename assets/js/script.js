/*
375pxでviewport固定
================================================ */
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value = window.outerWidth > 375 ? "width=device-width,initial-scale=1" : "width=375";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();

/*
ドロワーメニュー
================================================ */
const menuIcon = document.querySelector("#js-drawer-icon");
const menuPanel = document.querySelector("#js-drawer-panel");

if (menuIcon) {
  menuIcon.addEventListener("click", (e) => {
    e.preventDefault();
    menuIcon.classList.toggle("is-checked");
    menuPanel.classList.toggle("is-checked");
    document.body.classList.toggle("isScrollAllowed");
  });
}

/*
fvスライダー
================================================ */
const swiper = new Swiper(".swiper", {
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
    waitForTransition: false,
  },
});

/*
QAアコーディオン
================================================ */
document.addEventListener("DOMContentLoaded", () => {
  const details = document.querySelectorAll(".js-details");
  const RUNNING_VALUE = "running";

  details.forEach((detail) => {
    const summary = detail.querySelector(".js-summary");
    const content = detail.querySelector(".js-content");

    summary.addEventListener("click", (e) => {
      e.preventDefault();

      // 連打防止
      if (detail.dataset.animStatus === RUNNING_VALUE) {
        return;
      }

      const isOpen = detail.classList.contains("is-open");

      if (isOpen) {
        // アコーディオンを閉じる
        const closingAnim = content.animate(closingAnimKeyframes(content), animTiming);
        detail.classList.toggle("is-open");
        detail.dataset.animStatus = RUNNING_VALUE;

        closingAnim.onfinish = () => {
          // アニメーション完了後にopen属性を削除
          detail.removeAttribute("open");
          detail.dataset.animStatus = "";
        };
      } else {
        // アコーディオンを開く
        detail.setAttribute("open", true);
        detail.classList.toggle("is-open");

        const openingAnim = content.animate(openingAnimKeyframes(content), animTiming);
        detail.dataset.animStatus = RUNNING_VALUE;

        openingAnim.onfinish = () => {
          detail.dataset.animStatus = "";
        };
      }
    });
  });
});

const animTiming = {
  duration: 400,
  easing: "ease-in-out",
};

const closingAnimKeyframes = (content) => [
  {
    height: content.offsetHeight + "px",
    opacity: 1,
  },
  {
    height: 0,
    opacity: 0,
  },
];

const openingAnimKeyframes = (content) => [
  {
    height: 0,
    opacity: 0,
  },
  {
    height: content.offsetHeight + "px",
    opacity: 1,
  },
];
