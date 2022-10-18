<?php include("header.php"); ?>

    <?php
     if(isset($_GET['msg'])) { ?>

       <div class="error">

<?php
        if($_GET['msg'] == "mdppasok") {

                echo "vos données de connexion ne sont pas bonnes!";
        }

        elseif($_GET['msg'] == "paslogue") {

                echo "Vous devez être connecté pour accéder à cette page!";
        } ?>
 

       </div>

  <?php  } // msg exists

   

    ?>


<?php

if(!isset($_SESSION['username'])){ ?>

    <form action="connexion.php" method="post">
        <input type="text" name="username" placeholder="Introduisez votre username">
        <input type="text" name="pwd" placeholder="Introduisez votre mot de passe">
        <input type="submit" value="Login">
    </form>
<?php }  ?>


<h1>Accueil</h1>

</body>
</html>