// xử lý faq-title và faq-panel
const faqTitles = document.querySelectorAll(".faq-title");

console.log(faqTitles);

faqTitles.forEach((faqTitle) => {
  faqTitle.addEventListener("click", function () {
    const faqPanel = faqTitle.nextElementSibling;

    faqTitle.classList.toggle("active");
    if (faqPanel.style.display === "none" || faqPanel.style.display === "") {
      faqPanel.style.display = "block";
    } else {
      faqPanel.style.display = "none";
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const tabLinks = document.querySelectorAll(".btn-large");
  const tabPanels = document.querySelectorAll(".tab-panel");
  tabLinks.forEach((tabLink) => {
    tabLink.addEventListener("click", function (e) {
      e.preventDefault();

      // lấy id của tab được click từ thuộc tính data-tab
      const tabId = tabLink.getAttribute("data-tab");

      // Ẩn tất cả các tab và loại bỏ lớp active khỏi các tab
      tabPanels.forEach((panel) => {
        panel.style.display = "none";
        panel.classList.remove("active");
      });

      const activeTab = document.getElementById(tabId);
      if (activeTab) {
        activeTab.style.display = "block";
        activeTab.classList.add("active");
      }

      // Thêm lớp active vào nút tab đã chọn
      tabLinks.forEach((link) => {
        link.classList.remove("active");
      });

      tabLink.classList.add("active");
    });
  });
});

/* sticky Header */
jQuery(document).ready(function () {
  jQuery(window).on("scroll", function () {
    if (jQuery(this).scrollTop() > 40) {
      jQuery(".header").addClass("sticky-header");
    } else {
      jQuery(".header").removeClass("sticky-header");
    }
  });
});

/* Preloader */
window.onload = function () {
  setTimeout(function () {
    document.getElementById("preloader").style.display = "none";
  }, 3000);
};

jQuery(document).ready(function ($) {
  $(".team-slider").owlCarousel({
    loop: false,
    nav: false,
    dots: false,
    items: 3,
    smartSpeed: 900,
    responsiveClass: true,
    autoplay: false,
    margin: 40,
    touchDrag: false,
    mouseDrag: false,
    responsive: {
      0: {
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        touchDrag: true,
        mouseDrag: true,
      },
      600: {
        items: 2,
        loop: true,
        dots: false,
        nav: true,
        touchDrag: true,
        mouseDrag: true,
      },
      992: {
        items: 3,
        dots: false,
        nav: false,
      },
    },
  });
});