<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="traitement.php" method="post">
<input type="text" name="nom" >
<textarea  name="message" id="" cols="30" rows="10"></textarea>
<!-- <input type="text" name="age"> -->
<input type="submit" value="GO!">
<a href="traitement.php?prenom=samy&age=119">vers ma page traiement</a>

</form>
<a href="traitement.php?nom=samy">lien vers ma page traitement</a>

</body>
</html>


<hr>


<?php

// $cars = array("Volvo", "BMW", "Toyota");
$cars = ["Volvo", "BMW", "Toyota", "Porsche", "Skoda", "Citroen", "Rania"];

// $nombre =  count($cars);
// // echo $nombre;
// sort($cars);


// // $cars = sort($cars);


// for($i = 0; $i < $nombre; $i++) {

//    echo $cars[$i]."<br>";

// }

// print_r($cars);

// echo $cars[0];

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// $ages = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

// ksort($ages);


// $prenom = "Volvo";

// if (in_array($prenom, $cars))
// {
//     echo "$prenom se trouve dans array !";
// } else {
//     echo "$prenom NE SE TROUVE PAS  dans array !";
// }

// $texte = "salut ça va zazz?";

// $longueur = strlen($texte);

// echo $longueur;


if(isset($_GET["age"])) {
echo $_GET["age"];
}





//  echo $ages["Ben"];


// echo $ages;
// print_r($ages);

// foreach($ages as $key => $value ) {

//     echo $key.' a '.$value.' ans <br>';

// }



// var_dump($cars);

//  $arrlength  = count($cars);
// //  echo $arrlength.'<br>' ;


// for($i = 0; $i < $arrlength; $i++) {
//   echo $cars[$i].'<br>';

// // echo "i vaut ".$i."<br>";
// }



// var_dump($cars);



// une condition compliquée




?>

<?php
// var e= "eee" 
// var ttt = e || "Valeur ddefault"

// function truc($nom = "fred", $age =30) {

//     echo "salut $nom tu as $age age";
// }

// truc(age:40);

?>

