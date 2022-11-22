<?php

require('../sneakers/connexion.inc.php'); 

$maquery = $conn->prepare("SELECT password FROM users WHERE username = :usernamerecu ");

// 3 exécution de la requête
$maquery->execute([
    "usernamerecu" => $_POST["usernameform"]
]);    
// 4 stocker les résultats dans un array
$resultat = $maquery->fetchAll(PDO::FETCH_ASSOC); 

foreach ($resultat as $row) { 

    if( $_POST["pwdform"] == $row["password"]) {

         echo "ok c'est bon";

    } else {
        echo "PAS bon";
    }

   

}