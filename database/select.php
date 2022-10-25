<!-- 
<a href="select.php?genre=feminin">feminin</a>
<a href="select.php?genre=masculin">masculin</a>
<a href="select.php">Tous</a> -->


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

// if (isset($_GET['genre'])) {

// $genre = $_GET['genre'];
// $maquery = $conn->prepare("SELECT * FROM etudiants WHERE genre = '$genre'");


// } else {

// $maquery = $conn->prepare("SELECT * FROM etudiants");

// }

// 2 préparation de la requête
// $maquery = $conn->prepare("SELECT * FROM etudiants ORDER BY nom ASC");
$maquery = $conn->prepare("SELECT * FROM etudiants  ORDER BY nom ");

// 3 exécution de la requête
$maquery->execute();

// 4 stocker les résultats dans un array
$resultat = $maquery->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($resultat);
// echo '</pre>';


// echo $resultat[2]['prenom'];

// echo '<hr>';

// echo $resultat[2]['prenom'];

//5 on boucle à travers les réultats

foreach ($resultat as $row) { ?>


<div class="<?php echo $row['genre']; ?>"><strong><?php echo $row['nom']; ?></strong> - <?php echo $row['prenom']; ?> </div>


 <?php }



?>

