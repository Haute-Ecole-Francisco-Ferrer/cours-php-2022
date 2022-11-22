<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_GET["msg"])){


if($_GET["msg"] == "erreurlogin") {
    echo '<h1>erreur de login</h1>';
}
if($_GET["msg"] == "connexionnecessaire") {
    echo '<h1>vous devez être logué pour accéder à cette page</h1>';
}




}// if isset

?>



    <form action="login.php" method="post">
        <input type="text" name="usernameform" placeholder="Introduisez votre username">
        <input type="text" name="pwdform" placeholder="Introduisez votre mot de passe">
        <input type="submit" value="GO">
    </form>
    
</body>
</html>