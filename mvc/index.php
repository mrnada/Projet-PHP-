<?php
//Front controlleur
//Inclusion de notre connection
require_once("common/connect.php");

//Inclusion de notre class Entity
require_once("modeles/Entity.class.php");

//Inclusion de notre Driver
require_once("modeles/Driver.class.php");

//Instanciation de notre class Driver et de notre méssage d'affichage
$driver = new Driver($conn);

$action = "";
if(isset($_GET['action'])){
    if($_GET['action'] == "add"){
        require_once('controllers/AddController.php');
    }else if($_GET['action'] == "edit"){
        //$contenu = $driver->edit($_GET['Id_personne']);
        require_once('controllers/EditController.php');
    }else if($_GET['action'] == "delete"){
        require_once('controllers/DeleteController.php');
    }
}else{
    require_once('controllers/ListesController.php');
}

?>