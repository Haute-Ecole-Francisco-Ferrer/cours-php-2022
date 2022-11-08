<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>


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
foreach ($resultat as $row) {
?>

      <form action="update.php" method="post">
        <input type="text" name="nom" value="<?php echo $row['nom']; ?>">
        <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>">
        <input type="text" name="genre" value="<?php echo $row['genre']; ?>">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <textarea name="bio" id="" cols="30" rows="10" >
            <?php echo $row['bio']; ?>
        </textarea>
        <input type="submit" value="Modifier">


    </form>
     <?php } ?>
</body>
</html>


