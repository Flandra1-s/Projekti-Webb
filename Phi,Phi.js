document.addEventListener("DOMContentLoaded", () => {
    const faqItems = document.querySelectorAll(".faq-item");
  
    faqItems.forEach((item) => {
      const header = item.querySelector(".faq-header");
      header.addEventListener("click", () => {
        item.classList.toggle("open");
      });
    });
    const cookieNotice = document.querySelector(".cookie-notice");
    const acceptCookieBtn = document.querySelector(".accept-cookie");
  
    if (cookieNotice && acceptCookieBtn) {
      acceptCookieBtn.addEventListener("click", () => {
        cookieNotice.style.display = "none";
      });
    }
    const viewMoreLink = document.querySelector(".view-more");
    if (viewMoreLink) {
      viewMoreLink.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(".destination-section").scrollIntoView({
          behavior: "smooth",
        });
      });
    }
  });
  