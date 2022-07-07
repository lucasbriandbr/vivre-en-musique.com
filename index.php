<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des concerts</title>
    </head>

    <body>

        <h1>Liste des concerts</h1>

        <table>
            <h3><a href="Indochine.html">Indochine</a></h3>
            <h3><a href="Louise_Attaque.html">Louise Attaque</a></h3>
            <h3><a href="Damso.html">Damso</a></h3>
            <h3><a href="Angel.html">Angèle</a></h3>
        </table>

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

        <h1>Liste des concerts disponibles</h1>

        <?php

            //  On prépare notre requête MySql

            $concertsStatement = $db->prepare('SELECT * FROM concerts');
            $concertsStatement->execute();
            $concerts = $concertsStatement->fetchAll();

            // On affiche chaque concert un à un

            foreach ($concerts as $concert) {
                ?>
                    <a href="/<?php echo $concert['id'];?>">
                        <div>
                            <h3><?php echo $concert['nom']; ?></h3>
                            <p><?php echo $concert['ville']; ?></p>
                            <p><?php echo $concert['prix']; ?></p>
                            <p><?php echo $concert['dateDuConcert']; ?></p>
                            <form action="index.php">
                                <input type="submit" name="edit" value="edit" onclick="editFunction($concert['id'])"/>
                                <input type="submit" name="delete" value="delete" onclick="deleteFunction($concert['id'])"/>
                            </form>
                        </div>
                    </a>
                <?php
            }

        ?>

        <?php

            //  Ajout de la fonction de suppression

            function deleteFunction($id) {
                
                $deleteConcertsStatement = $db->prepare('DELETE FROM concerts WHERE id = :'.$id);
                $deleteConcertsStatement->execute();
            }

            //  Ajout de la fonction de modification

            function editFunction($id,$modificationNom) {
                
                $deleteConcertsStatement = $db->prepare('UPDATE concerts SET nom = :'.$modificationNom.' WHERE id = '.$id);
                $deleteConcertsStatement->execute();
            }
        
        ?>

    </body>

</html>