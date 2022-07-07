<?php
$dbname;
$dbpass;
$dbuser;
try {
    $bdd = new PDO(
        'mysql:host=localhost;dbname='.$dbname.';charset=utf8',
        $dbuser,$dbpass);
}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());

}
?>