<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Précision du concert</title>
    </head>

    <body>

        <?php

            //  connexion à la base de données mysql

            try {
                $db = new PDO(
                    'mysql:host=localhost/dataBase;dbname=concerts;charset=utf8',   //  Connexion avec les précisions de path
                    'root', //  Login
                    'root', //  MotDePasse
                );
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        
        ?>

        <?php

            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                $url = "https"; 
            else
                $url = "http"; 
                
            // Ajoutez // à l'URL.
            $url .= "://"; 
                
            // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
            $url .= $_SERVER['HTTP_HOST']; 
                
            // Ajouter l'emplacement de la ressource demandée à l'URL
            $url .= $_SERVER['REQUEST_URI']; 

        ?>

        <h1>Précisions sur ce concert</h1>

        <?php

            //  On prépare notre requête MySql

            $concertsStatement = $db->prepare('SELECT FROM concerts WHERE id = :'.);
            $concertsStatement->execute();
            $concerts = $concertsStatement->fetchAll();

            // On affiche le concert et ses paramètres

            // foreach ($concerts as $concert) {
            //     ?>
            //         <div>
            //             <h3><?php echo $concert['nom']; ?></h3>
            //             <p><?php echo $concert['ville']; ?></p>
            //             <p><?php echo $concert['prix']; ?></p>
            //             <p><?php echo $concert['dateDuConcert']; ?></p>
            //             <form action="index.php">
            //                 <input type="submit" name="edit" value="edit" onclick="editFunction($concert['id'])"/>
            //                 <input type="submit" name="delete" value="delete" onclick="deleteFunction($concert['id'])"/>
            //             </form>
            //         </div>
            //     <?php
            // }

        ?>

    </body>

</html>