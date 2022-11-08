<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
// 1 connexion DB
require('connexion.inc.php'); 
// 2 préparation de la requête
$maquery = $conn->prepare("SELECT * FROM etudiants WHERE id = :markerid");
// 3 exécution de la requête
$maquery->execute([
    'markerid' => $_GET['idpasseedansurl']
 ]);    
// 4 stocker les résultats dans un array
$resultat = $maquery->fetchAll(PDO::FETCH_ASSOC); 
foreach ($resultat as $row) {} ?>
<body>
    



<h1>nom: <?php echo $row['nom']; ?></h1>
<h1>prénom: <?php echo $row['prenom']; ?></h1>
<p>Bio: <?php echo $row['bio']; ?></p>


<img src="uploads/<?php echo $row['monimage']; ?>" alt="">


 <?php  ?>

</body>
</html>