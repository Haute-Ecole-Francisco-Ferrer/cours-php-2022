<?php
require('connexion.inc.php'); 


$sql = "DELETE FROM etudiants WHERE id=':idaeffacer'";
$maquery = $conn->prepare($sql);
$maquery->execute([
    'idaeffacer' => 
]);


header ("location: select.php");

?>