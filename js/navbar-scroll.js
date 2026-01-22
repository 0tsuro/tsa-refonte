// Navbar scroll behavior - show on scroll up, hide on scroll down
let lastScrollTop = 0;
const navbar = document.querySelector("nav");

window.addEventListener("scroll", () => {
  const scrollTop = window.scrollY || document.documentElement.scrollTop;

  // Déterminer si on est devant une image fullscreen
  const fullscreenGallery = document.querySelector(".fullscreen-gallery");
  let inFullscreenGallery = false;

  if (fullscreenGallery) {
    const rect = fullscreenGallery.getBoundingClientRect();
    const galleryTop = rect.top + scrollTop;
    const galleryBottom = rect.bottom + scrollTop;
    inFullscreenGallery = scrollTop >= galleryTop && scrollTop < galleryBottom;
  }

  if (scrollTop > 100) {
    // Only apply behavior after scrolling past 100px
    if (inFullscreenGallery) {
      // Devant les images fullscreen: toujours cachée, pas de revenir
      navbar.classList.remove("navbar-visible");
      navbar.classList.add("navbar-hidden");
    } else if (scrollTop < lastScrollTop) {
      // Scrolling UP
      navbar.classList.remove("navbar-hidden");
      navbar.classList.add("navbar-visible");
    } else {
      // Scrolling DOWN
      navbar.classList.remove("navbar-visible");
      navbar.classList.add("navbar-hidden");
    }
  } else {
    // At top, show navbar
    navbar.classList.remove("navbar-hidden");
    navbar.classList.remove("navbar-visible");
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});
