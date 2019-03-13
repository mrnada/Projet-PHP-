<?php
//PDO 
/*$host = '127.0.0.1';
$db   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';*/
//Connexion
try{
    $conn=new PDO('mysql:host=127.0.0.1; dbname=bdd', 'root', ''); //('mysql:host = 127.0.0.1; dbname = bdd' - sois on mettre l'espace à deux cotés ou pas d'espaces du tout
    // Pour récupérer les erreurs lorsqu’elles se produisent, il faut ajouter le code suivant :
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
    echo'Connexion réussie'."<br>";

}catch(Exception $e){
    die('Erreur: '.$e->getMessage());
}finally{
    //$conn= null;
}
?>
