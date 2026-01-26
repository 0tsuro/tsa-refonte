<?php
$lang = 'en';
$pageKey = 'cans';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beers in Aluminum Cans – Brasserie Goudale</title>

  <link rel="stylesheet" href="/css/00-reset.css">
  <link rel="stylesheet" href="/css/01-variables.css">
  <link rel="stylesheet" href="/css/02-base.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <link rel="stylesheet" href="/css/components/navbar.css">
  <link rel="stylesheet" href="/css/components/footer.css">
  <link rel="stylesheet" href="/css/components/fullscreen-gallery.css">
  <link rel="stylesheet" href="/css/components/pack-callouts.css">
  <link rel="stylesheet" href="/css/components/age-gate.css">
  <link rel="stylesheet" href="/css/components/reveal.css">
  <link rel="stylesheet" href="/css/components/scroll-indicator.css">
  <link rel="stylesheet" href="/css/pages/index/pack-callouts-section.css">
  <link rel="stylesheet" href="/css/pages/bieres-canette-alu/hero.css">
  <link rel="stylesheet" href="/css/pages/bieres-canette-alu/cta.css">
</head>

<body>
  <div class="page-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/button.php'; ?>

    <main class="site-main">

      <!-- ===================== CANETTES ALU HERO ===================== -->
      <section class="canettes-alu-hero">
        <div class="canettes-alu-hero__inner">
          <h1 class="canettes-alu-hero__title">BEERS</h1>
          <h2 class="canettes-alu-hero__subtitle">Aluminum cans</h2>
          <p class="canettes-alu-hero__text">
            Our beers in aluminum cans offer practicality and freshness. Lightweight, recyclable and easy to transport, they are perfect for your moments of relaxation. Discover our selection of authentic flavors in this innovative format.
          </p>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/scroll-indicator.php'; ?>
      </section>
      <!-- ===================== END CANETTES ALU HERO ===================== -->

      <!-- ===================== GALERIE FULLSCREEN ===================== -->
      <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/fullscreen-gallery.php';

        $slides = [
          [
            'title' => 'Saint-Omer',
            'subtitle' => 'COMPLETE RANGE OF BLONDE BEER',
            'image' => '/assets/img/canettealu/gamme%20saint%20omer%20decor.png'
          ],
          [
            'title' => 'Shandy',
            'subtitle' => 'ALCOHOL-FREE AND SHANDY',
            'image' => '/assets/img/canettealu/panaché.png'
          ],
          [
            'title' => 'Sombrero',
            'subtitle' => 'FLAVORED BEERS',
            'image' => '/assets/img/canettealu/Sombrero.png'
          ],
          [
            'title' => 'La bière du Démon',
            'subtitle' => 'STRONG BEERS',
            'image' => '/assets/img/canettealu/demon.png'
          ],
          [
            'title' => 'Starberg',
            'subtitle' => 'FROM LIGHT BEER TO STRONG BEER',
            'image' => '/assets/img/canettealu/starberg.png'
          ],
        ];

        render_fullscreen_gallery($slides);
      ?>
      <!-- ===================== END GALERIE FULLSCREEN ===================== -->

      <!-- ===================== PACK CALLOUTS ===================== -->
    </main>

    <section class="section-brand">
      <div class="section-brand__inner">
        <div class="brand-head">
          <p class="section-kicker">BEERS IN ALUMINUM CANS</p>
          <h2 class="section-title">
            Your beers<br>
            <span>customized</span>
          </h2>
        </div>

        <main class="site-main">
      <?php
        include $_SERVER['DOCUMENT_ROOT'].'/includes/pack-callouts.php';

        render_pack_callouts([
          'imgSrc' => '/assets/img/Index/canette.svg',
          'imgAlt' => 'Customized cans',
          'left' => [
            'title' => 'Your recipe',
            'text'  => 'Pils beer, premium, specialty, flavored… or soft (cola, lemonade, energy drinks), choose the recipe suited to your needs.'
          ],
          'rightTop' => [
            'title' => 'Your formats',
            'text'  => 'Aluminum cans or glass bottles, packs or trays, cardboard or film.'
          ],
          'rightBottom' => [
            'title' => 'Your design',
            'text'  => 'Packaging with your brand, your logo, your colors for a product in your image.'
          ],
        ]);
      ?>
        </main>

        <!-- ✅ CTA -->
        <section class="brand-cta" aria-label="Contact">
          <h3 class="brand-cta__title">
            Have a project in mind? <span>Contact us!</span>
          </h3>
          <p class="brand-cta__text">
            Our team will advise you on the offer best suited to your needs.
          </p>
          <?php render_button([
            'href' => '/en/contact.php',
            'text' => 'Contact',
            'variant' => 'cta',
            'icon_left' => true,
          ]); ?>
        </section>
      </div>
    </section>
    <!-- ===================== END PACK CALLOUTS ===================== -->

    <!-- ===================== CTA SECTION ===================== -->
    <section class="canettes-alu-cta">
      <img class="canettes-alu-cta__bg" src="/assets/img/canettealu/bieregoudalebg.png" alt="Brasserie Goudale" />
      <div class="canettes-alu-cta__overlay" aria-hidden="true"></div>
      <div class="canettes-alu-cta__fade" aria-hidden="true"></div>

      <div class="canettes-alu-cta__inner">
        <div class="canettes-alu-cta__content">
          <h2 class="canettes-alu-cta__title">Discover specialty beers <br> from Brasserie Goudale</h2>
          <p class="canettes-alu-cta__subtitle">Let yourself be enchanted by the magic of specialty beers.</p>
          
          <div class="canettes-alu-cta__actions">
            <?php render_button([
              'href' => '/en/recette.php',
              'text' => 'Discover our specialty beers',
              'variant' => 'gold',
              'icon_left' => true,
            ]); ?>

            <?php render_button([
              'href' => 'https://brasserie-goudale.com',
              'text' => 'Visit the brewery',
              'variant' => 'ghost',
              'icon_right' => true,
            ]); ?>
          </div>
        </div>
      </div>
    </section>
    <!-- ===================== END CTA SECTION ===================== -->

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    <script src="/js/fullscreen-gallery.js"></script>
  </div>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/age-gate.php'; ?>
  <script src="/js/navbar.js"></script>
  <script src="/js/age-gate.js"></script>
  <script src="/js/reveal.js"></script>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/global-scripts.php'; ?>
</body>
</html>
