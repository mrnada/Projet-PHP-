<?php
//$_SESSION  - est un tableau associatif permettant de stocker n’importe quelle valeur propre à chaque utilisateur. Ce tableau sera valable dans toutes les pages PHP du site web et vous permet donc de transmettre des variables d’une page à l’autre. Attention de ne pas trop en abuser car si beaucoup de personnes se connectent à votre site, vous risquez de remplir la mémoire de votre serveur web.
session_start();
    $_SESSION['p']='Php';
    $_SESSION['j']='Javascript';
//var_dump($_SESSION)

echo $_SESSION['p'].' '.$_SESSION['j'];

session_destroy();
unset($_SESSION);
var_dump($_SESSION);

?>