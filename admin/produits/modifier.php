<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='produits.css'>
    <title>Produits</title>
</head>
<body>
    <?php
    $id = $_GET['ID'];
    include 'config.php';
    $requete = mysqli_query($connexion, "SELECT * FROM `tbprod` WHERE  id = $id" );
    $donnees = mysqli_fetch_array($requete);
    ?>
    <section >
        <form method="post" action="modifier.php" enctype="multipart/form-data">
            <h2>Details du produits</h2>
            <div class="formulaire">
                <div>
                    <label for="nom_produit">Nom Produit:</label>
                    <input type="text" value="<?php echo $donnees['nom_prod']?>"  name="nom_prod" id="nom_produit">
                </div>

                <div>
                    <label for="prix_produit">Prix Produit:</label>
                    <input type="text" value="<?php echo $donnees['prix_prod']?>" name="prix_prod" id="prix_produit">
                </div>

                <div>
                    <label for="image">Image Produit:</label>
                    <input type="file" placeholder="choisir une image" name="image_prod" id="img_produit">
                    <img src="<?php echo $donnees['image_prod']?>"  style="height: 100px; width: 100px; ">
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
                    <input type="hidden" name="id_prod" value="<?php echo $donnees['id']?>">
                <button type="submit" name="modifier">Modifier</button>
                </div>
            </div>
        </form>
    </section>
    

    <!-- mettre a jour les informations produits -->
    <?php  
        if (isset($_POST['modifier'])) {
            
            $nom_produit = $_POST['nom_prod'];
            $prix_produit = $_POST['prix_prod'];
            $image_produit = $_FILES['image_prod'];
            $categorie_produit = $_POST['cat_prod'];
            $src_image = $_FILES['image_prod']['tmp_name'];
            $nom_image = $_FILES['image_prod']['name'];
            
                $image = "images/".$nom_image;
            move_uploaded_file($src_image, $image);

            include 'config.php';
            mysqli_query($connexion, " UPDATE `tbprod` SET `id`='$id',`nom_prod`='$nom_produit',`prix_prod`='$prix_produit',`image_prod`='$image',`cat_prod`='$categorie_produit' WHERE id= $id ");
            header('location:index.php');
        }
    ?>
</body> 
</html>
