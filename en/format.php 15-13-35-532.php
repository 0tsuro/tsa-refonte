<?php
$lang = 'en';
$pageKey = 'formats';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Our Formats – Brasserie Goudale</title>

  <link rel="stylesheet" href="/css/00-reset.css">
  <link rel="stylesheet" href="/css/01-variables.css">
  <link rel="stylesheet" href="/css/02-base.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <link rel="stylesheet" href="/css/components/navbar.css">
  <link rel="stylesheet" href="/css/components/footer.css">
  <link rel="stylesheet" href="/css/components/age-gate.css">
  <link rel="stylesheet" href="/css/components/reveal.css">
  <link rel="stylesheet" href="/css/pages/format/format.css">
  <link rel="stylesheet" href="/css/pages/bieres-canette-alu/cta.css">
</head>

<body>
  <div class="page-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/button.php'; ?>

    <main class="site-main">

      <!-- ===================== FORMAT HERO SECTION ===================== -->
      <section class="format-hero">
        <div class="format-hero__inner">
          <div class="format-hero__kicker">Our Formats</div>
          <h1 class="format-hero__title">A wide variety of formats <br> according to your needs</h1>
          <p class="format-hero__subtitle">Our brewery was founded in 1919 in Douai. 100 years later, we are still a family-owned and independent company. Our employees work every day to keep this traditional expertise alive and to innovate to create new flavors.</p>
          
          <div class="format-hero__actions">
            <?php render_button([
              'href' => '/fr/contact.php',
              'text' => 'Contact Us',
              'variant' => 'gold',
              'icon_left' => true,
            ]); ?>
          </div>
        </div>
      </section>
      <!-- ===================== END FORMAT HERO SECTION ===================== -->

      <!-- ===================== FORMAT CAROUSEL ===================== -->
      <section class="format-carousel">
        <div class="carousel-track">
          <?php
            // Array of format images
            $formatImages = [
              [
                'src' => '/assets/img/formats/canette.jpg',
                'alt' => 'Aluminum Can',
              ],
              [
                'src' => '/assets/img/formats/bouteille.jpg',
                'alt' => 'Glass Bottle',
              ],
              [
                'src' => '/assets/img/formats/pack.jpg',
                'alt' => 'Pack',
              ],
              [
                'src' => '/assets/img/formats/fut.jpg',
                'alt' => 'Keg',
              ],
              [
                'src' => '/assets/img/formats/cartonnette.jpg',
                'alt' => 'Carton',
              ],
              [
                'src' => '/assets/img/formats/film.jpg',
                'alt' => 'Film',
              ],
            ];
            
            // Triple the sequence for infinite effect
            $imagesToShow = array_merge($formatImages, $formatImages, $formatImages);
            foreach ($imagesToShow as $img) {
              echo '<img class="carousel__img carousel__img--md" src="' . $img['src'] . '" alt="' . htmlspecialchars($img['alt']) . '">';
            }
          ?>
        </div>
      </section>
      <!-- ===================== END FORMAT CAROUSEL ===================== -->

      <!-- ===================== FORMAT TYPES SECTION ===================== -->
      <section class="format-types">
        <div class="format-types__inner">
          <div class="format-types__header">
            <div class="format-types__kicker">Types</div>
            <h2 class="format-types__title">Aluminum Cans</h2>
          </div>
          
          <div class="format-types__grid">
            <div class="format-types__item">
              <img draggable="false" class="format-types__image" src="/assets/img/format/33cl.png" alt="Aluminum Cans 1">
              <h3 class="format-types__title-variant">33cl</h3>
            </div>
            <div class="format-types__item">
              <img draggable="false" class="format-types__image" src="/assets/img/format/44cl.png" alt="Aluminum Cans 2">
              <h3 class="format-types__title-variant">44cl</h3>
            </div>
            <div class="format-types__item">
              <img draggable="false" class="format-types__image" src="/assets/img/format/50cl.png" alt="Aluminum Cans 3">
              <h3 class="format-types__title-variant">50cl</h3>
            </div>
          </div>
        </div>
      </section>
      <!-- ===================== END FORMAT TYPES SECTION ===================== -->

      <!-- ===================== FORMAT PACKAGING SECTION ===================== -->
      <section class="format-packaging">
        <div class="format-packaging__inner">
          <div class="format-packaging__header">
            <h2 class="format-packaging__title">Packaging <br> <span>Aluminum Cans</span></h2>
          </div>

          <div class="format-packaging__divider"></div>

          <div class="format-packaging__image-wrapper">
            <img draggable="false" class="format-packaging__image" src="/assets/img/format/canettesalu.png" alt="Aluminum Cans Packaging">
          </div>
        </div>
      </section>
      <!-- ===================== END FORMAT PACKAGING SECTION ===================== -->

      <!-- ===================== FORMAT IMAGES SECTION ===================== -->
      <section class="format-images-section">
        <div class="format-images-section__inner">
          <div class="format-images-section__header">
            <div class="format-images-section__kicker">Our Formats</div>
            <h2 class="format-images-section__title">Discover our <span>bottles</span></h2>
            <p class="format-images-section__subtitle">A selection of our different formats and bottle styles available</p>
          </div>
          <div class="format-images-section__grid">
            <div class="format-images-section__item">
              <img draggable="false" src="/assets/img/format/bouteille1.png" alt="Format 1">
            </div>
            <div class="format-images-section__item">
              <img draggable="false" src="/assets/img/format/bouteille2.png" alt="Format 2">
            </div>
            <div class="format-images-section__item">
              <img draggable="false" src="/assets/img/format/bouteille3.png" alt="Format 3">
            </div>
            <div class="format-images-section__item">
              <img draggable="false" src="/assets/img/format/bouteille4.png" alt="Format 4">
            </div>
            <div class="format-images-section__item">
              <img draggable="false" src="/assets/img/format/bouteille5.png" alt="Format 4">
            </div>
          </div>
        </div>
      </section>
      <!-- ===================== END FORMAT IMAGES SECTION ===================== -->

      <!-- ===================== FORMAT PACKAGING BOUTEILLES SECTION ===================== -->
      <section class="format-packaging">
        <div class="format-packaging__inner">
          <div class="format-packaging__header">
            <h2 class="format-packaging__title">Packaging <br> <span>Bottles</span></h2>
          </div>

          <div class="format-packaging__divider"></div>

          <div class="format-packaging__image-wrapper">
            <img class="format-packaging__image" src="/assets/img/format/packagingbouteilles.png" alt="Bottles Packaging">
          </div>
        </div>
      </section>
      <!-- ===================== END FORMAT PACKAGING BOUTEILLES SECTION ===================== -->

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

    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
  </div>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/age-gate.php'; ?>
  <script src="/js/navbar.js"></script>
  <script src="/js/age-gate.js"></script>
  <script src="/js/reveal.js"></script>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/global-scripts.php'; ?>
</body>
</html>
