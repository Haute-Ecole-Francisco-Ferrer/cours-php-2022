<?php
//1) connexion DB
require "connexion.inc.php";

//2) récupère les données envoyées par le formulaire

$id = $_POST["id"];
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$genre = $_POST["genre"];


//3) préparer la requête   );

 $sqlQuery = "UPDATE etudiants SET nom = :nom, prenom=:prenom, genre=:genre WHERE id = :id";
 $marequete = $conn->prepare($sqlQuery);

 
//3) exécuter requête
$marequete->execute(array(
    'id' => $id,
    'nom' => $nom,
    'prenom' => $prenom,
    'genre' => $genre
)); 

header("location: select.php");