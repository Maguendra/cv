<?php
require_once(__DIR__ . '/databaseconnect.php');

$postData = $_POST;

$name = trim($postData['name'] ?? '');
$email = trim($postData['email'] ?? '');
$title = trim($postData['title'] ?? '');
$message = trim($postData['message'] ?? '');
$rating = trim($postData['rating'] ?? '5');

if(empty($name) || empty($title) || empty($email) || empty($message))
{
    echo "il manque des informations pour pouvoir valider votre commentaire.";
    return;
} 

$sqlQuery= 'INSERT INTO comments (pseudo, email, title, message, rating) VALUES (:pseudo, :email, :title, :message, :rating)';
$sqlstatement = $mysqlClient->prepare($sqlQuery);
$sqlstatement->execute([
    'pseudo' => $name,
    'email' => $email,
    'title' => $title,
    'message' => $message,
    'rating' => $rating,
]);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page ajout commentaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="card">
        <h1>Votre commentaire a bien été enregistré !</h1>
        <h2><?php echo htmlspecialchars($title) ?></h2>
        <p><?php echo htmlspecialchars($message); ?></p>
        <small>Par <?php echo htmlspecialchars($name); ?> - Note <?php echo $rating; ?> Etoile(s)</small>
    </div>
    <a href="./index.html">Revenir à la page d'accueil</a>
    <a href="./comment_list.php">Voir la liste des commentaires</a>
</body>
</html>