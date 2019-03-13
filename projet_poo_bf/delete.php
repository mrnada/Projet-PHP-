<?php
require_once('connex.php');
require_once('Entity.class.php');
require_once('Driver.class.php');

if(isset($_GET['Id_personne'])){
    $driver = new Driver($conn);
    $driver->delete($_GET['Id_personne']);

    header('location:affichage.php');
}
?>