<?php
  $lang = 'fr';
  $pageKey = 'home';
  require_once('../includes/load-env.php');
?>
<!doctype html>
<html lang="fr">
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
        <img class="hero__bg" src="../assets/img/background.png" alt="Brasserie Saint-Omer" />
        <div class="hero__overlay" aria-hidden="true"></div>
        <div class="hero__bottomFade" aria-hidden="true"></div>

        <div class="hero__inner">
          <div class="hero__content">
            <h1 class="hero__title">La route, notre métier.</h1>
            <p class="hero__subtitle">Depuis plus de 25 ans TSA, vous accompagne pour tous vos transports à travers l'Europe.</p>

            <div class="hero__actions">
              <a href="../fr/contact.php" class="btn btn--gold" style="margin: 0 auto;">
    <span class="btn__icon btn__icon--left" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="currentColor">
    <path d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" transform="rotate(-180 5.02 9.505)"/>
  </svg></span>
    <span>Obtenir un devis</span>
  </a>
            </div>

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
            <h2 class="beers-gallery__title">Nos <span>services</span></h2>
          </div>

          <div class="beers-gallery__divider"></div>

          <div class="beers-gallery__grid">
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/blonde.png" alt="Bière 1">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Lager</div>
                <div class="beers-gallery__subtitle">2 - 8%</div>
              </div>
            </div>
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/cuivrée.png" alt="Bière 2">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Bière d'abbaye</div>
                <div class="beers-gallery__subtitle">> 7%</div>
              </div>
            </div>
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/Coca.png" alt="Bière 3">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Aromatisée</div>
                <div class="beers-gallery__subtitle">Rouge, framboise, pêche ...</div>
              </div>
            </div>
            <div class="beers-gallery__item-wrapper">
              <div class="beers-gallery__item">
                <img src="../assets/img/Index/recettes/Rouge.png" alt="Bière 4">
              </div>
              <div class="beers-gallery__caption">
                <div class="beers-gallery__title">Stout</div>
                <div class="beers-gallery__subtitle"></div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- ===================== SECTION METIER / TIMELINE ===================== -->
      <section class="timeline" aria-label="Company timeline">
    <div class="container">
        <header class="hero">
            <div class="heroBadge">L'ENTREPRISE</div>
            <h1>Notre activité <br> <span>en chiffres</span></h1>

        </header>

        <div class="timelineRail" aria-hidden="true"></div>



        <!-- ITEM 2 (NEW) -->
        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2><span class="timeline-number">400</span> Remorques</h2>
                    <p>
                        Un parc complet de remorques bâchées, renouvelé tous les 7 ans.
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 1 -->
        <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2><span class="timeline-number">220</span> Tracteurs</h2>
                    <p>
                        Équipés des dernières technologies, et de l’informatique embarqué en lien avec nos équipes commerciales. Nos tracteurs sont renouvelés tous les 3 ans.
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 2 -->
        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2><span class="timeline-number">280</span> Chauffeurs</h2>
                    <p>
                        Certifiés ADR (marchandises dangereuses) et formés à l’écoconduite.
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 3 -->
        <article class="timelineItem reveal left">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>Station de lavage et <br>garage entretien <span class="timeline-number">intégré</span></h2>
                    <p>
                        Des camions propres et entretenus par nos équipes internes pour assurer une fiabilité sans faille à vos transports. 
                    </p>
                </div>
            </div>
        </article>

        <!-- ITEM 4 -->
        <article class="timelineItem reveal right">
            <div class="timelineDot" aria-hidden="true"></div>

            <div class="card">
                <div class="cardBody">
                    <h2>Stockage sécurisé <br>de <span class="timeline-number">150 000</span>m2</h2>
                    <p>
                        Site sécurisé et gardiennés. Des solutions d’entreposage complètes pour toutes vos marchandises.
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
            <h2 class="recipes-gallery__title">Nos <span>moyens</span></h2>
          </div>

          <div class="recipes-gallery__divider"></div>

          <div class="recipes-gallery__grid">
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/remorque.jpg" alt="Remorque">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Remorque</div>
              </div>
            </div>
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/citerne.jpg" alt="Citerne">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Citerne</div>
              </div>
            </div>
            <div class="recipes-gallery__item-wrapper">
              <div class="recipes-gallery__item">
                <img src="../assets/img/containers.jpg" alt="Containers">
              </div>
              <div class="recipes-gallery__caption">
                <div class="recipes-gallery__title">Containers</div>
              </div>
            </div>
          </div>
        </div>
      </section>
   

      <!-- ===================== BRASSERIE SECTION ===================== -->
      <section class="brasserie-section">
        <div class="brasserie-section__inner">
          <div class="brasserie-section__kicker">La brasserie</div>
          <h2 class="brasserie-section__title">Brasserie <span>100%</span></h2>
          <div class="brasserie-section__desc">
            Depuis plus d'un siècle, la Brasserie Goudale perpétue un savoir-faire brassicole d'exception, alliant tradition et innovation pour offrir des bières uniques et authentiques.
          </div>
          <div class="brasserie-section__actions">
            <a href="https://brasserie-goudale.com" class="btn btn--gold">
    <span class="btn__icon btn__icon--left" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="currentColor">
    <path d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" transform="rotate(-180 5.02 9.505)"/>
  </svg></span>
    <span>Découvrir la Brasserie Goudale</span>
    
  </a>            <a href="https://brasserie-saint-omer.com" class="btn btn--tsa btn--tsa">
    
    <span>Découvrir la Brasserie Saint Omer</span>
    <span class="btn__icon btn__icon--right" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="currentColor">
    <path d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" transform="rotate(-180 5.02 9.505)"/>
  </svg></span>
  </a>          </div>
          <div class="brasserie-carousel">
            <div class="brasserie-carousel__track">
              <img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car1.jpg" alt="Carrousel 1"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car2.jpg" alt="Carrousel 2"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car3.jpg" alt="Carrousel 3"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car4.jpg" alt="Carrousel 4"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car5.jpg" alt="Carrousel 5"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car6.jpg" alt="Carrousel 6"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car7.jpg" alt="Carrousel 7"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car1.jpg" alt="Carrousel 1"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car2.jpg" alt="Carrousel 2"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car3.jpg" alt="Carrousel 3"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car4.jpg" alt="Carrousel 4"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car5.jpg" alt="Carrousel 5"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car6.jpg" alt="Carrousel 6"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car7.jpg" alt="Carrousel 7"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car1.jpg" alt="Carrousel 1"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car2.jpg" alt="Carrousel 2"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car3.jpg" alt="Carrousel 3"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car4.jpg" alt="Carrousel 4"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car5.jpg" alt="Carrousel 5"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car6.jpg" alt="Carrousel 6"><img class="brasserie-carousel__img brasserie-carousel__img--md" src="../assets/img/carroussel entreprise/car7.jpg" alt="Carrousel 7">            </div>
          </div>
        </div>
      </section>


      <!-- ===================== CITATION ANDRÉ PECQUEUR ===================== -->
      <section class="citation-section">
        <img class="citation-section__img" src="../assets/img/pdg.jpg" alt="André Pecqueur, PDG de la Brasserie Goudale">
        <div class="citation-section__text">
          <span class="citation-section__quote">&laquo;</span><br>
          Notre seul patron ici,<br>
          c'est le client.<br>
          <span class="citation-section__author">- ANDRÉ PECQUEUR, PDG DE LA BRASSERIE GOUDALE</span>
        </div>
      </section>


      <!-- ===================== SECTION ENGAGEMENTS ===================== -->
      <section class="engagement-section">
        <div class="engagement-container">
          <div class="engagement-content">
            <div class="engagement-badge">RESPONSABILITÉ</div>
            <h2 class="engagement-title">
              Enterprise<br><span class="gold-text">100% </span>familial et indépendante
            </h2>
          <div class="engagement-images">
            <img src="../assets/img/certifs/Certifications_Fond transparent copie.png" alt="Certification 1" loading="lazy">
            <img src="../assets/img/certifs/Certifications_Fond transparent copie 2.png" alt="Certification 2" loading="lazy">
            <img src="../assets/img/certifs/Certifications_Fond transparent copie 3.png" alt="Certification 3" loading="lazy">
            <img src="../assets/img/certifs/Certifications_Fond transparent copie 4.png" alt="Certification 4" loading="lazy">
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
