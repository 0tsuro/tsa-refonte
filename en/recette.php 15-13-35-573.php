<?php
$lang = 'en';
$pageKey = 'recette';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Our Recipes – Brasserie Goudale</title>

  <link rel="stylesheet" href="/css/00-reset.css">
  <link rel="stylesheet" href="/css/01-variables.css">
  <link rel="stylesheet" href="/css/02-base.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <link rel="stylesheet" href="/css/components/navbar.css">
  <link rel="stylesheet" href="/css/components/footer.css">
  <link rel="stylesheet" href="/css/components/age-gate.css">
  <link rel="stylesheet" href="/css/components/reveal.css">
  <link rel="stylesheet" href="/css/pages/recette/recette.css">
</head>

<body>
  <div class="page-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/button.php'; ?>

    <main class="site-main">

      <!-- ===================== SECTION RECIPE / TIMELINE ===================== -->
      <section class="recette-section" aria-label="Our recipes">
    <div class="container">
        <header class="hero">
            <h1>Our <span>Recipes.</span></h1>
            <p>An infinite diversity of flavors for the pleasure of your <br> consumers.</p>
        </header>

        <div class="timelineRail" aria-hidden="true"></div>

        <!-- ITEM 1 -->
        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>Beer <span class="timeline-number">Lager</span></h2>
                    <p>
                        2 - 8% Alc. <br>
                        Malt/Corn or Pure Malt
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 2 -->
        <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>Abbey <span class="timeline-number">Beer</span></h2>
                    <p>
                        6.2% Alc. - Blonde or Amber
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 3 -->
        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>Specialty <span class="timeline-number">Beer</span></h2>
                    <p>
                        - Blonde or Brown <br>
                        - IPA / NEIPA <br>
                        - Dry Hopping <br>
                        - Triple Blonde and Brown <br>
                        - Stout
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 4 -->
        <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>Flavored Blonde <span class="timeline-number">Beer</span></h2>
                    <p>
                        Agave Spirits / Red / Rum / Vodka / Mojito
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 5 -->
        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>White <span class="timeline-number">Beer</span></h2>
                    <p>
                        Classic or Flavored (Raspberry, Peach, Cherry...)
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 6 -->
        <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>Gluten-Free <span class="timeline-number">Beer</span></h2>
                    <p>
                        Gluten-free and/or Organic Beer.
                    </p>
                </div>
            </div>
        </article>

        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>Shandy<span class="timeline-number"></span></h2>
                    <p>
                        < 0.5% Alc. <br>
                        Classic or Flavored (Raspberry, Peach, Cherry...)
                    </p>
                </div>
            </div>
        </article>

        <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>Alcohol-Free <span class="timeline-number">Beer</span></h2>
                    <p>
                        Classic or Flavored
                    </p>
                </div>
            </div>
        </article>
    </div>

    <button class="toTop" id="toTop" type="button" aria-label="Go to top">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>
      </section>
      <!-- ===================== END SECTION RECIPE / TIMELINE ===================== -->

      <!-- ===================== RECIPE CTA SECTION ===================== -->
      <section class="recette-cta">
        <div class="recette-cta__inner">
          <div class="recette-cta__content">
            <h2 class="recette-cta__title">Want your own style? <br> Contact us</h2>
            <p class="recette-cta__subtitle">Our team will advise you on the <br> recipe best suited to your needs.</p>
            
            <div class="recette-cta__actions">
              <?php render_button([
                'href' => '/fr/contact.php',
                'text' => 'Contact',
                'variant' => 'cta',
                'icon_right' => true,
              ]); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- ===================== END RECIPE CTA SECTION ===================== -->

    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    <script src="/js/main.js"></script>
    <script src="/js/timeline-section.js"></script>
  </div>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/age-gate.php'; ?>
  <script src="/js/navbar.js"></script>
  <script src="/js/age-gate.js"></script>
  <script src="/js/reveal.js"></script>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/global-scripts.php'; ?>
</body>
</html>
