<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php

require('connexion.inc.php'); 

// 2 préparation de la requête
// $maquery = $conn->prepare("SELECT * FROM etudiants ORDER BY nom ASC");
$maquery = $conn->prepare("
SELECT *,
sneakers.id as iddemasneakers, 
sneakers.nom as nomsneakers,
marques.nom as nommarque
FROM sneakers 
LEFT JOIN marques ON sneakers.idmarque = marques.id


");

// 3 exécution de la requête
$maquery->execute();    
// 4 stocker les résultats dans un array
$resultat = $maquery->fetchAll(PDO::FETCH_ASSOC); 

?>

<table class="table table-striped">
<tr>
    <th>id</th>
    <th>image</th>
    <th>nom</th>
    <th>idmarque</th>
    <th>publie</th>
    <th>a la une</th>
</tr>
<?php
//5 on boucle à travers les réultats

foreach ($resultat as $row) { ?>

<tr>
    <td><?php echo $row['iddemasneakers']; ?></td>
    <td><img src="uploads/<?php echo $row['photo']; ?>" width="50" alt="<?php echo $row['nomsneakers']; ?>" title="<?php echo $row['nomsneakers']; ?>"></td>
    <td><?php echo $row['nomsneakers']; ?></td>
    <td><?php echo $row['nommarque']; ?></td>
    <td>
        

        <?php if($row['publie'] == 0) {  ?>
        
        <a href="publier.php?id=<?php echo $row['iddemasneakers']; ?>">publier</a>
        <?php } else { ?>
        <a href="depublier.php?id=<?php echo $row['iddemasneakers']; ?>">dépublier</a>


         <?php } ?>
        
        
        
        
        </td>
    <td><a href="une.php?id=<?php echo $row['iddemasneakers']; ?>">mettre a la une</a></td>
</tr>


 <?php } ?>
    
</body>
</html>