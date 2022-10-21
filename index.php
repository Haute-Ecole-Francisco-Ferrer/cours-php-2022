<style>
body {
  background: #000;
  color: #fff;
  font-size: 1.5rem
}

</style>

<?php



//https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/connexion-base-donnee-mysqli-pdo/
$servername = "localhost";
$username = "root";
$password = "root";


  try {
    $conn = new PDO("mysql:host=$servername;dbname=coursphp2022", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
  }
            
  /*On capture les exceptions si une exception est lancée et on affiche
   *les informations relatives à celle-ci*/
  catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }

//https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/selectionner-donnee-table/ 
$maQuery = $conn->prepare("SELECT * FROM etudiants");
$maQuery->execute();

$resultat = $maQuery->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($resultat);
// echo '</pre>';

foreach ($resultat as $etudiant) {
  ?>
      <p><?php echo $etudiant['prenom']; ?></p>
  <?php
  }

  $conn = null;



?>


