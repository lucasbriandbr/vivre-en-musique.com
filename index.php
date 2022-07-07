<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des concerts</h1>
    <table>
         <h3><U><a href="Indochine.html">Indochine</a></U></h3>
         <h3><U><a href="Louise_Attaque.html">Louise Attaque</a></U></h3>
         <h3><U><a href="Damso.html">Damso</a></U></h3>
         <h3><U><a href="Angel.html">Angèle</a></U></h3>
<?php

$concertsStatement = $db->prepare('SELECT * FROM concerts');
$concertsStatement->execute();
$concerts = $concertsStatement->fetchAll();

foreach ($concert as $concerts){ ?>
   <div> 
            <h2> <?php echo $concert["nom"]  ?></h2>
            arr.forEach(callback);
    </div>
}

?>
</body>
</html>