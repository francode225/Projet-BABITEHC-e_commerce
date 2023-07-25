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
            <h2>Créer un compte</h2>
        </div>
        <form class="form" action="insert.php" method="post" id="form">
            <div class="form-control ">
                <label for="">Nom d'utilisateur</label>
                <input type="text" name="nom" id="username" placeholder="gneneman">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control ">
                <label for="">Email</label>
                <input type="email" name="mail" id="email" placeholder="yeogneneman@gmail.com">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control ">
                <label for="">Telephone</label>
                <input type="number" name="telephone" id="telephone" placeholder="0556894212">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            
            <div class="form-control">
                <label for="">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="mot de passe">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="">Confirmation du mot de passe</label>
                <input type="password" name="repassword" id="password2" placeholder="mot de passe">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <button type="submit" name="enregistrer">Enregistrer</button>
            <a href="connecter.php">deja un compte ?</a>
        </form>
        
    </div>
</body>
</html>