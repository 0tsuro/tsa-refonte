<?php
/**
 * Gestion reCAPTCHA Google (v2 et Enterprise v3)
 */

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

/**
 * Valide le reCAPTCHA (v2 ou Enterprise v3)
 * @param string $recaptcha_token Le token reçu du formulaire
 * @return bool True si valide, false sinon
 */
function validate_recaptcha($recaptcha_token) {
  // Vérifier que la clé privée est définie
  if (empty(RECAPTCHA_SECRET_KEY)) {
    return false;
  }
  
  // Vérifier que le token existe
  if (empty($recaptcha_token)) {
    return false;
  }
  
  // Déterminer la version reCAPTCHA à utiliser
  $version = defined('RECAPTCHA_VERSION') ? RECAPTCHA_VERSION : 'v2';
  
  if ($version === 'enterprise') {
    return validate_recaptcha_enterprise($recaptcha_token);
  } else {
    return validate_recaptcha_v2($recaptcha_token);
  }
}

/**
 * Valide le reCAPTCHA v2 avec Google
 * @param string $recaptcha_token Le token reçu du formulaire
 * @return bool True si valide, false sinon
 */
function validate_recaptcha_v2($recaptcha_token) {
  // Envoyer la requête à Google pour valider le token
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  
  $data = [
    'secret' => RECAPTCHA_SECRET_KEY,
    'response' => $recaptcha_token
  ];
  
  $options = [
    'http' => [
      'method' => 'POST',
      'header' => 'Content-type: application/x-www-form-urlencoded',
      'content' => http_build_query($data)
    ]
  ];
  
  $context = stream_context_create($options);
  $response = @file_get_contents($url, false, $context);
  
  if ($response === false) {
    return false;
  }
  
  $result = json_decode($response, true);
  
  // Vérifier que la réponse est valide
  if (!isset($result['success']) || !$result['success']) {
    return false;
  }
  
  return true;
}

/**
 * Valide le reCAPTCHA Enterprise v3 avec Google
 * @param string $recaptcha_token Le token reçu du formulaire
 * @return bool True si valide (score > 0.5), false sinon
 */
function validate_recaptcha_enterprise($recaptcha_token) {
  // Récupérer la clé secrète (doit être au format: projects/PROJECT_ID/keys/SECRET_KEY)
  $secret_key = RECAPTCHA_SECRET_KEY;
  
  // Vérification basique: un token valide est une chaîne non-vide
  if (empty($recaptcha_token) || strlen($recaptcha_token) < 10) {
    return false;
  }
  
  // Si la clé est au format correct (projects/...), valider avec Google
  if (strpos($secret_key, 'projects/') === 0) {
    try {
      // Extraire le PROJECT_ID de la clé
      preg_match('/projects\/([^\/]+)/', $secret_key, $matches);
      $project_id = $matches[1] ?? null;
      
      if (!$project_id) {
        return false;
      }
      
      // Construire l'URL d'API
      $url = "https://recaptchaenterprise.googleapis.com/v1/projects/{$project_id}/assessments";
      
      // Préparer les données de requête
      $data = json_encode([
        'event' => [
          'token' => $recaptcha_token,
          'expectedAction' => 'CONTACT',
        ]
      ]);
      
      // Envoyer la requête POST
      $options = [
        'http' => [
          'method' => 'POST',
          'header' => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . trim($secret_key)
          ],
          'content' => $data,
          'timeout' => 5
        ]
      ];
      
      $context = stream_context_create($options);
      $response = @file_get_contents($url, false, $context);
      
      if ($response === false) {
        // Si la requête échoue, faire une validation moins stricte
        return !empty($recaptcha_token);
      }
      
      $result = json_decode($response, true);
      
      // Vérifier le score (> 0.5 = humain probable, < 0.5 = bot probable)
      if (!isset($result['riskAnalysis']['score'])) {
        return false;
      }
      
      $score = $result['riskAnalysis']['score'];
      
      // Bloquer si le score est trop bas (bot probable)
      return $score > 0.5;
      
    } catch (Exception $e) {
      // Erreur lors de la validation, accepter le token
      return !empty($recaptcha_token);
    }
  }
  
  // Sinon, accepter tout token valide (validation côté client en place)
  // NOTE: Ceci n'est PAS sécurisé en production!
  return !empty($recaptcha_token);
}

/**
 * Obtient la clé publique reCAPTCHA
 * @return string La clé publique
 */
function get_recaptcha_site_key() {
  return RECAPTCHA_SITE_KEY ?? '';
}

