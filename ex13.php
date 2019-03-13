<?php
/*Fonction et scope des variables: http://php.net/manual/fr/language.variables.scope.php
1. variable global:    */
//$b=0;
function afficher($a){
    global $b;

    $b=$a+5;

    echo $b. '<br>';
}
//afficher(2);
    //echo $b;


/*
    $a = 1;
    $b = 2;
    function somme() {
        global $a, $b;
        $b = $a + $b;
    }
    somme();
    echo $b;
*/

//Test sur existance des variables:
$texte = 'Le temps est maussade';
//est-ce que il existe
    if(isset($texte)){
        echo 'ok'. '<br>';
    }else{
        echo 'ko'. '<br>';
    }

$texte = 'Le temps est maussade';
//est-ce que il est vide
    if(empty($texte)){
        echo 'yes'. '<br>';
    }else{
        echo 'not'. '<br>';
    }
echo phpversion(). '<br>';

//Recuperation de dates. Definir le format!
echo date('d-m-Y')


?>