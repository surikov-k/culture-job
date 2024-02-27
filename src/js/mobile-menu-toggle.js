export function initMobileMenuToggle() {
  const mobileButton = document.getElementById("header-nav-toggle");
  if (!mobileButton) {
    return;
  }
  mobileButton
    .addEventListener("click", () => {
      document.querySelector(".header").classList.toggle("open");
      document.body.classList.toggle("lock");
    });
}
