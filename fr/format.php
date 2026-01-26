<?php
$lang = 'fr';
$pageKey = 'formats';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nos Formats – Brasserie Goudale</title>

  <link rel="stylesheet" href="../css/00-reset.css">
  <link rel="stylesheet" href="../css/01-variables.css">
  <link rel="stylesheet" href="../css/02-base.css">
  <link rel="stylesheet" href="../css/components/button.css">
  <link rel="stylesheet" href="../css/components/navbar.css">
  <link rel="stylesheet" href="../css/components/footer.css">
  <link rel="stylesheet" href="../css/components/age-gate.css">
  <link rel="stylesheet" href="../css/components/reveal.css">
  <link rel="stylesheet" href="../css/pages/format/format.css">
  <link rel="stylesheet" href="../css/pages/bieres-canette-alu/cta.css">
</head>

<body>
  <div class="page-wrapper">
    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/button.php'; ?>

    <main class="site-main">

      <!-- ===================== FORMAT HERO SECTION ===================== -->
      <section class="format-hero">
        <div class="format-hero__inner">
          <div class="format-hero__kicker">Nos Formats</div>
          <h1 class="format-hero__title">Une grande diversité de format <br> selon votre besoin</h1>
          <p class="format-hero__subtitle">Notre brasserie a été fondée en 1919 à Douai. 100 ans plus tard, nous sommes toujours une entreprise familiale et indépendante. Nos collaborateurs travaillent chaque jour à faire vivre ce savoir-faire traditionnel et à innover pour faire naître de nouvelles saveurs.</p>
          
          <div class="format-hero__actions">
            <?php render_button([
              'href' => '/fr/contact.php',
              'text' => 'Contactez-nous',
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
            // Tableau des images de formats
            $formatImages = [
              [
                'src' => '/assets/img/formats/canette.jpg',
                'alt' => 'Canette Aluminium',
              ],
              [
                'src' => '/assets/img/formats/bouteille.jpg',
                'alt' => 'Bouteille Verre',
              ],
              [
                'src' => '/assets/img/formats/pack.jpg',
                'alt' => 'Pack',
              ],
              [
                'src' => '/assets/img/formats/fut.jpg',
                'alt' => 'Fût',
              ],
              [
                'src' => '/assets/img/formats/cartonnette.jpg',
                'alt' => 'Cartonnette',
              ],
              [
                'src' => '/assets/img/formats/film.jpg',
                'alt' => 'Film',
              ],
            ];
            
            // Tripler la séquence pour effet infini
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
            <h2 class="format-types__title">Canettes Alu</h2>
          </div>
          
          <div class="format-types__grid">
            <div class="format-types__item">
              <img draggable="false" class="format-types__image" src="/assets/img/format/33cl.png" alt="Canettes Alu 1">
              <h3 class="format-types__title-variant">33cl</h3>
            </div>
            <div class="format-types__item">
              <img draggable="false" class="format-types__image" src="/assets/img/format/44cl.png" alt="Canettes Alu 2">
              <h3 class="format-types__title-variant">44cl</h3>
            </div>
            <div class="format-types__item">
              <img draggable="false" class="format-types__image" src="/assets/img/format/50cl.png" alt="Canettes Alu 3">
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
            <h2 class="format-packaging__title">Packaging <br> <span>Canettes Alu</span></h2>
          </div>

          <div class="format-packaging__divider"></div>

          <div class="format-packaging__image-wrapper">
            <img draggable="false" class="format-packaging__image" src="/assets/img/format/canettesalu.png" alt="Packaging Canettes Alu">
          </div>
        </div>
      </section>
      <!-- ===================== END FORMAT PACKAGING SECTION ===================== -->

      <!-- ===================== FORMAT IMAGES SECTION ===================== -->
      <section class="format-images-section">
        <div class="format-images-section__inner">
          <div class="format-images-section__header">
            <div class="format-images-section__kicker">Nos Formats</div>
            <h2 class="format-images-section__title">Découvrez nos <span>bouteilles</span></h2>
            <p class="format-images-section__subtitle">Une sélection de nos différents formats et styles de bouteilles disponibles</p>
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
            <h2 class="format-packaging__title">Packaging <br> <span>Bouteilles</span></h2>
          </div>

          <div class="format-packaging__divider"></div>

          <div class="format-packaging__image-wrapper">
            <img class="format-packaging__image" src="/assets/img/format/packagingbouteilles.png" alt="Packaging Bouteilles">
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
            <h2 class="canettes-alu-cta__title">Découvrez les bières de spécialités <br> de la Brasserie goudale</h2>
            <p class="canettes-alu-cta__subtitle">Laissez-vous porter par la magie des bières de spécialités.</p>
            
            <div class="canettes-alu-cta__actions">
              <?php render_button([
                'href' => '/fr/recette.php',
                'text' => 'Découvrir nos bières de spécialités',
                'variant' => 'gold',
                'icon_left' => true,
              ]); ?>

              <?php render_button([
                'href' => 'https://brasserie-goudale.com',
                'text' => 'Visiter la brasserie',
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
