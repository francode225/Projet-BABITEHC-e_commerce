<?php 
$connexion = mysqli_connect('localhost', 'root', '', 'e_commerce');
if (isset($_POST['enregistrer']) &&
    !empty($_POST['nom']) &&
    !empty($_POST['mail']) &&
    !empty($_POST['telephone']) &&
    !empty($_POST['password']) &&
    !empty($_POST['repassword'])
) {
    $nom = $_POST['nom'];
    $email = $_POST['mail'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $nom = trim($nom);
    $telephone = trim($telephone);
    $password = trim($password);
    $repassword = trim($repassword);

    if ($password === $repassword) {
        $h_password = password_hash($password, PASSWORD_DEFAULT);

        
        $exist_email = mysqli_query($connexion, "SELECT * FROM `utilisateurs` WHERE mail= '$email' " );
        $exist_nom = mysqli_query($connexion, "SELECT * FROM `utilisateurs` WHERE nom= '$nom' " );
        $exist_tel = mysqli_query($connexion, "SELECT * FROM `utilisateurs` WHERE telephone= '$telephone' " );
        if (mysqli_num_rows($exist_email)) {
            echo "
            <script>
                alert('Cet email est deja pris');
                window.location.href= 'enregistrer.php';
            </script>
        ";
        }
        if (mysqli_num_rows($exist_nom)) {
            echo "
            <script>
                alert('Cet nom est deja pris');
                window.location.href= 'enregistrer.php';
            </script>
        ";
        }
        if (mysqli_num_rows($exist_tel)) {
            echo "
            <script>
                alert('Cet numero de telephone est deja pris');
                window.location.href= 'enregistrer.php';
            </script>
        ";
        }
        else{
            $stmt = mysqli_prepare($connexion, "INSERT INTO `utilisateurs`(`nom`, `mail`, `telephone`, `password`) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "ssss", $nom, $email, $telephone, $h_password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        echo "
        <script>
            alert('Enregistré avec succes');
            window.location.href= 'connecter.php';
        </script>
        ";

        

    } else {
        echo "
        <script>
            alert('Les mots de passe sont differents.');
            window.location.href= 'enregistrer.php';
        </script>
        ";
    }
}
else {
    echo "
        <script>
            alert('Certains champs sont vides');
            window.location.href= 'enregistrer.php';
        </script>
        ";
}




?>