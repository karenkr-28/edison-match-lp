// ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".l-header__menu__btn");
  const headNav = document.querySelector("#js-header__nav");

  hamburger.addEventListener("click", () => {
    if (hamburger.classList.contains("is-active")) {
      hamburger.classList.remove("is-active");
      headNav.classList.remove("is-active");
    } else {
      hamburger.classList.add("is-active");
      headNav.classList.add("is-active");
    }
  });

  headNav.addEventListener("click", () => {
    hamburger.classList.remove("is-active");
    headNav.classList.remove("is-active");
  });
});

// よくあるご質問
const initializeDetailsAccordion = (details) => {
  const summary = details.querySelector("summary");
  const panel = details.querySelector("summary + *");

  if (!(details && summary && panel)) return; // 必要要素が揃ってない場合は処理をやめる

  let isTransitioning = false; // 連打防止フラグ

  const onOpen = () => {
    if (details.open || isTransitioning) {
      return;
    }
    isTransitioning = true;
    panel.style.gridTemplateRows = "0fr";
    details.setAttribute("open", "");
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        panel.style.gridTemplateRows = "1fr";
      });
    });
    panel.addEventListener(
      "transitionend",
      () => {
        isTransitioning = false;
      },
      { once: true }
    );
  };

  const onClose = () => {
    if (!details.open || isTransitioning) {
      return;
    }
    isTransitioning = true;
    panel.style.gridTemplateRows = "0fr";
    panel.addEventListener(
      "transitionend",
      () => {
        details.removeAttribute("open");
        panel.style.gridTemplateRows = "";
        isTransitioning = false;
      },
      { once: true }
    );
  };

  summary.addEventListener("click", (event) => {
    event.preventDefault();

    if (details.open) {
      onClose();
    } else {
      onOpen();
    }
  });
};
document.addEventListener("DOMContentLoaded", () => {
  const accordions = document.querySelectorAll(".p-front__faq__accordion");

  accordions.forEach((accordion) => {
    initializeDetailsAccordion(accordion);
  });
});

// TOTOP,sidebar
const sidebar = document.querySelector(".l-sidebar");
const pagetop_btn = document.querySelector(".l-sidebar__totop");
const footer = document.querySelector("footer");

pagetop_btn.addEventListener("click", scroll_top);
function scroll_top() {
  window.scroll({ top: 0, behavior: "smooth" });
}
window.addEventListener("scroll", scroll_event);
function scroll_event() {
  if (window.pageYOffset > 100) {
    sidebar.classList.add("is-visible");
  } else {
    sidebar.classList.remove("is-visible");
  }
  const footerRect = footer.getBoundingClientRect();
  const windowHeight = window.innerHeight;

  const overlap = windowHeight - footerRect.top;
  if (overlap > 0) {
    sidebar.style.bottom = `${overlap + 20}px`;
  } else {
    sidebar.style.bottom = "10%";
  }
}
