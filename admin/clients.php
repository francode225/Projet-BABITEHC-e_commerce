<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='produits/produits.css'>
    <title>liste des clients</title>
</head>
<body>
    <main>
    <?php 
        include 'boutique.php';
    ?>

    </main>
        
<section class="section1">
        <table>
            <thead>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Supprimer</th>
            </thead>
            <tbody>
            
                <?php 
                    $connexion =  mysqli_connect('localhost', 'root', '', 'e_commerce');
                    $resultat = mysqli_query($connexion, "SELECT * FROM utilisateurs");
                    $nombre_client = mysqli_num_rows($resultat);
                    $i = 0;
                    while ($row = mysqli_fetch_array($resultat)) {
                        
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[nom]</td>
                            <td>$row[mail]</td>                           
                            <td>$row[telephone]</td>
                            <td><a href='suppclient.php? ID=$row[id]'>Supprimer</a></td>
                        </tr>
                        
                        ";
                    }
                ?>
            </tbody>
            
        </table>
    </section>
    <section class="total">
        <div class="totale">
                <h3>TOTAL</h3>
                <h4><?php echo '= '.$nombre_client; ?></h4>
        </div>
    </section>
</body>
</html>