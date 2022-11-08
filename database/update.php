<?php
//1) connexion DB
require "connexion.inc.php";

//2) récupère les données envoyées par le formulaire

//3) préparer la requête   );

 $sqlQuery = "UPDATE etudiants 
 SET 
 nom = :nom, 
 prenom=:prenom, 
 genre=:genre, 
 bio=:bio 
 WHERE id = :id";
 $marequete = $conn->prepare($sqlQuery);

 
//3) exécuter requête
$marequete->execute(array(
    'id' => $_POST["id"],
    'nom' => $_POST["nom"],
    'prenom' => $_POST["prenom"],
    'genre' => $_POST["genre"],
    'bio' => $_POST["bio"]
)); 

header("location: select.php");