<?php 

// 1 connexion DB
require('connexion.inc.php'); 


// 2 préparation de la reqête
$maquery = 'INSERT INTO etudiants(nom, prenom, genre) VALUES (:markernom, :markerprenom, :markergenre)';

$insertetudiant = $conn->prepare($maquery);

// 3 Exécution de la requête
$insertetudiant->execute([
    'markernom' =>  $_POST['nom'],
    'markerprenom' =>  $_POST['prenom'],
    'markergenre' =>  $_POST['genre']
]);

// redirection vers la page qui affiche tous les étudiants

header('location: select.php');