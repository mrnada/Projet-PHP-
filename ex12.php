<?php
//function simple
/*function Salutation(){
    echo 'BONJOUR';
}
Salutation();*/

//function plus
function Salutation($nom){
    echo 'BONJOUR'. $nom.'<br>';
}
Salutation(' Dupont');

//function recuperation de 
function calcul($ht){
    $ttc = $ht+ $ht*0.2;
    return $ttc;
}
$prixTtc = calcul(50);
echo $prixTtc.' €';

?>