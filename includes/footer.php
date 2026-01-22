<?php
// includes/footer.php
$lang = $lang ?? 'fr';
$pageKey = $pageKey ?? 'home';

$routes = $routes ?? [
  'home'        => ['fr' => '/fr/index.php',               'en' => '/en/index.php'],
  'cans'        => ['fr' => '/fr/bieres-canette-alu.php',  'en' => '/en/canned-beer.php'],
  'soft'        => ['fr' => '/fr/soft.php',                'en' => '/en/soft-drinks.php'],
  'formats'     => ['fr' => '/fr/formats.php',             'en' => '/en/formats.php'],
  'commitments' => ['fr' => '/fr/engagements.php',         'en' => '/en/commitments.php'],
  'contact'     => ['fr' => '/fr/contact.php',             'en' => '/en/contact.php'],
];

$year = date('Y');
?>

<footer class="site-footer" role="contentinfo">
  <div class="footer__inner">

    <!-- Logo -->
    <a class="footer__brand" href="<?= $routes['home'][$lang]; ?>" aria-label="<?= $lang === 'fr' ? 'Retour à l’accueil' : 'Back to home'; ?>">
      <img src="/assets/img/logo.svg" alt="Brasserie Saint-Omer">
    </a>

    <!-- Menu footer -->
    <nav class="footer__nav" aria-label="<?= $lang === 'fr' ? 'Navigation du pied de page' : 'Footer navigation'; ?>">
      <a class="footer__link" href="<?= $routes['contact'][$lang]; ?>"><?= $lang === 'fr' ? 'Nous contacter' : 'Contact'; ?></a>

      <a class="footer__cta" href="https://brasserie-goudale.com">
  <span class="footer__ctaIcon" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24">
      <defs>
        <path id="SVG1pzpbdYY" fill="#fff" d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z"/>
      </defs>
      <use fill-rule="evenodd" href="#SVG1pzpbdYY" transform="rotate(-180 5.02 9.505)"/>
    </svg>
  </span>

  <span class="footer__ctaText">Visiter Goudale</span>
