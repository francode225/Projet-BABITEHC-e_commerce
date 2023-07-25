
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../admin/boutique.css'>
</head>
<?php 
    session_start();
    if (!$_SESSION['admin']) {
        header('location:form/connecter.php');
    }
?>

<body>
    <header>
        <a href="" class="logo">BabiTech</a>
        
        
        <div class="admin">
            <img src="../utilisateur/icons/admin.png" alt="">
            <h3>Hello, <?php echo $_SESSION['admin'] ?>
            </h3>
        </div>
        <h2>|</h2>
        <div class="admin">
            <img src="../utilisateur/icons/panier.png" alt="">
            <a href="../utilisateur/index.php">boutique</a>
        </div>
        <div class="admin">
            <img src="../utilisateur/icons/se-deconnecter.png" alt="">
            <a href="form/deconnecter.php" >Se deconnecter</a>
        </div>
    </header>
    <main>
        <h1>Dashboard</h1>

        <div class="btn">
            <a href="produits/index.php">Ajouter un produit</a>
            <a href="clients.php">Afficher Clients</a>
        </div>
    </main>
</body>
</html>