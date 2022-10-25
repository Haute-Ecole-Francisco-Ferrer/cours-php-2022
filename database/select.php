
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


//5 on boucle à travers les réultats

foreach ($resultat as $row) { ?>


<div class="<?php echo $row['genre']; ?>"><strong><?php echo $row['nom']; ?></strong> - <?php echo $row['prenom']; ?> </div>


 <?php } ?>

