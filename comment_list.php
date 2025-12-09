<?php
require_once(__DIR__ . '/databaseconnect.php');
$sqlQuery = 'SELECT * FROM comments';
$sqlstatement = $mysqlClient->prepare($sqlQuery);
$sqlstatement->execute();
$comments = $sqlstatement->fetchAll();

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
<body class="d-flex flex-column max-vh-50">
    <?php foreach( $comments as $comment): ?>
    <div class="card mb-3">        
        <div class="card-body">
            <h5><?php echo htmlspecialchars($comment['title']); ?></h5>
            <p><?php echo htmlspecialchars($comment['message']); ?></p>
            <small>Par <?php echo htmlspecialchars($comment['pseudo']); ?> - Note <?php echo $comment['rating']; ?> Etoile(s)</small>
        </div>
    </div>
    <?php endforeach; ?>   
        
</body>
</html>
