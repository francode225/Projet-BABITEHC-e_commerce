<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="awesome/css/all.min.css">
    <link rel="stylesheet" href="styleform.css">
    <script src=""></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Se connecter</h2>
        </div>
        <form action="connectUser.php" class="form" id="form" method="post" enctype="multipart/form-data">
            <div class="form-control ">
                <label for="username">Login ou Email</label>
                <input type="text" id="username" placeholder="entrez votre login" name="login">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            
            <div class="form-control">
                <label for="">Mot de passe</label>
                <input type="password" id="password" placeholder="entrez votre mot de passe" name="password">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            
            <button type="submit"> <i class="fas fa-user-plus"></i>Se connecter</button>
            <a href="enregistrer.php">pas de compte ?</a>
        </form>
    </div>
    <script>
        
    </script>
</body>
</html>