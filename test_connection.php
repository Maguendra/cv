<?php
/**
 * Fichier de test de connexion à la base de données
 * Accédez à ce fichier via : http://localhost/cv/test_connection.php
 */

require_once __DIR__ . '/databaseconnect.php';

echo "<h1>Test de connexion à la base de données</h1>";

try {
    // Test simple : récupérer la version de MySQL
    $query = $mysqlClient->query('SELECT VERSION() as version');
    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    echo "<p style='color: green;'>✅ Connexion réussie !</p>";
    echo "<p>Version MySQL : " . htmlspecialchars($result['version']) . "</p>";
    echo "<p>Hôte : " . MYSQL_HOST . "</p>";
    echo "<p>Base de données : " . MYSQL_NAME . "</p>";
    
    // Lister les tables disponibles
    $query = $mysqlClient->query('SHOW TABLES');
    $tables = $query->fetchAll(PDO::FETCH_COLUMN);
    
    echo "<h2>Tables disponibles :</h2>";
    if (count($tables) > 0) {
        echo "<ul>";
        foreach ($tables as $table) {
            echo "<li>" . htmlspecialchars($table) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucune table trouvée dans cette base de données.</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Erreur : " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>
