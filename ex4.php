<?php

//Declaration de variables
//A
$nom;

$nom ='toto';

//echo $nom
echo'le nom de la personne est ' . $nom .'<br>';
echo"le nom de la personne est . $nom".'<br>';
echo"le nom de la personne est $nom".'<br>'.'<br>';


//echo mon Nom
$nom='Muller';
$prenom='Gerd';
$age=22;

echo'Mon nom est ' . $nom.'<br>'; 
echo'Mon prenom est ' . $prenom.'<br>';
echo'Mon age est ' . $age.'<br>'.'<br>';

echo ' Mon nom est ' . $nom . ' Mon prenom est ' . $prenom . ' Mon age est ' . $age.'<br>'.'<br>';
// B
$a = '5'; $b ='7';
$res = $a+$b;

echo 'Le resultat est: ' . $res. ' et le type: ' .gettype ($a).'<br>'.'<br>';

echo gettype($a).'<br>';

$aNum = (int)$a;
echo gettype($aNum).'<br>';

echo $res.'<br>'.'<br>';

//Constante

define('YEUX',2);
echo YEUX .'<br>';

const PIED =2;
echo PIED;