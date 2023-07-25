<?php 
$id = $_GET['ID'];

$connexion =  mysqli_connect('localhost', 'root', '', 'e_commerce');
mysqli_query($connexion, "DELETE FROM `utilisateurs` WHERE id= $id");
header('location:clients.php');

?> 