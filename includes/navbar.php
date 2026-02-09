<?php
$lang = $lang ?? 'fr';
$pageKey = $pageKey ?? 'home';

$routes = [
  'home'        => ['fr' => '/fr/index.php',               'en' => '/en/index.php'],
  'contact'     => ['fr' => '/fr/contact.php',             'en' => '/en/contact.php'],
];

$otherLang = $lang === 'fr' ? 'en' : 'fr';
$switchUrl = $routes[$pageKey][$otherLang] ?? ($otherLang === 'fr' ? '/fr/index.php' : '/en/index.php');

function active($key, $pageKey) { return $key === $pageKey ? ' is-active' : ''; }

$beerKeys = ['cans','bottles','draft'];
$isBeerActive = in_array($pageKey, $beerKeys, true) ? ' is-active' : '';
?>

<header class="site-header" role="banner">
  <nav class="navbar" aria-label="<?= $lang === 'fr' ? 'Navigation principale' : 'Main navigation'; ?>">
    <div class="navbar__inner">

      <a class="navbar__logo" href="<?= $routes['home'][$lang]; ?>" aria-label="<?= $lang === 'fr' ? 'Aller à l’accueil' : 'Go to home'; ?>">
        <img src="/assets/img/logo.svg" alt="Transport Saint Arnould">
      </a>

      <!-- Menu desktop (moved here for left alignment) -->
      <ul class="navbar__menu" id="mainNav" role="list">
        <li class="nav-item">
          <a class="nav-link<?= active('home', $pageKey); ?>" href="<?= $routes['home'][$lang]; ?>">
            <?= $lang === 'fr' ? 'Accueil' : 'Home'; ?>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link<?= active('contact', $pageKey); ?>" href="<?= $routes['contact'][$lang]; ?>">
            <?= $lang === 'fr' ? 'Nous Contacter' : 'Contact'; ?>
          </a>
        </li>
      </ul>

      <div class="navbar__actions">
        <a class="btn-cta" href="https://brasserie-goudale.com">
          <span class="btn-cta__icon" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24">
              <defs><path id="SVG1pzpbdYY" fill="#fff" d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z"/></defs>
              <use fill-rule="evenodd" href="#SVG1pzpbdYY" transform="rotate(-180 5.02 9.505)"/>
            </svg>
          </span>
          <span class="btn-cta__text">Visiter Goudale</span>
        </a>

        <a class="btn btn--orange" href="#">
          <span class="btn__text"><?= $lang === 'fr' ? 'Obtenir un devis' : ''; ?></span>
          <span class="btn__icon btn__icon--right" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
              <path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </a>

        <!-- Lang desktop -->
        <div class="lang lang--switch">
          <button class="lang__btn" type="button" aria-label="<?= $lang === 'fr' ? 'Choisir la langue' : 'Choose language'; ?>">
            <?= strtoupper($lang); ?>
            <span class="chev" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m7 10l5 5l5-5" stroke-width="1"/>
              </svg>
            </span>
          </button>

          <div class="dropdown dropdown--right" role="menu" aria-label="<?= $lang === 'fr' ? 'Choix de langue' : 'Language selection'; ?>">
            <a class="dropdown__link" href="<?= $switchUrl; ?>" role="menuitem">
              <?= strtoupper($otherLang); ?>
            </a>
          </div>
        </div>

        <!-- Burger -->
        <button class="nav-burger" type="button"
          aria-label="<?= $lang === 'fr' ? 'Ouvrir le menu' : 'Open menu'; ?>"
          aria-expanded="false"
          aria-controls="mobileNav">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
            <path fill="#fff" d="M4 17.27v-1h16v1zm0-4.77v-1h16v1zm0-4.77v-1h16v1z"/>
          </svg>
        </button>
      </div>

    </div>
  </nav>

  <!-- OVERLAY : il ne doit jamais apparaître sur desktop (CSS s'en charge) -->
  <div class="mobile-overlay" id="mobileNav" aria-hidden="true">
    <div class="mobile-overlay__inner">

      <div class="mobile-overlay__top">
        <a class="mobile-overlay__logo" href="<?= $routes['home'][$lang]; ?>">
          <img src="/assets/img/logo.svg" alt="Brasserie Saint-Omer">
        </a>

        <button class="mobile-overlay__close" type="button" aria-label="<?= $lang === 'fr' ? 'Fermer le menu' : 'Close menu'; ?>">
          ✕
        </button>
      </div>

      <div class="mobile-overlay__content">
        <div class="mobile-overlay__menu-slot"></div>

<div class="mobile-lang">
  <div class="mobile-lang__label"><?= $lang === 'fr' ? 'Langue' : 'Language'; ?></div>

  <div class="mobile-lang__row">
    <a class="mobile-lang__pill<?= $lang === 'fr' ? ' is-active' : ''; ?>" href="<?= isset($routes[$pageKey]) ? $routes[$pageKey]['fr'] : '/fr/index.html'; ?>">FR</a>
    <a class="mobile-lang__pill<?= $lang === 'en' ? ' is-active' : ''; ?>" href="<?= isset($routes[$pageKey]) ? $routes[$pageKey]['en'] : '/en/index.html'; ?>">EN</a>
  </div>
</div>

      </div>
    </div>
  </div>
</header>