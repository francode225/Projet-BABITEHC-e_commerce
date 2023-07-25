<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <?php
        include 'header.php'; 
        include 'config.php';
    ?>
    
    <section class="acceuil">
        <h1>Acceuil</h1>
    </section>
    
    <section class='cards'>
        <div class='card_row'>
            
        <?php 
        $resultat = mysqli_query($connexion, "SELECT * FROM `tbprod`");
        while ($row = mysqli_fetch_array($resultat)) {
            echo "
            <form action='insertcart' method='post'>
                <div class='card'>
                    <img src='$row[image_prod]' alt='''>
                    <div class='infos'>
                        <h3>$row[nom_prod]</h3>
                        <h4>$row[prix_prod] F CFA</h4>
                        <input type='hidden' name='nom_prod' value='$row[nom_prod]' readonly>
                        <input type='hidden' name='prix_prod' value='$row[prix_prod]' readonly>
                        <input type='number'  name='qute_prod' min='1' value= ' min='1' max= '50'' placeholder='Quantité'>
                        <input type='submit' class='btn' name='ajoutpanier' value='Ajouter au panier'>
                    </div>
                </div>
            </form>
            ";
        }

    ?>
            
        </div>
        
    </section>

    
</body>
</html>