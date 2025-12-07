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
    <div class="container">        
        <h1>Ajouter un commentaire</h1>
        <form action="submit_comment_form.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Votre pseudo</label>
                <input type="text" class="form-control" id="name" name="name">                
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title" name="title">                
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>    
</body>
</html>
