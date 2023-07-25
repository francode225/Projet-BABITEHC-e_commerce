<?php

session_start();
//session_destroy();

if (isset($_SESSION['user'])) {
    

if (!isset($_SESSION['panier']) || !is_array($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

$nom_produit = $_POST['nom_prod'];
    $prix_produit = $_POST['prix_prod'];
    $quantite_produit = $_POST['qute_prod'];
if (isset($_POST['ajoutpanier']) && !empty($_POST['qute_prod'])) {
    $verifie_produit = array_column($_SESSION['panier'], 'nom_produit');
    if (in_array($nom_produit, $verifie_produit)) {
        echo "
        <script>
            alert('Produit dejà ajouté');
            window.location.href= 'index.php';
        </script>
        ";
    }

    else{
    $_SESSION['panier'][] = array('nom_produit' => $nom_produit, 
                                'prix_produit' => $prix_produit, 
                                'quantite_produit' => $quantite_produit );
                                header("location:index.php");
    }
}else {
    echo "
        <script>
            alert('Entrez la quantité');
            window.location.href= 'index.php';
        </script>
    
    ";
}

// supprimer un element du panier
if (isset($_POST['supp_panier'])) {
    foreach ($_SESSION['panier'] as $key => $value) {
        if ($value['nom_produit'] === $_POST['item']) {
            unset($_SESSION['panier'][$key]);
            $_SESSION['panier'] = array_values($_SESSION['panier']);
            header('location:panier.php');
        }
    }
}

// modifier un element du panier

if (isset($_POST['modif_panier'])) {
    foreach ($_SESSION['panier'] as $key => $value) {
        if ($value['nom_produit'] === $_POST['item']) {
            $_SESSION['panier'][$key] = array('nom_produit' => $nom_produit, 
                                                'prix_produit'=> $prix_produit, 
                                                'quantite_produit' => $quantite_produit);
                                                header('location:panier.php');
        }
    }
}

}
else {
    header("location:connecter.php");
}

?>