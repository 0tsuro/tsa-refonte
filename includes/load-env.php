<?php
/**
 * Loader pour fichier .env local
 * Charge les variables d'environnement depuis le fichier .env
 * À appeler AVANT tout autre code
 * 
 * Utilisation: require_once 'includes/load-env.php';
 */

function load_env_file($path = __DIR__ . '/../.env') {
  if (!file_exists($path)) {
    return; // Pas de fichier .env, les variables sont définies ailleurs (env système, Vercel, etc.)
  }

  $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  
  foreach ($lines as $line) {
    // Ignorer les commentaires et les lignes vides
    if (strpos(trim($line), '#') === 0 || trim($line) === '') {
      continue;
    }

    // Parser les lignes KEY=VALUE
    if (strpos($line, '=') !== false) {
      list($key, $value) = explode('=', $line, 2);
      $key = trim($key);
      $value = trim($value);
      
      // Supprimer les guillemets si présents
      if (substr($value, 0, 1) === '"' && substr($value, -1) === '"') {
        $value = substr($value, 1, -1);
      }
      
      // Définir la variable d'environnement si elle n'existe pas
      if (!getenv($key)) {
        putenv("$key=$value");
      }
    }
  }
}

// Charger le fichier .env
load_env_file();
