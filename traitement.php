<?php
 if(isset($_GET['login']) && isset($_GET['password'])){
     $login = $_GET['login'];
     $pass = $_GET['password'];

     echo "Login est: $login. Votre mot de passe est: $pass".'<br>';
 }
 
 $p = "Durand toto";

    echo urlencode($p).'<br>';
    echo rawurldecode($p);
?>

