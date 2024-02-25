export function initMobileMenuToggle() {
  document.getElementById("header-nav-toggle")
    .addEventListener("click", () => {
      document.querySelector(".header").classList.toggle("open");
      document.body.classList.toggle("lock");
    });
}
