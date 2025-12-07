<?php
// Inclusion du fichier de configuration
require_once __DIR__ . '/config.php';

try {
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s;charset=utf8', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie !"; // Décommentez pour tester
} catch (Exception $exception) {
    die('Erreur de connexion à la base de données : ' . $exception->getMessage());
}
?>