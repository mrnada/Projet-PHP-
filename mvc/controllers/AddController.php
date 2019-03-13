<?php
require_once('common/connect.php');
require_once('modeles/Entity.class.php');
require_once('modeles/Driver.class.php');

//recuperer l'ajout.php

$driver = new Driver($conn);

// var_dump($contenu);
// Ce que le user a soumis via champs de saisie on le met ds l'objet entity et on l'affiche
//grace à la super globale $_POST (set car privé)
if(isset($_POST) && !empty($_POST['nom'])){
    // var_dump($_POST);
    $entity = new Entity();

    //objet $entity est rempli par nom, prenom et age (input)
    $entity->setNom($_POST['nom']);
    $entity->setPrenom($_POST['prenom']);
    $entity->setAge($_POST['age']);
    
    //$nb retourne la valeur de l'id insérer dans l'url
    $nb = $driver->addItem($entity);
    if($nb!=0){
     header('location:index.php');   
    }else{
        echo('Erreur lors de l\'insertion');
    }
}

require_once('views/add.php');
?>



