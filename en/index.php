<?php
  $lang = 'en';
  $pageKey = 'home';
  require_once('../includes/load-env.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Brasserie Goudale – Saint-Omer</title>

  <link rel="stylesheet" href="../css/00-reset.css">
  <link rel="stylesheet" href="../css/01-variables.css">
  <link rel="stylesheet" href="../css/02-base.css">
  <link rel="stylesheet" href="../css/components/button.css">
  <link rel="stylesheet" href="../css/components/navbar.css">
  <link rel="stylesheet" href="../css/components/footer.css">
  <link rel="stylesheet" href="../css/components/reveal.css">
  <link rel="stylesheet" href="../css/components/scroll-indicator.css">
  <link rel="stylesheet" href="../css/pages/index/hero.css">
  <link rel="stylesheet" href="../css/pages/index/pack-callouts-section.css">
  <link rel="stylesheet" href="../css/pages/index/beers-gallery.css">
  <link rel="stylesheet" href="../css/pages/index/recipes-gallery.css">
  <link rel="stylesheet" href="../css/pages/index/citation-section.css">
  <link rel="stylesheet" href="../css/pages/index/brasserie-section.css">
  <link rel="stylesheet" href="../css/pages/index/timeline-section.css">
  <link rel="stylesheet" href="../css/pages/index/engagement-section.css">
</head>

<body>
  <div class="page-wrapper">
    <?php include('../includes/navbar.php'); ?>
    <main class="site-main">

      <!-- ===================== HERO ===================== -->
      <section class="hero">
        <img class="hero__bg" src="../assets/img/Index/HeroMain.jpg" alt="Brasserie Saint-Omer" />
        <div class="hero__overlay" aria-hidden="true"></div>
        <div class="hero__bottomFade" aria-hidden="true"></div>

        <div class="hero__inner">
          <div class="hero__content">
            <h1 class="hero__title">Since 1866</h1>
            <p class="hero__subtitle">French, family-owned and independent brewery.</p>

            <div class="hero__actions">
              <a href="https://brasserie-goudale.com" class="btn btn--gold">
    <span class="btn__icon btn__icon--left" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="currentColor">
    <path d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" transform="rotate(-180 5.02 9.505)"/>
  </svg></span>
    <span>Visit the brewery</span>
    
  </a>
              <a href="../en/bieres-canette-alu.php" class="btn btn--ghost">
    
    <span>Discover our brands</span>
    <span class="btn__icon btn__icon--right" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="currentColor">
    <path d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" transform="rotate(-180 5.02 9.505)"/>
  </svg></span>
  </a>            </div>

          </div>
        </div>
        <div class="scroll-indicator">
  <span class="scroll-indicator__text">Scroll</span>
  <div class="scroll-indicator__line"></div>
</div>
      </section>

      <!-- ===================== BEERS GALLERY ===================== -->
      <section class="beers-gallery">
        <div class="beers-gallery__inner">
          <div class="beers-gallery__head">
            <h2 class="beers-gallery__title">Our <span>beer</span> recipes</h2>
          </div>

          <div class="beers-gallery__divider"></div>

          <div class="beers-gallery__grid">
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/blonde.png" alt="Beer 1">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Lager</div>
                <div class="beers-gallery__subtitle">2 - 8%</div>
              </div>
            </div>
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/cuivrée.png" alt="Beer 2">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Abbey beer</div>
                <div class="beers-gallery__subtitle">> 7%</div>
              </div>
            </div>
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/Coca.png" alt="Beer 3">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Flavored</div>
                <div class="beers-gallery__subtitle">Red, raspberry, peach...</div>
              </div>
            </div>
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/Rouge.png" alt="Beer 4">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Stout</div>
                <div class="beers-gallery__subtitle"></div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- ===================== SECTION BRAND ===================== -->
<section class="section-brand">
  <div class="section-brand__inner">

    <!-- ✅ titles at top left -->
    <div class="brand-head">
      <p class="section-kicker">PRIVATE LABEL EXPERT</p>
      <h2 class="section-title">
        We brew your<br>
        <span>brand</span>
      </h2>
    </div>

      <div class="pack-callouts" role="group" aria-label="Pack callouts">

    <div class="pc__media" aria-hidden="true">
      <img class="pc__img"
           src="../assets/img/Index/canette.svg"
           alt="Customized cans">
    </div>

    <article class="pc__item pc__item--left">
      <h3 class="pc__title">Your recipe</h3>
      <span class="pc__divider" aria-hidden="true"></span>
      <p class="pc__text">Pils beer, premium, specialty, flavored... or soft drinks (cola, lemonade, energy drinks), choose the recipe that suits your needs.</p>
    </article>

    <article class="pc__item pc__item--rightTop">
      <h3 class="pc__title">Your formats</h3>
      <span class="pc__divider" aria-hidden="true"></span>
      <p class="pc__text">Aluminum cans or glass bottles, packs or trays, cartons or film.</p>
    </article>

    <article class="pc__item pc__item--rightBottom">
      <h3 class="pc__title">Your design</h3>
      <span class="pc__divider" aria-hidden="true"></span>
      <p class="pc__text">Packaging with your brand, your logo, your colors for a product tailored to you.</p>
    </article>

  </div>

    <!-- ✅ CTA -->
    <section class="brand-cta" aria-label="Contact">
      <h3 class="brand-cta__title">
        Have a project in mind? <span>Contact us!</span>
      </h3>
      <p class="brand-cta__text">
        Our team will advise you on the offer best suited to your needs.
      </p>
      <a href="../en/contact.php" class="btn btn--cta">
    <span class="btn__icon btn__icon--left" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="currentColor">
    <path d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" transform="rotate(-180 5.02 9.505)"/>
  </svg></span>
    <span>Contact</span>
    
  </a>    </section>

  </div>
</section>

      <!-- ===================== BEERS GALLERY ===================== -->
      <section class="beers-gallery">
        <div class="beers-gallery__inner">
          <div class="beers-gallery__head">
            <h2 class="beers-gallery__title">Our <span>beer</span> recipes</h2>
          </div>

          <div class="beers-gallery__divider"></div>

          <div class="beers-gallery__grid">
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/blonde.png" alt="Beer 1">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Lager</div>
                <div class="beers-gallery__subtitle">2 - 8%</div>
              </div>
            </div>
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/cuivrée.png" alt="Beer 2">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Abbey beer</div>
                <div class="beers-gallery__subtitle">> 7%</div>
              </div>
            </div>
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/Coca.png" alt="Beer 3">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Flavored</div>
                <div class="beers-gallery__subtitle">Red, raspberry, peach...</div>
              </div>
            </div>
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/Rouge.png" alt="Beer 4">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Stout</div>
                <div class="beers-gallery__subtitle"></div>
              </div>
            </div>
            <a href="../en/recette.php" class="beers-gallery__item beers-gallery__item--cta">
              <img src="../assets/img/Index/recettes/stout.png" alt="Beer 5">
              <span class="beers-gallery__overlay-text">Discover all our<br>recipes</span>
            </a>
          </div>
        </div>
      </section>

      <!-- ===================== RECIPES GALLERY ===================== -->
      <section class="recipes-gallery">
        <div class="recipes-gallery__inner">
          <div class="recipes-gallery__head">
            <h2 class="recipes-gallery__title">Our <span>beer</span> recipes</h2>
          </div>

          <div class="recipes-gallery__divider"></div>

          <div class="recipes-gallery__grid">
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/Index/recettes/blonde.png" alt="Beer 1">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Lager</div>
                <div class="recipes-gallery__subtitle">2 - 8%</div>
              </div>
            </div>
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/Index/recettes/cuivrée.png" alt="Beer 2">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Abbey beer</div>
                <div class="recipes-gallery__subtitle">> 7%</div>
              </div>
            </div>
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/Index/recettes/Coca.png" alt="Beer 3">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Flavored</div>
                <div class="recipes-gallery__subtitle">Red, raspberry, peach...</div>
              </div>
            </div>
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/Index/recettes/Rouge.png" alt="Beer 4">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Stout</div>
                <div class="recipes-gallery__subtitle"></div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- ===================== CITATION ANDRÉ PECQUEUR ===================== -->
      <section class="citation-section">
        <img class="citation-section__img" src="../assets/img/Index/pdgbrasserie.jpg" alt="André Pecqueur, CEO of Brasserie Goudale">
        <div class="citation-section__text">
          <span class="citation-section__quote">&laquo;</span><br>
          Our only boss here,<br>
          is the customer.<br>
          <span class="citation-section__author">- ANDRÉ PECQUEUR, CEO OF BRASSERIE GOUDALE</span>
        </div>
      </section>

      <!-- ===================== BRASSERIE SECTION ===================== -->
      <section class="brasserie-section">
        <div class="brasserie-section__inner">
          <div class="brasserie-section__kicker">The brewery</div>
          <h2 class="brasserie-section__title">Brewery <span>100%</span></h2>
          <div class="brasserie-section__desc">
            For over a century, Brasserie Goudale has perpetuated exceptional brewing expertise, combining tradition and innovation to offer unique and authentic beers.
          </div>
          <div class="brasserie-section__actions">
            <a href="https://brasserie-goudale.com" class="btn btn--gold">
    <span class="btn__icon btn__icon--left" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="currentColor">
    <path d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" transform="rotate(-180 5.02 9.505)"/>
  </svg></span>
    <span>Brasserie Goudale</span>
    
  </a>            <a href="https://brasserie-saint-omer.com" class="btn btn--tsa btn--tsa">
    
    <span>TSA</span>
    <span class="btn__icon btn__icon--right" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="currentColor">
    <path d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" transform="rotate(-180 5.02 9.505)"/>
  </svg></span>
  </a>          </div>
          <div class="brasserie-carousel">
            <div class="brasserie-carousel__track">
              <img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/2025_panneau%20solaire%20goudale-130.jpg" alt="Solar panel 130"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/2025_panneau%20solaire%20goudale-400.jpg" alt="Solar panel 400"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer3.jpg" alt="Brasserie de Saint-Omer 3"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer5.jpg" alt="Brasserie de Saint-Omer 5"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer8.jpg" alt="Brasserie de Saint-Omer 8"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer11.jpg" alt="Brasserie de Saint-Omer 11"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer16.jpg" alt="Brasserie de Saint-Omer 16"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/2025_panneau%20solaire%20goudale-130.jpg" alt="Solar panel 130"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/2025_panneau%20solaire%20goudale-400.jpg" alt="Solar panel 400"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer3.jpg" alt="Brasserie de Saint-Omer 3"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer5.jpg" alt="Brasserie de Saint-Omer 5"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer8.jpg" alt="Brasserie de Saint-Omer 8"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer11.jpg" alt="Brasserie de Saint-Omer 11"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer16.jpg" alt="Brasserie de Saint-Omer 16"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/2025_panneau%20solaire%20goudale-130.jpg" alt="Solar panel 130"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/2025_panneau%20solaire%20goudale-400.jpg" alt="Solar panel 400"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer3.jpg" alt="Brasserie de Saint-Omer 3"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer5.jpg" alt="Brasserie de Saint-Omer 5"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer8.jpg" alt="Brasserie de Saint-Omer 8"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer11.jpg" alt="Brasserie de Saint-Omer 11"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/Index/caroussel/Brasserie%20de%20Saint-Omer16.jpg" alt="Brasserie de Saint-Omer 16">            </div>
          </div>
        </div>
      </section>

      <!-- ===================== SECTION METIER / TIMELINE ===================== -->
      <section class="timeline" aria-label="Company timeline">
    <div class="container">
        <header class="hero">
            <div class="heroBadge">Our expertise</div>
            <h1>Our activity <br> <span>by the numbers</span></h1>

        </header>

        <div class="timelineRail" aria-hidden="true"></div>

        <!-- ITEM 2 (NEW) -->
        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2><span class="timeline-number">5</span> Quality certifications</h2>
                    <p>
                        IFS, BRC A+, Sedexethical audit, ISO 50001, BIO (Brasserie Goudale)
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 1 -->
        <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2><span class="timeline-number">5.7</span> Million hL</h2>
                    <p>
                        Each year, our breweries produce 5.7 <br>
                        million hectoliters of beers, shandy, lemonade <br>
                        and soft drinks.
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 2 -->
        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2><span class="timeline-number">95%</span> Service rate</h2>
                    <p>
                        Quality, responsiveness and flexibility are the <br>
                        key values of our business to satisfy <br>
                        our customers every day.
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 3 -->
        <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2><span class="timeline-number">485</span> Million €</h2>
                    <p>
                        Turnover of the Brasserie de Saint-Omer, Brasserie Goudale and TSA group
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 4 -->
        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2><span class="timeline-number">71</span> Countries</h2>
                    <p>
                        60% of our products are exported. True <br>
                        expertise acquired by our teams over <br> 40 years
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM NEW - 900 references -->
        <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2><span class="timeline-number">900+</span> References</h2>
                    <p>
                        A diversity of recipes and packaging formats characterizes our breweries to offer each customer their ideal product.
                    </p>
                </div>
            </div>
        </article>
    </div>

    <button class="toTop" id="toTop" type="button" aria-label="Go to top">
        ↑
    </button>
</section>
      <!-- ===================== END SECTION METIER / TIMELINE ===================== -->
      <!-- ===================== RECIPES GALLERY ===================== -->
      <section class="recipes-gallery">
        <div class="recipes-gallery__inner">
          <div class="recipes-gallery__head">
            <h2 class="recipes-gallery__title">Our <span>beer</span> recipes</h2>
          </div>

          <div class="recipes-gallery__divider"></div>

          <div class="recipes-gallery__grid">
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/Index/recettes/blonde.png" alt="Beer 1">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Lager</div>
                <div class="recipes-gallery__subtitle">2 - 8%</div>
              </div>
            </div>
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/Index/recettes/cuivrée.png" alt="Beer 2">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Abbey beer</div>
                <div class="recipes-gallery__subtitle">> 7%</div>
              </div>
            </div>
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/Index/recettes/Coca.png" alt="Beer 3">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Flavored</div>
                <div class="recipes-gallery__subtitle">Red, raspberry, peach...</div>
              </div>
            </div>
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/Index/recettes/Rouge.png" alt="Beer 4">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Stout</div>
                <div class="recipes-gallery__subtitle"></div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- ===================== SECTION ENGAGEMENTS ===================== -->
      <section class="engagement-section">
        <div class="engagement-container">
          <div class="engagement-content">
            <div class="engagement-badge">RESPONSIBILITY</div>
            <h2 class="engagement-title">
              Committed to<br><span class="gold-text">virtuous beer production</span>
            </h2>
          <div class="engagement-images">
            <img src="../assets/img/Index/triplette ecologie/Brasserie de Saint-Omer4.jpg" alt="Ecology commitment 1" loading="lazy">
            <img src="../assets/img/Index/triplette ecologie/Brasserie de Saint-Omer9.jpg" alt="Ecology commitment 2" loading="lazy">
            <img src="../assets/img/Index/triplette ecologie/Brasserie de Saint-Omer19.jpg" alt="Ecology commitment 3" loading="lazy">
          </div>
        </div>
      </section>
      <!-- ===================== END SECTION ENGAGEMENTS ===================== -->

    </main>

    <?php include('../includes/footer.php'); ?>    <script src="../js/metier-timeline.js"></script>
    <script src="../js/timeline-section.js"></script>
  </div>

  <script src="../js/navbar.js"></script>
  <script src="../js/reveal.js"></script>
  <script src="../js/navbar-scroll.js"></script>
</body>
</html>
