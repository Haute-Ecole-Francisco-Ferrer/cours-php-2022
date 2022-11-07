<?php

// 1 connexion DB
require('connexion.inc.php'); 

// 2 préparation de la requête SQL
$sql = "DELETE FROM etudiants WHERE id=:idaeffacer";
$maquery = $conn->prepare($sql);

// 3 exécution de la requête
$maquery->execute([
    'idaeffacer' => $_GET['idpasseedansurl']
]);


header ("location: select.php");

?>