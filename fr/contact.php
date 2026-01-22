<?php
// Charger les variables d'environnement
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/load-env.php';

session_start();
$lang = 'fr';
$pageKey = 'contact';

// Inclure les helpers
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/captcha.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/email-helper.php';

// Générer un token CSRF si absent
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Traitement du formulaire
$form_submitted = false;
$form_errors = [];
$form_success = false;

// Initialiser les variables du formulaire
$prenom = '';
$nom = '';
$email = '';
$telephone = '';
$objet = '';
$message = '';
$rgpd = false;
$honeypot = ''; // Champ invisible pour piéger les bots

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Vérifier le token CSRF
  if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    $form_errors[] = 'Erreur de sécurité: token invalide.';
  } else {
    // Sanitizer les données
    $prenom = trim($_POST['prenom'] ?? '');
    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telephone = trim($_POST['telephone'] ?? '');
    $objet = trim($_POST['objet'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $recaptcha_token = trim($_POST['g-recaptcha-response'] ?? '');
    $honeypot = trim($_POST['website'] ?? ''); // Champ honeypot
    $rgpd = isset($_POST['rgpd']) ? true : false;

    // Validation
    if (empty($prenom)) $form_errors[] = 'Le prénom est requis.';
    if (empty($nom)) $form_errors[] = 'Le nom est requis.';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $form_errors[] = 'Email invalide.';
    if (empty($telephone)) $form_errors[] = 'Le téléphone est requis.';
    if (empty($message)) $form_errors[] = 'Le message est requis.';
    if (!$rgpd) $form_errors[] = 'Veuillez accepter la politique RGPD.';
    
    // Validation du reCAPTCHA
    if (empty($recaptcha_token)) {
      $form_errors[] = 'Veuillez valider le reCAPTCHA.';
    } elseif (!validate_recaptcha($recaptcha_token)) {
      $form_errors[] = 'Validation du reCAPTCHA échouée. Veuillez réessayer.';
    }

    // Si pas d'erreurs, envoyer l'email
    if (empty($form_errors)) {
      $email_data = [
        'prenom' => $prenom,
        'nom' => $nom,
        'email' => $email,
        'telephone' => $telephone,
        'objet' => $objet,
        'message' => $message
      ];
      
      $subject = "Nouveau message de $prenom $nom - $objet";
      $email_body = create_email_body($email_data);
      
      // Envoyer l'email via SMTP (FROM sera automatiquement le compte SMTP authentifié)
      if (send_email_smtp(CONTACT_EMAIL, $subject, $email_body)) {
        $form_success = true;
        $form_submitted = true;
        // Réinitialiser le formulaire
        $prenom = $nom = $email = $telephone = $objet = $message = '';
        $rgpd = false;
      } else {
        $form_errors[] = 'Erreur lors de l\'envoi du message. Veuillez réessayer.';
      }
    }
  }
}

// Récupérer la clé publique reCAPTCHA
$recaptcha_site_key = get_recaptcha_site_key();
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact – Brasserie Goudale</title>

  <link rel="stylesheet" href="/css/00-reset.css">
  <link rel="stylesheet" href="/css/01-variables.css">
  <link rel="stylesheet" href="/css/02-base.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <link rel="stylesheet" href="/css/components/navbar.css">
  <link rel="stylesheet" href="/css/components/footer.css">
  <link rel="stylesheet" href="/css/components/reveal.css">
  <link rel="stylesheet" href="/css/pages/contact/contact.css">
  <!-- Google reCAPTCHA v2 -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
  <div class="page-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navbar.php'; ?>

    <main class="site-main">

      <!-- ===================== CONTACT SECTION ===================== -->
      <section class="contact-section">
        <div class="contact-inner">

          <!-- LEFT COLUMN -->
          <div class="contact-left">
            <h1 class="contact-title">Contactez-nous</h1>
            
            <div class="contact-info">
              <div class="contact-info__item">
                <h3 class="contact-info__label">Téléphone</h3>
                <p class="contact-info__value"><a href="tel:+33123456789">03 21 98 76 00</a></p>
              </div>

              <div class="contact-info__item">
                <h3 class="contact-info__label">Adresse</h3>
                <p class="contact-info__value">
                  Brasserie Saint Omer<br>
                  35bis boulevard de Strasbourg<br>
                62500 Saint-Omer<br>
                  France
                </p>
              </div>
            </div>

            <div class="contact-socials">
              <h3 class="contact-socials__title">Suivez-nous</h3>
              <div class="contact-socials__list">
                <a href="https://www.instagram.com/goudale.officiel/" class="contact-social__link" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M3 9.4c0-2.24 0-3.36.436-4.216a4 4 0 0 1 1.748-1.748C6.04 3 7.16 3 9.4 3h5.2c2.24 0 3.36 0 4.216.436a4 4 0 0 1 1.748 1.748C21 6.04 21 7.16 21 9.4v5.2c0 2.24 0 3.36-.436 4.216a4 4 0 0 1-1.748 1.748C17.96 21 16.84 21 14.6 21H9.4c-2.24 0-3.36 0-4.216-.436a4 4 0 0 1-1.748-1.748C3 17.96 3 16.84 3 14.6zm14-2.9h.5"/><path d="M15.462 11.487a3.5 3.5 0 1 1-6.925 1.026a3.5 3.5 0 0 1 6.925-1.026"/></g></svg>
                </a>
                <a href="https://www.linkedin.com/company/brasserie-goudale/" class="contact-social__link" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M18.44 3.06H5.56a2.507 2.507 0 0 0-2.5 2.5v12.88a2.507 2.507 0 0 0 2.5 2.5h12.88a2.5 2.5 0 0 0 2.5-2.5V5.56a2.5 2.5 0 0 0-2.5-2.5m1.5 15.38a1.51 1.51 0 0 1-1.5 1.5H5.56a1.51 1.51 0 0 1-1.5-1.5V5.56a1.51 1.51 0 0 1 1.5-1.5h12.88a1.51 1.51 0 0 1 1.5 1.5Z"/><path fill="currentColor" d="M6.376 10.748a1 1 0 1 1 2 0v6.5a1 1 0 0 1-2 0Z"/><circle cx="7.376" cy="6.744" r="1" fill="currentColor"/><path fill="currentColor" d="M17.62 13.37v3.88a1 1 0 1 1-2 0v-3.88a1.615 1.615 0 1 0-3.23 0v3.88a1 1 0 0 1-2 0v-6.5a1.016 1.016 0 0 1 1-1a.94.94 0 0 1 .84.47a3.61 3.61 0 0 1 5.39 3.15"/></svg>
                </a>
                <a href="https://www.facebook.com/GoudaleBrasserie" class="contact-social__link" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19.02 4.975A9.93 9.93 0 0 0 2.07 12A9.935 9.935 0 0 0 12 21.935a10 10 0 0 0 3.8-.75a10.2 10.2 0 0 0 3.22-2.16a9.934 9.934 0 0 0 0-14.05m-.7 13.34a8.92 8.92 0 0 1-5.32 2.57v-6.56h1.88a1 1 0 0 0 0-2H13v-2.74a1 1 0 0 1 1-1h1.2a1 1 0 0 0 0-2h-1.7a2.5 2.5 0 0 0-2.5 2.5v3.24H9.13a1 1 0 1 0 0 2H11v6.56a8.919 8.919 0 1 1 9.26-5.47a9.1 9.1 0 0 1-1.94 2.9"/></svg>
                </a>
              </div>
            </div>
          </div>

          <!-- RIGHT COLUMN - FORM -->
          <div class="contact-right">
            <?php if ($form_submitted && $form_success): ?>
              <div class="contact-form__success">
                <h3>Merci pour votre message!</h3>
                <p>Nous avons bien reçu votre demande. Notre équipe vous répondra dans les meilleurs délais.</p>
              </div>
            <?php endif; ?>

            <?php if ($form_submitted && !empty($form_errors)): ?>
              <div class="contact-form__errors">
                <h3>Erreurs dans le formulaire:</h3>
                <ul>
                  <?php foreach ($form_errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>

            <form class="contact-form" method="POST" action="">
              <!-- Token CSRF pour protection contre les attaques CSRF -->
              <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
              
              <div class="contact-form__row">
                <div class="contact-form__group">
                  <label for="prenom" class="contact-form__label">Prénom*</label>
                  <input type="text" id="prenom" name="prenom" class="contact-form__input" required value="<?php echo htmlspecialchars($prenom ?? ''); ?>">
                </div>

                <div class="contact-form__group">
                  <label for="nom" class="contact-form__label">Nom*</label>
                  <input type="text" id="nom" name="nom" class="contact-form__input" required value="<?php echo htmlspecialchars($nom ?? ''); ?>">
                </div>
              </div>

              <div class="contact-form__row">
                <div class="contact-form__group">
                  <label for="email" class="contact-form__label">Email*</label>
                  <input type="email" id="email" name="email" class="contact-form__input" required value="<?php echo htmlspecialchars($email ?? ''); ?>">
                </div>

                <div class="contact-form__group">
                  <label for="telephone" class="contact-form__label">Téléphone*</label>
                  <input type="tel" id="telephone" name="telephone" class="contact-form__input" required value="<?php echo htmlspecialchars($telephone ?? ''); ?>">
                </div>
              </div>

              <div class="contact-form__group contact-form__group--full">
                <label for="objet" class="contact-form__label">Objet</label>
                <select id="objet" name="objet" class="contact-form__select">
                  <option value="">Sélectionner un sujet</option>
                  <option value="commercial" <?php echo ($objet === 'commercial') ? 'selected' : ''; ?>>Demande commerciale</option>
                  <option value="partenariat" <?php echo ($objet === 'partenariat') ? 'selected' : ''; ?>>Partenariat</option>
                  <option value="reclamation" <?php echo ($objet === 'reclamation') ? 'selected' : ''; ?>>Réclamation</option>
                  <option value="autre" <?php echo ($objet === 'autre') ? 'selected' : ''; ?>>Autre</option>
                </select>
              </div>

              <div class="contact-form__group contact-form__group--full">
                <label for="message" class="contact-form__label">Message*</label>
                <textarea id="message" name="message" class="contact-form__textarea" rows="6" required><?php echo htmlspecialchars($message ?? ''); ?></textarea>
              </div>

              <!-- reCAPTCHA v2 -->
              <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars($recaptcha_site_key); ?>" style="margin-bottom: 20px;"></div>

              <!-- Honeypot (champ invisible pour piéger les bots) -->
              <input type="text" name="website" style="display: none;" tabindex="-1" autocomplete="off">

              <div class="contact-form__checkbox">
                <p class="contact-form__required-note">* champs obligatoire</p>
                <div class="contact-form__checkbox-wrapper">
                  <input type="checkbox" id="rgpd" name="rgpd" class="contact-form__checkbox-input" <?php echo ($rgpd) ? 'checked' : ''; ?> required>
                  <label for="rgpd" class="contact-form__checkbox-label">J'accepte la politique de confidentialité et le traitement de mes données personnelles</label>
                </div>
              </div>

              <button type="submit" class="contact-form__button">Envoyer</button>
            </form>
          </div>

        </div>
      </section>
      <!-- ===================== END CONTACT SECTION ===================== -->

    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
  </div>

  <script src="/js/navbar.js"></script>
  <script src="/js/reveal.js"></script>
  
  <!-- Enterprise v3 form submission handler -->
  <script>
    (function() {
      const form = document.querySelector('.contact-form');
      if (!form) return;
    })();
  </script>
</body>
</html>
