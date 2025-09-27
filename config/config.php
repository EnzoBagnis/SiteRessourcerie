<?php
/**
 * Configuration générale de l'application
 */

// Configuration du site
define('SITE_NAME', 'Les Trouvailles de Vitrolles');
define('SITE_DESCRIPTION', 'Ressourcerie & Économie Circulaire');
define('SITE_URL', 'http://localhost');

// Configuration des chemins
define('ROOT_PATH', dirname(__DIR__));
define('PUBLIC_PATH', ROOT_PATH . '/public');
define('VIEWS_PATH', ROOT_PATH . '/views');
define('INCLUDES_PATH', ROOT_PATH . '/includes');

// Configuration de base de données (si nécessaire)
define('DB_HOST', 'localhost');
define('DB_NAME', 'ecoressource');
define('DB_USER', 'root');
define('DB_PASS', '');

// Configuration admin
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'password123');
define('ADMIN_PASSWORD_HASH', password_hash(ADMIN_PASSWORD, PASSWORD_ARGON2ID));

// Timezone
date_default_timezone_set('Europe/Paris');

// Gestion des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>