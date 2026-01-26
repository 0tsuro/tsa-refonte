<?php
$lang = 'en';
$pageKey = 'bottles';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bottled Beers – Brasserie Goudale</title>

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
  <link rel="stylesheet" href="/css/pages/bieres-bouteille/hero.css">
  <link rel="stylesheet" href="/css/pages/bieres-bouteille/cta.css">
</head>

<body>
  <div class="page-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/button.php'; ?>

    <main class="site-main">

      <!-- ===================== BIERES BOUTEILLE HERO ===================== -->
      <section class="bieres-bouteille-hero">
        <div class="bieres-bouteille-hero__inner">
          <h1 class="bieres-bouteille-hero__title">BEERS</h1>
          <h2 class="bieres-bouteille-hero__subtitle">Bottled</h2>
          <p class="bieres-bouteille-hero__text">
          From light beer to strong beer and flavored beers, <br> blended and alcohol-free, discover the full range <br> of the Brasserie de Saint-Omer
        </p>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/scroll-indicator.php'; ?>
      </section>
      <!-- ===================== END BIERES BOUTEILLE HERO ===================== -->

      <!-- ===================== GALERIE FULLSCREEN ===================== -->
      <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/fullscreen-gallery.php';

        $slides = [
          [
            'title' => 'Saint-Omer',
            'subtitle' => 'LIGHT BEER',
            'image' => '/assets/img/bieresbouteilles/bierelegere.png'
          ],
          [
            'title' => 'Saint-Omer',
            'subtitle' => 'FLAVORED BEERS',
            'image' => '/assets/img/bieresbouteilles/bierearo.png'
          ],
          [
            'title' => 'Saint Omer',
            'subtitle' => 'ALCOHOL-FREE AND BLENDED',
            'image' => '/assets/img/bieresbouteilles/panache.png'
          ],
          [
            'title' => 'Sombrero',
            'subtitle' => 'FLAVORED BEER',
            'image' => '/assets/img/bieresbouteilles/sombrero.png'
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
          <p class="section-kicker">THE EXPERT IN PRIVATE LABEL BRANDS</p>
          <h2 class="section-title">
            Make your<br>
            <span>brand</span> sparkle
          </h2>
        </div>

        <main class="site-main">
      <?php
        include $_SERVER['DOCUMENT_ROOT'].'/includes/pack-callouts.php';

        render_pack_callouts([
          'imgSrc' => '/assets/img/Index/canette.svg',
          'imgAlt' => 'Personalized cans',
          'left' => [
            'title' => 'Your recipe',
            'text'  => 'Pils beer, premium, specialty, flavored, alcohol-free..., choose the recipe suited to your needs.'
          ],
          'rightTop' => [
            'title' => 'Your packaging formats',
            'text'  => 'We adapt to your market: Aluminum cans or glass bottles, packs or trays, cardboard or film'
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
    <section class="bieres-bouteille-cta">
      <img class="bieres-bouteille-cta__bg" src="/assets/img/canettealu/bieregoudalebg.png" alt="Brasserie Goudale" />
      <div class="bieres-bouteille-cta__overlay" aria-hidden="true"></div>
      <div class="bieres-bouteille-cta__fade" aria-hidden="true"></div>

      <div class="bieres-bouteille-cta__inner">
        <div class="bieres-bouteille-cta__content">
          <h2 class="bieres-bouteille-cta__title">Discover specialty beers <br> from Brasserie Goudale</h2>
          <p class="bieres-bouteille-cta__subtitle">Let yourself be enchanted by the magic of specialty beers.</p>
          
          <div class="bieres-bouteille-cta__actions">
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
