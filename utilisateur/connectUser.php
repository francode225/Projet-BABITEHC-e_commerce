<?php



$user_name = $_POST['login'];
$user_password = $_POST['password'];

$user_name = trim($user_name);
$user_password = trim($user_password);
$connexion =  mysqli_connect('localhost', 'root', '', 'e_commerce');


$resultat = mysqli_query($connexion,"SELECT * FROM `utilisateurs` WHERE nom = '$user_name' OR mail = '$user_name' AND password = '$user_password'");

session_start();
if (mysqli_num_rows($resultat)) {

    $_SESSION['user'] = $user_name;
    echo "
        <script>
            alert('Vous êtes connecté avec succès');
            window.location.href= 'index.php';
        </script>
    
    ";
}else{
    echo "
        <script>
            alert('Mot de passe, login ou email invalide');
            window.location.href= 'connecter.php';
        </script>
    
    ";
}

?>