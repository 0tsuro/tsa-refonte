<?php
/**
 * TSA - Index Router
 * Redirection vers la page d'accueil en fonction de la langue
 */

// Déterminer la langue par défaut
$lang = $_GET['lang'] ?? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$lang = in_array($lang, ['en', 'fr']) ? $lang : 'fr';

// Rediriger vers la page d'accueil appropriée
header("Location: /$lang/index.php");
exit;
?>
