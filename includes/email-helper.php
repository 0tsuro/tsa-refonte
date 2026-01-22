<?php
/**
 * Helper pour l'envoi d'emails via SMTP
 * Utilise PHP mail() avec configuration SMTP ou socket SMTP direct
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/mail.config.php';

/**
 * Envoie un email via SMTP (connexion native PHP)
 * Auto-détection des capacités du serveur
 * 
 * @param string $to Email destinataire
 * @param string $subject Sujet du message
 * @param string $message Corps du message
 * @param string $from Email expéditeur
 * @return bool True si succès, false sinon
 */
function send_email_smtp($to, $subject, $message, $from = null) {
  try {
    // Si pas de FROM spécifié, utiliser le compte SMTP authentifié
    if (empty($from)) {
      $from = SMTP_USERNAME;
    }
    if (DEBUG_MAIL) {
      error_log("🔧 Paramètres SMTP:");
      error_log("   SMTP_HOST: " . SMTP_HOST);
      error_log("   SMTP_PORT: " . SMTP_PORT);
      error_log("   SMTP_USERNAME: " . SMTP_USERNAME);
      error_log("   SMTP_PASSWORD length: " . strlen(SMTP_PASSWORD) . " chars");
      // Afficher les caractères du password en hex pour trouver les espaces/caractères cachés
      error_log("   SMTP_PASSWORD hex: " . bin2hex(SMTP_PASSWORD));
      error_log("   Email FROM utilisé: " . $from);
    }
    
    // Ouvrir connexion socket SMTP
    $socket = fsockopen(SMTP_HOST, SMTP_PORT, $errno, $errstr, 30);
    
    if (!$socket) {
      if (DEBUG_MAIL) {
        error_log("❌ Connexion SMTP échouée: " . SMTP_HOST . ":" . SMTP_PORT);
        error_log("   Erreur: $errstr ($errno)");
      }
      return false;
    }

    // Fonction pour lire TOUTES les lignes de la réponse SMTP (multiline)
    $read_full_response = function($socket, $timeout = 5) {
      stream_set_timeout($socket, $timeout);
      $response = '';
      while ($line = fgets($socket, 1024)) {
        $response .= $line;
        // Arrêter si c'est la dernière ligne (code suivi d'espace, pas tiret)
        if (preg_match('/^\d{3} /', $line)) {
          break;
        }
      }
      return $response;
    };

    // Lire la réponse du serveur
    $response = $read_full_response($socket);
    if (strpos($response, '220') === false) {
      if (DEBUG_MAIL) error_log("❌ Serveur SMTP invalide: " . trim($response));
      fclose($socket);
      return false;
    }

    // Log configuration pour vérifier les paramètres
    if (DEBUG_MAIL) {
      error_log("⚙️  SMTP_HOST=" . SMTP_HOST . ", SMTP_PORT=" . SMTP_PORT . " (type: " . gettype(SMTP_PORT) . ")");
      error_log("⚙️  DEBUG_MAIL=" . (DEBUG_MAIL ? 'true' : 'false'));
    }

    // EHLO - Récupérer TOUTES les capacités
    fputs($socket, "EHLO " . gethostname() . "\r\n");
    $response = $read_full_response($socket);
    $capabilities = array_map('trim', explode("\n", $response));

    if (DEBUG_MAIL) error_log("📧 Capacités serveur: " . implode(" | ", $capabilities));

    // STARTTLS (port 587)
    if (DEBUG_MAIL) error_log("🔍 Vérification STARTTLS: SMTP_PORT=" . SMTP_PORT . " == 587? " . (SMTP_PORT == 587 ? 'OUI' : 'NON'));
    
    if (SMTP_PORT == 587) {
      if (DEBUG_MAIL) error_log("🔒 Envoi STARTTLS...");
      fputs($socket, "STARTTLS\r\n");
      $response = $read_full_response($socket);
      
      if (DEBUG_MAIL) error_log("   Réponse STARTTLS: " . trim($response));
      
      // STARTTLS répond avec 220, pas 250
      if (strpos($response, '220') === false) {
        if (DEBUG_MAIL) error_log("❌ STARTTLS échoué (pas 220): " . trim($response));
        fclose($socket);
        return false;
      }

      // Activer TLS - avec gestion d'erreur améliorée
      if (DEBUG_MAIL) error_log("   Activation du chiffrement TLS...");
      
      $crypto_result = stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
      
      if ($crypto_result === false) {
        if (DEBUG_MAIL) error_log("❌ Activation TLS échouée (false)");
        fclose($socket);
        return false;
      } elseif ($crypto_result === 0) {
        if (DEBUG_MAIL) error_log("⚠️  Activation TLS en cours (async)...");
        usleep(1000000); // Attendre 1 second pour async TLS
        $crypto_result = stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
        if ($crypto_result !== true) {
          if (DEBUG_MAIL) error_log("❌ Activation TLS échouée après attente");
          fclose($socket);
          return false;
        }
      }
      
      if (DEBUG_MAIL) error_log("✅ TLS activé avec succès");
      
      // Attendre un peu après le handshake TLS
      usleep(500000); // 0.5 secondes
      
      // Re-configurer les timeouts après TLS
      stream_set_blocking($socket, true);
      stream_set_timeout($socket, 30);

      // Re-EHLO après TLS
      if (DEBUG_MAIL) error_log("   Re-EHLO après TLS...");
      fputs($socket, "EHLO " . gethostname() . "\r\n");
      usleep(200000);
      $response = $read_full_response($socket);
      $capabilities = array_map('trim', explode("\n", $response));
      if (DEBUG_MAIL) error_log("📧 Capacités après STARTTLS: " . implode(" | ", array_filter($capabilities)));
    }

    // Authentification - essayer AUTH LOGIN d'abord (Office 365 le préfère)
    $auth_success = false;
    
    if (!empty(SMTP_USERNAME) && !empty(SMTP_PASSWORD)) {
      // Première tentative: AUTH LOGIN (méthode standard Office 365)
      if (DEBUG_MAIL) error_log("🔐 Authentification requise pour " . SMTP_USERNAME);
      
      if (DEBUG_MAIL) error_log("   Tentative AUTH LOGIN...");
      fputs($socket, "AUTH LOGIN\r\n");
      usleep(300000); // 0.3 secondes avant lecture
      
      $response = trim($read_full_response($socket));
      if (DEBUG_MAIL) error_log("   Réponse AUTH LOGIN: " . $response);
      
      if (strpos($response, '334') !== false) {
        // Serveur demande le username
        if (DEBUG_MAIL) error_log("   📝 Envoi username en base64...");
        $username_b64 = base64_encode(SMTP_USERNAME);
        if (DEBUG_MAIL) error_log("      Username original: " . SMTP_USERNAME);
        if (DEBUG_MAIL) error_log("      Username base64: " . $username_b64);
        fputs($socket, $username_b64 . "\r\n");
        usleep(300000);
        
        $response = trim($read_full_response($socket));
        if (DEBUG_MAIL) error_log("   Réponse username: " . substr($response, 0, 50));
        
        if (strpos($response, '334') !== false) {
          // Serveur demande le password
          if (DEBUG_MAIL) error_log("   📝 Envoi password en base64...");
          $password_b64 = base64_encode(SMTP_PASSWORD);
          if (DEBUG_MAIL) error_log("      Password original length: " . strlen(SMTP_PASSWORD));
          if (DEBUG_MAIL) error_log("      Password base64 length: " . strlen($password_b64));
          if (DEBUG_MAIL) error_log("      Password base64: " . $password_b64);
          fputs($socket, $password_b64 . "\r\n");
          usleep(500000); // Augmenter le délai avant de lire la réponse
          
          // Augmenter le timeout pour la réponse du password
          stream_set_timeout($socket, 15);
          $response = trim($read_full_response($socket));
          if (DEBUG_MAIL) error_log("   Réponse password length: " . strlen($response));
          if (DEBUG_MAIL) error_log("   Réponse password: " . substr($response, 0, 100));
          
          if (strpos($response, '235') !== false || strpos($response, '2.7.0') !== false) {
            if (DEBUG_MAIL) error_log("✅ AUTH LOGIN réussie");
            $auth_success = true;
          } else {
            if (DEBUG_MAIL) error_log("⚠️  AUTH LOGIN échouée au password: " . $response);
          }
        } else {
          if (DEBUG_MAIL) error_log("⚠️  Serveur n'a pas demandé le password: " . $response);
        }
      } elseif (strpos($response, '504') !== false || strpos($response, '502') !== false) {
        // Serveur ne supporte pas AUTH LOGIN, essayer AUTH PLAIN
        if (DEBUG_MAIL) error_log("⚠️  AUTH LOGIN non supporté (erreur: " . substr($response, 0, 20) . "), tentative AUTH PLAIN");
        
        $auth_string = base64_encode("\0" . SMTP_USERNAME . "\0" . SMTP_PASSWORD);
        fputs($socket, "AUTH PLAIN " . $auth_string . "\r\n");
        usleep(300000);
        
        $response = trim($read_full_response($socket));
        if (DEBUG_MAIL) error_log("   Réponse AUTH PLAIN: " . substr($response, 0, 100));
        
        if (strpos($response, '235') !== false || strpos($response, '2.7.0') !== false) {
          if (DEBUG_MAIL) error_log("✅ AUTH PLAIN réussie");
          $auth_success = true;
        } else {
          if (DEBUG_MAIL) error_log("⚠️  AUTH PLAIN échouée: " . $response);
        }
      } else {
        if (DEBUG_MAIL) error_log("⚠️  Réponse AUTH LOGIN inattendue: " . $response);
      }
      
      if (!$auth_success) {
        if (DEBUG_MAIL) error_log("⚠️  Authentification échouée, vérifier TLS et identifiants");
      }
    } elseif (DEBUG_MAIL) {
      error_log("ℹ️  Pas d'identifiants SMTP configurés");
    }

    // FROM - Envoyer avec ou sans auth réussie
    fputs($socket, "MAIL FROM:<" . $from . ">\r\n");
    usleep(200000);
    $response = $read_full_response($socket);
    if (strpos($response, '250') === false) {
      if (DEBUG_MAIL) error_log("❌ MAIL FROM rejeté: " . trim($response));
      fclose($socket);
      return false;
    }

    // TO
    fputs($socket, "RCPT TO:<" . $to . ">\r\n");
    usleep(200000);
    $response = $read_full_response($socket);
    if (strpos($response, '250') === false) {
      if (DEBUG_MAIL) error_log("❌ RCPT TO rejeté: " . trim($response));
      fclose($socket);
      return false;
    }

    // DATA
    fputs($socket, "DATA\r\n");
    usleep(200000);
    $response = $read_full_response($socket);
    if (strpos($response, '354') === false) {
      if (DEBUG_MAIL) error_log("❌ DATA rejeté: " . trim($response));
      fclose($socket);
      return false;
    }

    // En-têtes
    $headers = "Subject: " . $subject . "\r\n";
    $headers .= "From: " . $from . "\r\n";
    $headers .= "To: " . $to . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: " . date('r') . "\r\n";
    $headers .= "\r\n";

    // Corps du message
    fputs($socket, $headers);
    fputs($socket, $message);
    fputs($socket, "\r\n.\r\n");

    usleep(200000);
    $response = $read_full_response($socket);
    if (strpos($response, '250') === false) {
      if (DEBUG_MAIL) error_log("❌ Message rejeté: " . trim($response));
      fclose($socket);
      return false;
    }

    // QUIT
    fputs($socket, "QUIT\r\n");
    fclose($socket);

    if (DEBUG_MAIL) error_log("✅ Email envoyé avec succès à " . $to);
    return true;

  } catch (Exception $e) {
    if (DEBUG_MAIL) {
      error_log("❌ Exception SMTP: " . $e->getMessage());
    }
    return false;
  }
}

