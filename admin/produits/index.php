<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='produits.css'>
    <title>Produits</title>
</head>
<body>
    
    <section >
        <form method="post" action="insert.php" enctype="multipart/form-data">
            <h2>Details du produits</h2>
            <div class="formulaire">
                <div>
                    <label for="nom_produit">Nom Produit:</label>
                    <input type="text" placeholder="entrez le nom du produit" name="nom_prod" id="nom_produit">
                </div>

                <div>
                    <label for="prix_produit">Prix Produit:</label>
                    <input type="text" placeholder="entrez le prix du produit" name="prix_prod" id="prix_produit">
                </div>

                <div>
                    <label for="image">Image Produit:</label>
                    <input type="file" placeholder="choisir une image" name="image_prod" id="img_produit">
                </div>

                <div>
                    <label for="nom_cat">Selectionnez une categories de page</label>
                    <select name="cat_prod" id="nom_cat">
                        <option value="home" >Acceuil</option>
                        <option value="telephone">Telephone</option>
                        <option value="ordinateur">Ordinateur</option>
                        <option value="accessoire">Accéssoires</option>
                    </select>
                </div>
                <div>
                <button type="submit" name="submit">Ajouter</button>
                </div>
            </div>
        </form>
    </section>
    <section class="section1">
        <table>
            <thead>
                <th>Id</th>
                <th>Nom Produits</th>
                <th>Prix Produits</th>
                <th>Image Produits</th>
                <th>Categories Produits</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody>
            
                <?php 
                    include'config.php';

                    $resultat = mysqli_query($connexion, "SELECT * FROM tbprod");

                    while ($row = mysqli_fetch_array($resultat)) {
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[nom_prod]</td>
                            <td>$row[prix_prod]</td>
                            <td>
                                <img src='$row[image_prod]' height= '100px', width= '100px'>
                            </td>
                            <td>$row[cat_prod]</td>
                            <td><a href='modifier.php? ID=$row[id]'>Modifier</a></td>
                            <td><a href='supprimer.php? ID=$row[id]'>Supprimer</a></td>
                        </tr>
                        
                        ";
                    }
                ?>
            </tbody>
            
        </table>
    </section>
</body>
</html>