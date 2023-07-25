<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>header</title>
</head>
<body>
    <?php
        session_start();
        $compteur = 0;
        if (isset($_SESSION['panier'])) {
            $compteur = count($_SESSION['panier']);
        }
    ?>
    <header>
        <a href="" class="logo">BabiTech</a>
        <div class="menu_btn"></div>
        <nav class="naviguation">
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="aide.php">Aide</a>
            </div>
        </nav>
        
        <div class="admin">
            <img src="icons/connexion.png" alt="">
            <h3> <?php  
                if (isset($_SESSION['user'])) {
                    echo 'Bienvenue'. $_SESSION['user'].'___';
                    echo "

                    <div class='bouton2'>
                    <img src='icons/se-deconnecter.png' class='icon' alt=''>
                        <a href='deconnecter.php'>Se Deconnecter</a>
                    </div>
                    ";
                }else{
                    echo "
                    <div class='bouton'>
                        <a href='connecter.php'>Se Connecter</a>
                    </div>
                    
                    ";
                }
                ?></h3>
        </div>
        <a href="panier.php">
        <div class="panier">
            <h3> <?php echo  '_'.$compteur ?></h3>
            <a href="panier.php">
                <img src="icons/panier.png" alt="">
            </a>
        </div>
        </a>
        <div class="admin">
            <img src="icons/admin.png" alt="">
            <a href="../admin/boutique.php">admin</a>
        </div>
    </header>
    <section class="home">
        <video src="videos/video.mp4" autoplay muted loop></video>
        <div class="container">
            <h1>Bienvenue sur <br><span>BabiTech</span></h1>
            <a href="enregistrer.php">S'enregistrer</a>
        </div>
    </section>
    <section class="mini_menu">
        <a href="smartphones.php" >Smartphones</a>
        <a href="ordinateurs.php">Ordinateurs</a>
        <a href="accessoires.php">Accessoires</a>
    </section>

    <script type="text/javascript">
        const menubtn = document.querySelector(".menu_btn");
        const naviguation = document.querySelector(".naviguation");
        menubtn.addEventListener("click", ()=>{
            // creaction de la classe activé
            menubtn.classList.toggle("active");
            naviguation.classList.toggle("active");
        });
    </script>
</body>
</html>