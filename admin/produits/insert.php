<?php

if (isset($_POST["submit"]) &&
    !empty($_POST['nom_prod']) &&
    !empty($_POST['prix_prod']) &&
    !empty($_POST['cat_prod']) &&
    !empty($_FILES['image_prod']['name'])) {

    include'config.php';
    $nom_produit = $_POST['nom_prod'];
    $prix_produit = $_POST['prix_prod'];
    $image_produit = $_FILES['image_prod'];
    $categorie_produit = $_POST['cat_prod'];
    $src_image = $_FILES['image_prod']['tmp_name'];
    $nom_image = $_FILES['image_prod']['name'];
    
        $image = "images/".$nom_image;
    move_uploaded_file($src_image, $image);

    // ajout de produit
    $requete = "INSERT INTO tbprod (nom_prod, prix_prod, image_prod, cat_prod) VALUES('$nom_produit', '$prix_produit', '$image','$categorie_produit')";
    
    $query = mysqli_query($connexion, $requete);
    header("location:index.php");

}else {
    echo "
        <script>
            alert('Saisissez tous les champs pour enregister les produits');
            window.location.href= 'index.php';
        </script>
    
    ";
}

?>

