<?php
/**
 * Fichier de configuration EXEMPLE
 * 
 * INSTRUCTIONS :
 * 1. Copiez ce fichier et renommez-le en "config.php"
 * 2. Remplacez les valeurs ci-dessous par vos vrais paramètres
 * 3. Le fichier config.php ne sera pas versionné (il est dans .gitignore)
 */

// ===== CONFIGURATION ALWAYSDATA (PRODUCTION) =====
define('MYSQL_HOST', 'mysql-liondev.alwaysdata.net'); // Ex: mysql-moncompte.alwaysdata.net
define('MYSQL_NAME', 'liondev_cv');           // Ex: moncompte_cv
define('MYSQL_USER', 'liondev');                       // Ex: moncompte
define('MYSQL_PASSWORD', 'AlWLionm@n277!');             // Votre mot de passe AlwaysData
define('MYSQL_PORT', '3306');                               // Port MySQL par défaut

// ===== CONFIGURATION LOCALE (DÉVELOPPEMENT) =====
// Décommentez les lignes ci-dessous pour utiliser une base de données locale XAMPP
/*
define('MYSQL_HOST', 'localhost');
define('MYSQL_NAME', 'cv_local');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');  // Souvent vide avec XAMPP
define('MYSQL_PORT', '3306');
*/

// ===== NOTES =====
// - Pour trouver vos paramètres AlwaysData : https://admin.alwaysdata.com/ > Bases de données > MySQL
// - N'oubliez pas d'autoriser les connexions distantes dans le panel AlwaysData
// - Vous pouvez avoir un config.php différent sur chaque ordinateur/serveur
?>
