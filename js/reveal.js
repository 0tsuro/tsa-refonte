/**
 * Scroll Reveal Animation
 * Utilise l'Intersection Observer API pour animer les éléments lors du scroll
 */

document.addEventListener("DOMContentLoaded", () => {
  // Configuration de l'Intersection Observer
  const revealOptions = {
    threshold: 0.15,
    rootMargin: "0px 0px -50px 0px",
  };

  // Créer l'Intersection Observer
  const revealOnScroll = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Ajouter la classe 'revealed' pour déclencher l'animation
        entry.target.classList.add("revealed");
        // Arrêter d'observer cet élément (animation une seule fois)
        observer.unobserve(entry.target);
      }
    });
  }, revealOptions);

  // Sélectionner tous les éléments à animer
  const revealElements = document.querySelectorAll("[data-reveal]");

  // Observer chaque élément
  revealElements.forEach((element) => {
    revealOnScroll.observe(element);
  });

  // Alternative : animer aussi les titres, sections et cartes automatiquement
  const autoRevealSelectors = [
    "h1",
    "h2",
    "h3",
    "h4",
    "h5",
    "h6",
    ".hero__title",
    ".hero__subtitle",
    ".hero__actions",
    ".section-title",
    ".section-kicker",
    ".card",
    ".pack-callouts",
    ".timeline",
    ".timelineItem",
    ".beers-gallery__item",
    ".beers-gallery__caption",
    ".citation-section",
    ".brasserie-section",
    ".format-carousel",
    ".engagement-section",
    ".banner",
    ".cta",
    ".hero",
  ];

  const autoRevealElements = document.querySelectorAll(
    autoRevealSelectors.join(",")
  );

  autoRevealElements.forEach((element) => {
    // Ne pas observer si déjà observé (data-reveal)
    if (!element.hasAttribute("data-reveal")) {
      revealOnScroll.observe(element);
    }
  });
});
