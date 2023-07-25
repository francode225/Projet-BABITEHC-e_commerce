<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payement.css"></link>
    <title>Validation de commande</title>
</head>

<body>
        <center><h1>Validation de commande</h1></center>
    <main>
    
        <form action="payement.php" method="post">
        <label for="delivery_type">Mode de payement :</label>
            <select name="payement" id="payement" required>
                <option value="MTN money">MTN money</option>
                <option value="ORANGE money">ORANGE money</option>
                <option value="MOOV money">MOOV money</option>
                <option value="Master Card">Master Card</option>
                <option value="Payer à la livraison">Payer à la livraison</option>
            </select>
            

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="delivery_type">Type de livraison :</label>
            <select name="delivery_type" id="delivery_type" required>
                <option value="point_relai">Point de relai</option>
                <option value="domicile">Domicile</option>
            </select>

            

            
            <input type="submit" name="payer" value="Payer">
            </a>
        </form>
    </main>
    <?php
        if (isset($_POST['payer'])) {
            if ($_POST['payement'] == "Master card")  {
                header('location:https://www.mastercard.fr/fr-fr.html');
            }
            if ($_POST['payement'] == "MOOV money")  {
                header('location:https://www.moov-africa.ci/moov-money/paiement-marchand-green-pay/');
            }
            if ($_POST['payement'] == "ORANGE money")  {
                header('location:https://www.orange.ci/fr/n-orange-money.html');
            }
            if ($_POST['payement'] == "MTN money")  {
                header('location:https://www.mtn.ci/momo/momo-pay/');
            }
            if ($_POST['payement'] == "Payer à la livraison")  {
                echo '
                    <script>
                        alert("Votre commande à été effectuée avec succès");
                        window.location.href= "index.php";
                    </script>
                ';
            }
        }
        

    ?>

    <footer>
        © 2023 BABITECH. Tous droits réservés.
    </footer>
</body>

</html>
