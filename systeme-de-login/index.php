<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input {
            width: 200px;
        }


        .error {
            color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>

    <?php
     if(isset($_GET['msg'])) {

   echo  '<h1 class="error">Erreur: recommence</h1>';

    }

        if(isset($_GET['msg2'])) {

   echo  '<h1 class="error">Erreur: recommence</h1>';

    }

    ?>


    <form action="connexion.php" method="post">
        <input type="text" name="username" placeholder="Introduisez votre username">
        <input type="text" name="pwd" placeholder="Introduisez votre mot de passe">
        <input type="submit" value="Login">
    </form>
</body>
</html>