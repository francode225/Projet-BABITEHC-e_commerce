<?php 
$id = $_GET['ID'];
include 'config.php';

mysqli_query($connexion, "DELETE FROM `tbprod` WHERE id= $id");
header('location:index.php');

?> 