<?php
$lang = 'en';
$pageKey = 'draft';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Draft Beer – Brasserie Goudale</title>

  <link rel="stylesheet" href="/css/00-reset.css">
  <link rel="stylesheet" href="/css/01-variables.css">
  <link rel="stylesheet" href="/css/02-base.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <link rel="stylesheet" href="/css/components/navbar.css">
  <link rel="stylesheet" href="/css/components/footer.css">
  <link rel="stylesheet" href="/css/components/age-gate.css">
  <link rel="stylesheet" href="/css/components/reveal.css">
  <link rel="stylesheet" href="/css/components/scroll-indicator.css">
  <link rel="stylesheet" href="/css/pages/pression/pression.css">
  <link rel="stylesheet" href="/css/pages/bieres-canette-alu/cta.css">
</head>

<body>
  <div class="page-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/button.php'; ?>

    <main class="site-main">

      <!-- ===================== PRESSION HERO SECTION ===================== -->
      <section class="pression-hero">
        <img class="pression-hero__bg" src="/assets/img/houblon.png" alt="Draft beer" />
        <div class="pression-hero__overlay" aria-hidden="true"></div>

        <div class="pression-hero__inner">
          <div class="pression-hero__content">
            <h1 class="pression-hero__title">True draft beer</h1>
            <p class="pression-hero__subtitle">DISCOVER OUR HRI BEER OFFER</p>
            <p class="pression-hero__description">The Brasserie de Saint-Omer and Brasserie Goudale offer high-quality beers. In both lager categories and specialty beers, thanks to our 100-year-old expertise.</p>
          </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/scroll-indicator.php'; ?>
      </section>
      <!-- ===================== END PRESSION HERO SECTION ===================== -->

      <!-- ===================== PRESSION CAROUSEL SECTION ===================== -->
      <section class="pression-carousel-section">
        <div class="pression-carousel-section__inner">
          <div class="pression-carousel-section__header">
            <div class="pression-carousel-section__kicker">THE HRI SPECIALIST</div>
            <h2 class="pression-carousel-section__title"><span>1,000,000</span> barrels</h2>
            <p class="pression-carousel-section__description">Our Brewery has one of the largest barrel parks in France to guarantee optimal service rate. Thanks to controlled rotation, you benefit from a season without shortage and reliable supply, to meet your needs with peace of mind.</p>
          </div>
        </div>
      </section>

      <!-- ===================== CAROUSEL ===================== -->
      <section class="pression-carousel">
        <div class="carousel-track">
          <?php
            // Array of draft beer images
            $pressionImages = [
              [
                'src' => '/assets/img/pression/biere1.jpg',
                'alt' => 'Beer 1 on draft',
              ],
              [
                'src' => '/assets/img/pression/biere2.jpg',
                'alt' => 'Beer 2 on draft',
              ],
              [
                'src' => '/assets/img/pression/biere3.jpg',
                'alt' => 'Beer 3 on draft',
              ],
              [
                'src' => '/assets/img/pression/biere4.jpg',
                'alt' => 'Beer 4 on draft',
              ],
              [
                'src' => '/assets/img/pression/biere5.jpg',
                'alt' => 'Beer 5 on draft',
              ],
              [
                'src' => '/assets/img/pression/biere6.jpg',
                'alt' => 'Beer 6 on draft',
              ],
            ];
            
            // Triple the sequence for infinite effect
            $imagesToShow = array_merge($pressionImages, $pressionImages, $pressionImages);
            foreach ($imagesToShow as $img) {
              echo '<img class="carousel__img carousel__img--md" src="' . $img['src'] . '" alt="' . htmlspecialchars($img['alt']) . '">';
            }
          ?>
        </div>
      </section>
      <!-- ===================== END CAROUSEL ===================== -->

      <!-- ===================== PRESSION COLLECTION SECTION 1 ===================== -->
      <section class="pression-collection">
        <div class="pression-collection__inner">
          <h2 class="pression-collection__title">
            Range <br>
            <span>Luxury and specialty Blonde</span>
          </h2>

          <div class="pression-collection__divider"></div>

          <div class="pression-collection__grid">
            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 1">
              </div>
              <h3 class="pression-collection__item-title">Saint-Omer</h3>
              <p class="pression-collection__item-subtitle">4.7% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 2">
              </div>
              <h3 class="pression-collection__item-title">Saint-Omer Premium</h3>
              <p class="pression-collection__item-subtitle">5.5% Alc.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="pression-collection pression-collection--4cols">
        <div class="pression-collection__inner">
          <h2 class="pression-collection__title">
            Range <br>
            <span>Brasserie Goudale</span>
          </h2>

          <div class="pression-collection__divider"></div>

          <div class="pression-collection__grid">
            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 1">
              </div>
              <h3 class="pression-collection__item-title">Goudale Blonde</h3>
              <p class="pression-collection__item-subtitle">7.2% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 2">
              </div>
              <h3 class="pression-collection__item-title">Goudale Amber</h3>
              <p class="pression-collection__item-subtitle">7.2% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 3">
              </div>
              <h3 class="pression-collection__item-title">G de Goudale</h3>
              <p class="pression-collection__item-subtitle">7.9% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 4">
              </div>
              <h3 class="pression-collection__item-title">Goudale Ruby</h3>
              <p class="pression-collection__item-subtitle">5.0% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 5">
              </div>
              <h3 class="pression-collection__item-title">Goudale IPA</h3>
              <p class="pression-collection__item-subtitle">7.2% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 6">
              </div>
              <h3 class="pression-collection__item-title">Goudale White</h3>
              <p class="pression-collection__item-subtitle">4.5% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 7">
              </div>
              <h3 class="pression-collection__item-title">Goudale Hop Lager</h3>
              <p class="pression-collection__item-subtitle">5.2% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Prestige beer 8">
              </div>
              <h3 class="pression-collection__item-title">Goudale Circus</h3>
              <p class="pression-collection__item-subtitle">9.0% Alc.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== PRESSION COLLECTION SECTION 3 ===================== -->
      <section class="pression-collection">
        <div class="pression-collection__inner">
          <h2 class="pression-collection__title">
            Range <br>
            <span>Triple Secret of the Monks</span>
          </h2>

          <div class="pression-collection__divider"></div>

          <div class="pression-collection__grid">
            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Non-alcoholic beer 1">
              </div>
              <h3 class="pression-collection__item-title">Triple Secret of the Monks Blonde</h3>
              <p class="pression-collection__item-subtitle">8.0% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Non-alcoholic beer 2">
              </div>
              <h3 class="pression-collection__item-title">Triple Secret of the Monks Brown</h3>
              <p class="pression-collection__item-subtitle">8.0% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Non-alcoholic beer 3">
              </div>
              <h3 class="pression-collection__item-title">Triple Secret of the Monks Red</h3>
              <p class="pression-collection__item-subtitle">8.0% Alc.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== PRESSION COLLECTION SECTION 4 ===================== -->
      <section class="pression-collection pression-collection--4cols">
        <div class="pression-collection__inner">
          <h2 class="pression-collection__title">
            Range <br>
            <span>Original creations</span>
          </h2>

          <div class="pression-collection__divider"></div>

          <div class="pression-collection__grid">
            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Flavored beer 1">
              </div>
              <h3 class="pression-collection__item-title">La Raoul</h3>
              <p class="pression-collection__item-subtitle">7.0% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Flavored beer 2">
              </div>
              <h3 class="pression-collection__item-title">Hippy Juicy</h3>
              <p class="pression-collection__item-subtitle">5.5% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Flavored beer 3">
              </div>
              <h3 class="pression-collection__item-title">Saint-Landelin</h3>
              <p class="pression-collection__item-subtitle">6.5% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Flavored beer 4">
              </div>
              <h3 class="pression-collection__item-title">KingWood</h3>
              <p class="pression-collection__item-subtitle">10% Alc.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== PRESSION COLLECTION SECTION 5 ===================== -->
      <section class="pression-collection">
        <div class="pression-collection__inner">
          <h2 class="pression-collection__title">
            Ranges <br>
            <span>Flavored</span>
          </h2>

          <div class="pression-collection__divider"></div>

          <div class="pression-collection__grid">
            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Strong beer 1">
              </div>
              <h3 class="pression-collection__item-title">Belzebuth Raspberry</h3>
              <p class="pression-collection__item-subtitle">2.8% Alc.</p>
            </div>

            <div class="pression-collection__item">
              <div class="pression-collection__image-wrapper">
                <img class="pression-collection__image" src="/assets/img/format/canettes.png" alt="Strong beer 2">
              </div>
              <h3 class="pression-collection__item-title">Sombrero</h3>
              <p class="pression-collection__item-subtitle">5.5% Alc.</p>
            </div>
          </div>
        </div>
      </section>

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
