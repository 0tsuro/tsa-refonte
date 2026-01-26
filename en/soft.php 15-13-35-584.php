<?php
$lang = 'en';
$pageKey = 'soft';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Alcohol-Free Beverages – Brasserie Goudale</title>

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
  <link rel="stylesheet" href="/css/pages/soft/hero.css">
  <link rel="stylesheet" href="/css/pages/soft/cta.css">
</head>

<body>
  <div class="page-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/button.php'; ?>

    <main class="site-main">

      <!-- ===================== SOFT HERO ===================== -->
      <section class="soft-hero">
        <div class="soft-hero__inner">
          <h1 class="soft-hero__title">SOFT</h1>
          <p class="soft-hero__text">
            From energy drinks to cola and lemonade, <br> Brasserie de Saint-Omer accompanies you in your <br> alcohol-free beverage project
        </p>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/scroll-indicator.php'; ?>
      </section>
      <!-- ===================== END SOFT HERO ===================== -->

      <!-- ===================== GALERIE FULLSCREEN ===================== -->
      <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/fullscreen-gallery.php';

        $slides = [
          [
            'title' => 'Energy drinks',
            'subtitle' => 'BOTTLES AND ALUMINUM CANS',
            'image' => '/assets/img/soft/energydrinks.png'
          ],
          [
            'title' => 'Lemonade',
            'subtitle' => 'BOTTLES AND ALUMINUM CANS',
            'image' => '/assets/img/soft/limo.png'
          ],
          [
            'title' => 'Cola',
            'subtitle' => 'BOTTLES AND ALUMINUM CANS',
            'image' => '/assets/img/soft/cola.png'
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
          <p class="section-kicker">ALCOHOL-FREE BEVERAGES</p>
          <h2 class="section-title">
            Your drinks<br>
            <span>customized</span>
          </h2>
        </div>

        <main class="site-main">
      <?php
        include $_SERVER['DOCUMENT_ROOT'].'/includes/pack-callouts.php';

        render_pack_callouts([
          'imgSrc' => '/assets/img/Index/canette.svg',
          'imgAlt' => 'Customized beverages',
          'left' => [
            'title' => 'Your recipe',
            'text'  => 'Cola, lemonade, energy drink, sparkling water... choose the recipe suited to your brand and your customers.'
          ],
          'rightTop' => [
            'title' => 'Your formats',
            'text'  => 'Aluminum cans or glass bottles, packs or trays, cardboard or film.'
          ],
          'rightBottom' => [
            'title' => 'Your design',
            'text'  => 'Packaging with your brand, your logo, your colors for a beverage in your image.'
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
            'href' => '/fr/contact.php',
            'text' => 'Contact',
            'variant' => 'cta',
            'icon_left' => true,
          ]); ?>
        </section>
      </div>
    </section>
    <!-- ===================== END PACK CALLOUTS ===================== -->


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
