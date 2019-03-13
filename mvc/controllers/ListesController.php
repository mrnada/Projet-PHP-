<?php
require_once('common/connect.php');
require_once('modeles/Entity.class.php');
require_once('modeles/Driver.class.php');

//Charge la vue
$driver = new Driver($conn);
$datas = $driver->findAll();
if(empty($datas)){
    echo'Erreur';
}else{
    require_once('views/listes.php');
}
?>