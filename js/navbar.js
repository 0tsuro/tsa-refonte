/**
 * NAVBAR.JS — Gestion menu mobile et desktop
 *
 * Fonctionnalités:
 * - Toggle menu mobile (.nav-burger)
 * - Clone du menu desktop dans overlay mobile
 * - Suppression des dropdowns en version mobile
 * - Toggle language dropdown (#mobileNav)
 * - Fermeture overlay au clic sur un lien
 *
 * Éléments DOM ciblés:
 * - .nav-burger: Bouton hamburger
 * - #mobileNav: Overlay menu mobile
 * - .mobile-overlay__close: Bouton fermeture
 * - .navbar__menu: Menu desktop à cloner
 *
 * Dépendances: Aucune (vanilla JS)
 */

document.addEventListener("DOMContentLoaded", () => {
  const burger = document.querySelector(".nav-burger");
  const overlay = document.getElementById("mobileNav");
  const closeBtn = document.querySelector(".mobile-overlay__close");
  const slot = document.querySelector(".mobile-overlay__menu-slot");
  const desktopMenu = document.querySelector(".navbar__menu");

  const langBtn = document.querySelector(".mobile-lang__btn");
  const langDropdown = document.querySelector(".mobile-lang__dropdown");

  if (!burger || !overlay || !closeBtn || !slot || !desktopMenu) return;

  function cloneMenuOnce() {
    if (slot.dataset.ready === "1") return;

    const cloned = desktopMenu.cloneNode(true);
    cloned.removeAttribute("id");

    // Dans l'overlay : on enlève les chevrons et on neutralise les comportements dropdown
    cloned.querySelectorAll(".has-dropdown").forEach((li) => {
      li.classList.remove("is-open");

      // on supprime le dropdown du DOM cloné (puisqu'on ne veut pas de sous-menus)
      const dd = li.querySelector(".dropdown");
      if (dd) dd.remove();

      // on supprime le chevron
      const chev = li.querySelector(".chev");
      if (chev) chev.remove();

      // le lien doit naviguer normalement -> on enlève data-mobile-toggle
      const link = li.querySelector(".nav-link");
      if (link) link.removeAttribute("data-mobile-toggle");
    });

    slot.appendChild(cloned);
    slot.dataset.ready = "1";

    // Fermer overlay quand on clique n'importe quel lien
    slot.querySelectorAll("a").forEach((a) => {
      a.addEventListener("click", () => closeMenu());
    });
  }

  function openMenu() {
    cloneMenuOnce();
    overlay.classList.add("is-open");
    overlay.setAttribute("aria-hidden", "false");
    burger.setAttribute("aria-expanded", "true");
    document.documentElement.style.overflow = "hidden";
  }

  function closeMenu() {
    overlay.classList.remove("is-open");
    overlay.setAttribute("aria-hidden", "true");
    burger.setAttribute("aria-expanded", "false");
    document.documentElement.style.overflow = "";
  }

  burger.addEventListener("click", () => {
    const open = overlay.classList.contains("is-open");
    if (open) closeMenu();
    else openMenu();
  });

  closeBtn.addEventListener("click", closeMenu);

  overlay.addEventListener("click", (e) => {
    if (e.target === overlay) closeMenu();
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeMenu();
  });

  // Langue mobile
  if (langBtn && langDropdown) {
    langBtn.addEventListener("click", () => {
      const isOpen = langBtn.getAttribute("aria-expanded") === "true";
      langBtn.setAttribute("aria-expanded", String(!isOpen));
      langDropdown.hidden = isOpen;
    });
  }
});
