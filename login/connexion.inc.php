 <?php
          
          // local
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'coursphp22_23';


          // // remote
            // $servername = 'localhost';
            // $username = 'uhti7837_samy';
            // $password = 'JqZFXx8rt+LO';
            // $database = 'uhti7837_samy';
              
            
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo 'Connexion réussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>