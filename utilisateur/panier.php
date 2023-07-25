<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='panier.css'>
    <title>Panier</title>
</head>
<body>
        <?php include'header2.php' ?>
    <h1><img src="icons/panier.png" alt=""> Panier</h1>
    <section class="section1">
        
        <table>
            <thead>
                <th>N°.</th>
                <th>Nom Produit</th>
                <th>Prix Produit</th>
                <th>Quantité</th>
                <th>Prix Total</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody>
                
                <?php 
                    $prixtotal= 0;
                    $total = 0;
                    if (isset($_SESSION['panier'])) {
                        foreach ($_SESSION['panier'] as $key => $value) {
                            $key = $key + 1;
                            $prixtotal = $value['prix_produit'] * $value['quantite_produit'];
                            $total += $prixtotal;
                            
                            echo "
                            <form action='insertcart.php' method='post'>
                                <tr>
                                    <td>$key</td>
                                    <td> <input type='hidden' name='nom_prod' value='$value[nom_produit]'>  $value[nom_produit]</td>
                                    <td> <input type='hidden' name='prix_prod' value='$value[prix_produit]' > $value[prix_produit]</td>
                                    <td> <input type='number'  name='qute_prod' min='1'  value='$value[quantite_produit]'> </td>
                                    <td>$prixtotal</td>
                                    <td><input type='submit' name='modif_panier' value='Modifier'></td>
                                    <td><input type='submit' name='supp_panier' value='Supprimer'></td>
                                    <td><input type='text' name='item' value='$value[nom_produit]'></td>
                                </tr>

                            </form>
                            
                            ";
                        }
                        
                    }
                    
                ?>
            </tbody>
        </table>
        <section class="totale">
            <div class="total">
                <h2>TOTAL</h2>
                <h3>
                    = <?php echo number_format($total) ?>
                </h3>
            </div>
        </section>
        <a href="payement.php">
        <input type="button" value = "valider la commande" class="valider">
    </a>
    </section>
    
</body>
</html>