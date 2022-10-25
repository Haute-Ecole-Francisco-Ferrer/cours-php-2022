
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<a href="select.php?genre=feminin">feminin</a>
<a href="select.php?genre=masculin">masculin</a>
<a href="select.php">Tous</a><hr>

<a href="index.php">accueil</a>


<style>
.feminin {
    color: blue;
}


.masculin {
    color: pink;
}


    </style>

<?php 

// 1 connexion DB
require('connexion.inc.php'); 


// if(isset($_GET['genre'])) {
// $maquery = $conn->prepare("SELECT * FROM etudiants WHERE genre = :markergenre  ORDER BY nom ");
// $maquery->execute([
//     'markergenre' => $_GET['genre']
// ]);
// } else {
// $maquery = $conn->prepare("SELECT * FROM etudiants ORDER BY nom ");
// $maquery->execute();
// }

$maquery = $conn->prepare("SELECT * FROM etudiants ");
$maquery->execute();    

// 2 préparation de la requête
// $maquery = $conn->prepare("SELECT * FROM etudiants ORDER BY nom ASC");





// 3 exécution de la requête







// 4 stocker les résultats dans un array
$resultat = $maquery->fetchAll(PDO::FETCH_ASSOC); 

// echo '<pre>';
// print_r($resultat);
// echo '</pre>'; 

?>
<div class="container">
<table class="table table-striped">
<tr><th>id</th><th>nom</th><th>prénom</th><th>genre</th><th>modifier</th><th>supprimer</th></tr>

<?php
//5 on boucle à travers les réultats

foreach ($resultat as $row) { ?>

<tr><td><?php echo $row['id']; ?></td><td><?php echo $row['nom']; ?></td><td><?php echo $row['prenom']; ?></td><td><?php echo $row['genre']; ?></td><td>modifier</td><td>supprimer</td></tr>



 <?php } ?>

</table>
</div>





