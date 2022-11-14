
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




// 2 préparation de la requête
// $maquery = $conn->prepare("SELECT * FROM etudiants ORDER BY nom ASC");
$maquery = $conn->prepare("SELECT * FROM etudiants ");

// 3 exécution de la requête
$maquery->execute();    
// 4 stocker les résultats dans un array
$resultat = $maquery->fetchAll(PDO::FETCH_ASSOC); 

// echo '<pre>';
// print_r($resultat);
// echo '</pre>'; 

?>
<div class="container">
<table class="table table-striped">
<tr>
    <th>id</th>
    <th>image</th>
    <th>nom</th>
    <th>prénom</th>
    <th>genre</th>
    <th>catgories</th>
    <th>modifier</th>
    <th>supprimer</th>
</tr>

<?php
//5 on boucle à travers les réultats

foreach ($resultat as $row) { ?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><img src="uploads/<?php 
    
    if($row['monimage'] == "") {
        echo 'avatar.png';
    } else {
        echo $row['monimage'];
    }
    
    
    
    
    
     ?>" width="50" alt=""></td>
    <td><a href="detail_etudiant.php?idpasseedansurl=<?php echo $row['id']; ?>"><?php echo $row['nom']; ?></a></td>
    <td><?php echo $row['prenom']; ?></td>
    <td><?php echo $row['genre']; ?></td>
    <td><?php 
    
    
    $arraycategories = unserialize($row['categories']); 
   

    foreach ($arraycategories as $categorie) {

                echo $categorie." ";
    }
    
    
    
    
    
    
    ?></td>
    <td><a href="modifier.php?idpasseedansurl=<?php echo $row['id']; ?>">modifier</a></td>
    <td><a href="delete.php?idpasseedansurl=<?php echo $row['id']; ?>">supprimer</a></td>
</tr>



 <?php } ?>

</table>
  <form action="insert.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="genre" placeholder="genre">
        <input type="file" name="maphoto" >

    <BR>    

<?php 
// 2 préparation de la requête
// $maquery = $conn->prepare("SELECT * FROM etudiants ORDER BY nom ASC");
$maquery = $conn->prepare("SELECT nom FROM categories ");

// 3 exécution de la requête
$maquery->execute();    
// 4 stocker les résultats dans un array
$resultat = $maquery->fetchAll(PDO::FETCH_ASSOC); 

foreach ($resultat as $row) { ?>



<input type="checkbox" name="vehicle[]" value="<?php echo $row['nom']; ?>">
<label for="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></label><br>

<!-- <input type="checkbox" name="vehicle[]" value="Car">
<label for="vehicle2"> I have a car</label><br>

<input type="checkbox" name="vehicle[]" value="Boat">
<label for="vehicle3"> I have a boat</label><br> -->

<?php } ?>



        <input type="submit" value="inserer">


    </form>
</div>





