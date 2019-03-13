<?php
require_once('common/connect.php');
require_once('modeles/Entity.class.php');
require_once('modeles/Driver.class.php');


$driver = new Driver($conn);
$contenu = $driver->edit($_GET['Id_personne']);

if(isset($_POST)&& !empty($_POST['nom'])){
    $entity = new Entity();
    //recupere pour le nom par un setter car privée
    $entity->setNom($_POST['nom']);
    $entity->setPrenom($_POST['prenom']);
    $entity->setAge($_POST['age']);

    $driver->updateItem($entity, $_GET['Id_personne']);

    header('location:index.php');
}

    require_once('views/edit.php');
?>