<?php
 require_once('connex.php');
 require_once('Enity.class.connex.php');
 require_once('Driver.class.connex.php');

 if(isset($_GET['id'])){
     $driver = new Driver ($conn);
     $driver->delete($_GET['id']);

     header('location:affichage.php');
 }

?>