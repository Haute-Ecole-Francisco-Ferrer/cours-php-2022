<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

  <header>
<nav>



    <ul>
        <li><a href="index.php">Accueil</a></li>



            <?php
session_start();
if(isset($_SESSION['username'])){ ?>
        <li><a href="page1.php">page 1</a></li>
        <li><a href="page2.php">page 2</a></li>
        <li><a href="page3.php">page 3</a></li>
        <li><a href="page3.php"><strong>(<?php echo $_SESSION['username']; ?>)</strong></a></li>



<li><a href="deconnexion.php">Deconnexion</a></li>

<?php }   ?>


    </ul>

</nav>

 </header>   