/**
 * Crée un email HTML formaté
 * @param array $data Les données du formulaire
 * @return string HTML du message
 */
function create_email_body($data) {
  $html = "<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
    .header { background-color: #f4e4c1; padding: 20px; text-align: center; }
    .header h1 { color: #333; margin: 0; }
    .content { background-color: #f9f9f9; padding: 20px; margin: 20px 0; }
    .field { margin-bottom: 15px; }
    .label { font-weight: bold; color: #555; }
    .value { padding: 8px 0; }
    .footer { text-align: center; font-size: 12px; color: #999; margin-top: 20px; }
  </style>
</head>
<body>
  <div class='container'>
    <div class='header'>
      <h1>Nouveau message de contact</h1>
    </div>
    <div class='content'>
      <div class='field'>
        <div class='label'>Prénom:</div>
        <div class='value'>" . htmlspecialchars($data['prenom'] ?? '') . "</div>
      </div>
      <div class='field'>
        <div class='label'>Nom:</div>
        <div class='value'>" . htmlspecialchars($data['nom'] ?? '') . "</div>
      </div>
      <div class='field'>
        <div class='label'>Email:</div>
        <div class='value'><a href='mailto:" . htmlspecialchars($data['email'] ?? '') . "'>" . htmlspecialchars($data['email'] ?? '') . "</a></div>
      </div>
      <div class='field'>
        <div class='label'>Téléphone:</div>
        <div class='value'>" . htmlspecialchars($data['telephone'] ?? '') . "</div>
      </div>
      <div class='field'>
        <div class='label'>Objet:</div>
        <div class='value'>" . htmlspecialchars($data['objet'] ?? '') . "</div>
      </div>
      <div class='field'>
        <div class='label'>Message:</div>
        <div class='value'>" . nl2br(htmlspecialchars($data['message'] ?? '')) . "</div>
      </div>
    </div>
    <div class='footer'>
      <p>Message envoyé depuis le formulaire de contact du site Brasserie Goudale</p>
    </div>
  </div>
</body>
</html>";
  
  return $html;
}
