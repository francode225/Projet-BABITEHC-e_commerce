<?php
session_start();

$connexion = mysqli_connect('localhost', 'root', '', 'e_commerce');

$admin_name = $_POST['login'];
$admin_password = $_POST['password'];

$admin_name = trim($admin_name);
$admin_password = trim($admin_password);

$resultat = mysqli_query($connexion, "SELECT * FROM `admin` WHERE login = '$admin_name' AND password = '$admin_password'");

if ($resultat) {
    if (mysqli_num_rows($resultat) > 0) {
        $_SESSION['admin'] = $admin_name;

        echo "
            <script>
                alert('Vous êtes connecté avec succès');
                window.location.href= '../boutique.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Mot de passe ou Login invalide');
                window.location.href= 'connecter.php';
            </script>
        ";
    }
} else {
    echo "Erreur de requête SQL : " . mysqli_error($connexion);
}

?>