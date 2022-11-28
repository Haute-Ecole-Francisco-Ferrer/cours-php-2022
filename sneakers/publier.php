<?php

require('connexion.inc.php'); 

// echo $_GET['id'];


 $sqlQuery = "UPDATE sneakers 
 SET 
 publie = :publie
 WHERE id = :id";
 $marequete = $conn->prepare($sqlQuery);

 
//3) exécuter requête
$marequete->execute(array(
    'id' => $_GET["id"],
    'publie' => 1
)); 


header('location: index.php');






