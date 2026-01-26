<?php
$lang = 'en';
$pageKey = 'commitments';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Our Commitment – Brasserie Goudale</title>

  <link rel="stylesheet" href="/css/00-reset.css">
  <link rel="stylesheet" href="/css/01-variables.css">
  <link rel="stylesheet" href="/css/02-base.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <link rel="stylesheet" href="/css/components/navbar.css">
  <link rel="stylesheet" href="/css/components/footer.css">
  <link rel="stylesheet" href="/css/components/age-gate.css">
  <link rel="stylesheet" href="/css/components/reveal.css">
  <link rel="stylesheet" href="/css/components/scroll-indicator.css">
  <link rel="stylesheet" href="/css/pages/engagement/engagement.css">
  <link rel="stylesheet" href="/css/pages/index/timeline-section.css">
  <link rel="stylesheet" href="/css/pages/index/engagement-section.css">
  <link rel="stylesheet" href="/css/pages/bieres-canette-alu/cta.css">
</head>

<body>
  <div class="page-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/button.php'; ?>

    <main class="site-main">

      <!-- ===================== ENGAGEMENT HERO SECTION ===================== -->
      <section class="engagement-hero">
        <img class="engagement-hero__bg" src="/assets/img/houblon.png" alt="Our commitment" />
        <div class="engagement-hero__overlay" aria-hidden="true"></div>

        <div class="engagement-hero__inner">
          <div class="engagement-hero__content">
            <h1 class="engagement-hero__title">Our Commitments</h1>
            <p class="engagement-hero__subtitle">TOWARDS NEW MODES OF BEER PRODUCTION AND CONSUMPTION.</p>
            <p class="engagement-hero__description">For a long time, our craft has gone far beyond the manufacturing of our beers. We are committed every day to preserving the environment and we are proud of our local presence. The well-being of our employees at work is also a priority because our beers are nothing without their work and passion.</p>
          </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/scroll-indicator.php'; ?>
      </section>
      <!-- ===================== END ENGAGEMENT HERO SECTION ===================== -->

      <!-- ===================== ENGAGEMENT TIMELINE SECTION ===================== -->
      <section class="timeline" aria-label="Commitment timeline">
        <div class="container">
          <div class="timeline-header">
            <div class="timeline-header__kicker">COMMITMENT</div>
            <h2 class="timeline-header__title">Sustainable control of <br> our production </h2>
          </div>

          <div class="timelineRail" aria-hidden="true"></div>

          <!-- TIMELINE ITEM 1 -->
          <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
              <div class="cardTop">
                <div class="imgWrap">
                  <img src="/assets/img/environnement/consoeau.png" alt="Environmental sustainability" loading="lazy" />
                </div>
                <div class="date">Sustainability</div>
              </div>

              <div class="cardBody">
                <div class="cardBody__kicker">Water consumption</div>
                <h2>Caring for water, the most precious resource for a brewer. We are implementing innovative solutions to reduce our consumption and protect this essential resource for future generations.</h2>
                <p>From brewing for beer production to packaging with bottle and keg washing, water is essential to our craft. In 10 years, we have reduced our consumption by 3. Today we need only 3 liters of water to produce 1 liter of beer compared to 4 liters on average in other European breweries.</p>
              </div>
            </div>
          </article>

          <!-- TIMELINE ITEM 2 -->
          <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
              <div class="cardTop">
                <div class="imgWrap">
                  <img src="/assets/img/environnement/traitement.png" alt="Premium quality" loading="lazy" />
                </div>
                <div class="date">Water treatment</div>
              </div>

              <div class="cardBody">
                <div class="cardBody__kicker">Water treatment</div>
                <h2>Purifying our wastewater by producing BioGas.</h2>
                <p>To treat and purify the wastewater from our brewery, we have our own treatment plant. We produce biomethane from the water treatment process. This biogas is then reinjected into the GRDF network.</p>
              </div>
            </div>
          </article>

          <!-- TIMELINE ITEM 3 -->
          <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
              <div class="cardTop">
                <div class="imgWrap">
                  <img src="/assets/img/environnement/station.png" alt="Our employees" loading="lazy" />
                </div>
                <div class="date">Station</div>
              </div>

              <div class="cardBody">
                <div class="cardBody__kicker">CO2 recovery</div>
                <h2>100% self-sufficiency in CO2.</h2>
                <p>Beer fermentation produces CO2. To avoid releasing it to the outside, we capture and store it in liquid form. It is then reused for beer saturation when bottled.</p>
              </div>
            </div>
          </article>

          <!-- TIMELINE ITEM 4 -->
          <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
              <div class="cardTop">
                <div class="imgWrap">
                  <img src="/assets/img/environnement/grappe.png" alt="Community engagement" loading="lazy" />
                </div>
                <div class="date">Community</div>
              </div>

              <div class="cardBody">
                <div class="cardBody__kicker">Energy savings</div>
                <h2>Improving our energy efficiency.</h2>
                <p>We monitor our energy consumption monthly to limit our impact. The implementation of numerous energy recovery systems allows us today to be among the best in our industry with gas and electricity needs about 15% lower than the average.</p>
              </div>
            </div>
          </article>
        </div>
      </section>
      <!-- ===================== END ENGAGEMENT TIMELINE SECTION ===================== -->

      <!-- ===================== ENGAGEMENT CTA SECTION ===================== -->
      <section class="engagement-cta">
        <img class="engagement-cta__bg" src="/assets/img/environnement/packs.png" alt="Brasserie Goudale commitment" />
        <div class="engagement-cta__overlay" aria-hidden="true"></div>

        <div class="engagement-cta__inner">
          <div class="engagement-cta__content">
            <div class="engagement-cta__kicker">WASTE</div>
            <h2 class="engagement-cta__title">Eliminate disposable <br> packaging from our products.</h2>
            <p class="engagement-cta__description">100% of our kegs are returnable, washed and filled at the Brewery. We are participating in the reintroduction of glass bottle returns. For packaging that still requires it, we use 50 and 70% recycled plastics. Finally, we replace cork caps that are not very recyclable with 100% recyclable capsules.</p>
          </div>
        </div>
      </section>
      <!-- ===================== END ENGAGEMENT CTA SECTION ===================== -->

      <!-- ===================== SECTION ENGAGEMENTS ===================== -->
      <section class="engagement-section">
        <div class="engagement-container">
          <div class="engagement-content">
            <div class="engagement-badge">SOCIAL</div>
            <h2 class="engagement-title">
              Act together for<br><span class="gold-text">Committed to our employees</span>
            </h2>
            <p class="engagement-description">
              We are a family-owned and independent company. This translates into management and human relationships that allow us to take care of everyone. All profits remain in the company and are reinvested every year.
            </p>
            <a href="/en/contact.php" class="engagement-btn">
              Join us
              <span class="btn__icon btn__icon--right">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="currentColor">
                  <path d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" transform="rotate(-180 5.02 9.505)"/>
                </svg>
              </span>
            </a>
          </div>

          <div class="engagement-images">
            <div class="engagement-image-card">
              <h3 class="engagement-image-title">Reduction of our water and energy consumption</h3>
              <img src="/assets/img/Index/triplette ecologie/Brasserie de Saint-Omer4.jpg" alt="Ecology commitment 1" loading="lazy">
            </div>
            <div class="engagement-image-card">
              <h3 class="engagement-image-title">Valorization of our waste</h3>
              <img src="/assets/img/Index/triplette ecologie/Brasserie de Saint-Omer9.jpg" alt="Ecology commitment 2" loading="lazy">
            </div>
            <div class="engagement-image-card">
              <h3 class="engagement-image-title">Reduction of our packaging</h3>
              <img src="/assets/img/Index/triplette ecologie/Brasserie de Saint-Omer19.jpg" alt="Ecology commitment 3" loading="lazy">
            </div>
          </div>
        </div>
      </section>
      <!-- ===================== END SECTION ENGAGEMENTS ===================== -->

    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
  </div>

  <script src="/js/timeline-section.js"></script>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/age-gate.php'; ?>
  <script src="/js/navbar.js"></script>
  <script src="/js/age-gate.js"></script>
  <script src="/js/reveal.js"></script>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/global-scripts.php'; ?>
</body>
</html>
