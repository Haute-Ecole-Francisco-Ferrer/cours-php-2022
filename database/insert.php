<?php 

// 1 connexion DB
require('connexion.inc.php'); 



$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$genre = $_POST['genre'];


echo $nom.$prenom.$genre;