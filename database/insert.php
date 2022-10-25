<?php 

// 1 connexion DB
require('connexion.inc.php'); 



$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$genre = $_POST['genre'];


// 2 préparation de la reqête
$maquery = 'INSERT INTO etudiants(nom, prenom, genre) VALUES (:nom, :prenom, :genre)';

// Préparation
$insertetudiant = $conn->prepare($maquery);

// Exécution ! La recette est maintenant en base de données
$insertetudiant->execute([
    'nom' => $nom,
    'prenom' => $prenom,
    'genre' => $genre
]);

// echo $nom.$prenom.$genre;

header('location: select.php');