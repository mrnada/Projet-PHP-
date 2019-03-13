<?php
require_once('connex.php');

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=bdd",'root','');
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo '<b>Connexion</b> réussie.<br>';

//catcher si Erreur - objet de la class Exception
}catch(Exception $e){
    // die('Erreur : '.$e->getMessage());
    die("<b>ERREUR</b> : Veuillez contacter l'administateur");

}finally{
    // $conn = null; //fermeture de la connexion
}

?>