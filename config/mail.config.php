<?php
/**
 * Configuration d'envoi d'emails - UTILISE LES VARIABLES D'ENVIRONNEMENT
 * Les secrets (username, password) ne doivent JAMAIS être en dur dans le code
 * 
 * En développement local: voir .env.example pour créer votre .env
 * En production (Vercel): définir les secrets dans le dashboard Vercel
 */

// Configuration SMTP - Charger depuis les variables d'environnement
define('SMTP_HOST', trim(getenv('SMTP_HOST')) ?: 'your_smtp_host');
define('SMTP_PORT', (int)trim(getenv('SMTP_PORT')) ?: 587);
define('SMTP_USERNAME', trim(getenv('SMTP_USERNAME')) ?: '');
define('SMTP_PASSWORD', trim(getenv('SMTP_PASSWORD')) ?: '');

// Email destinataire
define('CONTACT_EMAIL', trim(getenv('CONTACT_EMAIL')) ?: 'contact@brasseriegoudale.com');

// reCAPTCHA (v2 ou Enterprise v3) - Charger depuis les variables d'environnement
define('RECAPTCHA_SITE_KEY', trim(getenv('RECAPTCHA_SITE_KEY')) ?: '');
define('RECAPTCHA_SECRET_KEY', trim(getenv('RECAPTCHA_SECRET_KEY')) ?: '');
define('RECAPTCHA_VERSION', trim(getenv('RECAPTCHA_VERSION')) ?: 'v2');

// Activer les logs d'erreur (false en production)
define('DEBUG_MAIL', trim(getenv('DEBUG_MAIL')) === 'true');

// Vérifier que les identifiants SMTP sont configurés
if (empty(SMTP_USERNAME) || empty(SMTP_PASSWORD)) {
  if (DEBUG_MAIL) {
    error_log('⚠️ ATTENTION: Identifiants SMTP non configurés. Vérifiez les variables d\'environnement.');
  }
}
