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

        <h1>Liste des concerts disponibles</h1>

        <?php

            //  connexion à la base de données mysql

            try {
                $mysqlConnexion = new PDO(
                    'mysql:host=localhost/dataBase;dbname=concerts;charset=utf8',   //  Connexion avec les précisions de path
                    'root', //  Login
                    'root', //  MotDePasse
                );
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        
        ?>

        <!-- <?php

        $concertsStatement = $db->prepare('SELECT * FROM concerts');
        $concertsStatement->execute();
        $concerts = $concertsStatement->fetchAll();

        foreach ($concert as $concerts){ ?>
        <div> 
                    <h2> <?php echo $concert["nom"]  ?></h2>
                    arr.forEach(callback);
            </div>
        }

        ?> -->

    </body>

</html>