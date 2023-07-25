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
                    echo 'Bienvenue '. $_SESSION['user'].'___';
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
            <h3> <?php echo '_'.$compteur ?></h3>
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