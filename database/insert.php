<?php 

// 1 connexion DB
require('connexion.inc.php'); 


// 2 préparation de la reqête
$maquery = 'INSERT INTO etudiants(nom, prenom, genre, monimage, categories) VALUES (:markernom, :markerprenom, :markergenre, :markermonimage, :markermescategories)';

$prepaparationdemarequete = $conn->prepare($maquery);

// 3 Exécution de la requête
$prepaparationdemarequete->execute([
    'markernom' =>  $_POST['nom'],
    'markerprenom' =>  $_POST['prenom'],
    'markergenre' =>  $_POST['genre'],
    'markermonimage' =>  $_FILES['maphoto']['name'],
    'markermescategories' =>  serialize($_POST['categories'])
]);


 move_uploaded_file($_FILES['maphoto']['tmp_name'], 'uploads/' . basename($_FILES['maphoto']['name']));

// redirection vers la page qui affiche tous les étudiants

header('location: select.php');