</a>
    </nav>

    <div class="footer__divider" aria-hidden="true"></div>

    <!-- Infos -->
    <div class="footer__meta">
      <a class="footer__metaItem" href="tel:+33321987600" aria-label="Téléphone"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#E66A00" d="M19.5 22a1.5 1.5 0 0 0 1.5-1.5V17a1.5 1.5 0 0 0-1.5-1.5c-1.17 0-2.32-.18-3.42-.55a1.51 1.51 0 0 0-1.52.37l-1.44 1.44a14.77 14.77 0 0 1-5.89-5.89l1.43-1.43c.41-.39.56-.97.38-1.53c-.36-1.09-.54-2.24-.54-3.41A1.5 1.5 0 0 0 7 3H3.5A1.5 1.5 0 0 0 2 4.5C2 14.15 9.85 22 19.5 22M3.5 4H7a.5.5 0 0 1 .5.5c0 1.28.2 2.53.59 3.72c.05.14.04.34-.12.5L6 10.68c1.65 3.23 4.07 5.65 7.31 7.32l1.95-1.97c.14-.14.33-.18.51-.13c1.2.4 2.45.6 3.73.6a.5.5 0 0 1 .5.5v3.5a.5.5 0 0 1-.5.5C10.4 21 3 13.6 3 4.5a.5.5 0 0 1 .5-.5"/></svg> <span>03 21 38 72 00</span></a>
      <div class="footer__metaItem" aria-label="Adresse"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 256 256"><path fill="#E66A00" d="M128 64a40 40 0 1 0 40 40a40 40 0 0 0-40-40m0 64a24 24 0 1 1 24-24a24 24 0 0 1-24 24m0-112a88.1 88.1 0 0 0-88 88c0 31.4 14.51 64.68 42 96.25a254.2 254.2 0 0 0 41.45 38.3a8 8 0 0 0 9.18 0a254.2 254.2 0 0 0 41.37-38.3c27.45-31.57 42-64.85 42-96.25a88.1 88.1 0 0 0-88-88m0 206c-16.53-13-72-60.75-72-118a72 72 0 0 1 144 0c0 57.23-55.47 105-72 118"/></svg> <span>ZI du Fond Squin, 62500 Saint-Martin-lez-Tatinghem</span></div>

      <div class="footer__social">
        <span class="footer__socialLabel"><?= $lang === 'fr' ? 'Suivez-nous' : 'Follow us'; ?></span>
        <div class="footer__socialRow">
          <a class="footer__socialBtn" href="#" aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="#E66A00" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M3 9.4c0-2.24 0-3.36.436-4.216a4 4 0 0 1 1.748-1.748C6.04 3 7.16 3 9.4 3h5.2c2.24 0 3.36 0 4.216.436a4 4 0 0 1 1.748 1.748C21 6.04 21 7.16 21 9.4v5.2c0 2.24 0 3.36-.436 4.216a4 4 0 0 1-1.748 1.748C17.96 21 16.84 21 14.6 21H9.4c-2.24 0-3.36 0-4.216-.436a4 4 0 0 1-1.748-1.748C3 17.96 3 16.84 3 14.6zm14-2.9h.5"/><path d="M15.462 11.487a3.5 3.5 0 1 1-6.925 1.026a3.5 3.5 0 0 1 6.925-1.026"/></g></svg></a>
          <a class="footer__socialBtn" href="#" aria-label="LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#E66A00" d="M18.44 3.06H5.56a2.507 2.507 0 0 0-2.5 2.5v12.88a2.507 2.507 0 0 0 2.5 2.5h12.88a2.5 2.5 0 0 0 2.5-2.5V5.56a2.5 2.5 0 0 0-2.5-2.5m1.5 15.38a1.51 1.51 0 0 1-1.5 1.5H5.56a1.51 1.51 0 0 1-1.5-1.5V5.56a1.51 1.51 0 0 1 1.5-1.5h12.88a1.51 1.51 0 0 1 1.5 1.5Z"/><path fill="#E66A00" d="M6.376 10.748a1 1 0 1 1 2 0v6.5a1 1 0 0 1-2 0Z"/><circle cx="7.376" cy="6.744" r="1" fill="#E66A00"/><path fill="#E66A00" d="M17.62 13.37v3.88a1 1 0 1 1-2 0v-3.88a1.615 1.615 0 1 0-3.23 0v3.88a1 1 0 0 1-2 0v-6.5a1.016 1.016 0 0 1 1-1a.94.94 0 0 1 .84.47a3.61 3.61 0 0 1 5.39 3.15"/></svg></a>
          <a class="footer__socialBtn" href="#" aria-label="Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#E66A00" d="M19.02 4.975A9.93 9.93 0 0 0 2.07 12A9.935 9.935 0 0 0 12 21.935a10 10 0 0 0 3.8-.75a10.2 10.2 0 0 0 3.22-2.16a9.934 9.934 0 0 0 0-14.05m-.7 13.34a8.92 8.92 0 0 1-5.32 2.57v-6.56h1.88a1 1 0 0 0 0-2H13v-2.74a1 1 0 0 1 1-1h1.2a1 1 0 0 0 0-2h-1.7a2.5 2.5 0 0 0-2.5 2.5v3.24H9.13a1 1 0 1 0 0 2H11v6.56a8.919 8.919 0 1 1 9.26-5.47a9.1 9.1 0 0 1-1.94 2.9"/></svg></a>
        </div>
      </div>
    </div>

    <div class="footer__divider" aria-hidden="true"></div>

    <!-- Bas -->
    <div class="footer__bottom">
      <div class="footer__copyright">
        © <?= $year; ?> <?= $lang === 'fr' ? 'Transport Saint Arnould' : 'Transport Saint Arnould'; ?>
      </div>

      <div class="footer__legal">
        <a class="footer__legalLink" href="/<?= $lang; ?>/mentions-legales.php"><?= $lang === 'fr' ? 'Mentions légales' : 'Legal notice'; ?></a>
        <a class="footer__legalLink" href="/<?= $lang; ?>/politique-confidentialite.php"><?= $lang === 'fr' ? 'Politique de confidentialité' : 'Privacy policy'; ?></a>
      </div>
    </div>

  </div>
</footer>