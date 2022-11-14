
<?php

//  print_r($_POST['vehicle']);



 echo serialize($_POST['vehicle']);



// $vehicle = $_POST['vehicle'];

foreach ($vehicle as $voiture ){

    echo $voiture."<br>";

}


