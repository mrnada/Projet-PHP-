<?php
//Les variables superglobales
session_start();
echo $_SERVER['REMOTE_ADDR'].'<br>'; //permet de connaître l’adresse IP de l’utilisateur qui a demandé la page. Nom de serveur doit etre ecrit en majuscule: REMOTE_ADDR
echo $_SERVER['PHP_SELF'].'<br>'; //permet de connaître le nom du script actuellement utilisé.
echo $_SERVER['REQUEST_METHOD'].'<br>';//permet de connaître la méthode de requête utilisée.
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>'.'<br>'; //permet de connaître la langue utilisée par votre navigateur.
echo $_SESSION['p'].' '.$_SESSION['j'];
?>