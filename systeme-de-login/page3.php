<?php 

session_start();
if(isset($_SESSION['username'])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue <?php echo $_SESSION['username'];  ?></h1>
</body>
</html>

<?php } else {

echo 'vous devez être connecté pour accéder à cette page';

} ?>