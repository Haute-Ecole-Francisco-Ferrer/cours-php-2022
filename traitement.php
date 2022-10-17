<?php


echo $_POST["nom"];

session_start();
$_SESSION['nom'] = $_POST["nom"];