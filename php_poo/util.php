<?php
//Utilisation d'une classe
require('Animal.class.php');
//creation d'objet
/*$aigle = new Animal ();
$aigle-> couleur="marron";
$aigle ->poids = 6;


//ajouter le kg
$aigle -> ajouter_kilo();

echo"l'aigle a pour couleur ".$aigle ->couleur. " et son poids est " .$aigle ->poids;*/


/*$chien =new Animal();
$chien->setCouleur("rouge");
$chien->setPoids(40);
$chien->ajouter_kilo();

echo "Le chien a pour couleur ".$chien->getCouleur(). " et son poids est " .$chien->getPoids()."kg <br>"."<br>";

//creer un autre animals
$ours=new Animal();
$ours ->setPoids (300);
$ours-> setCouleur("brun");
echo "L'ours a pour couleur ".$ours->getCouleur(). " et son poids est " .$ours->getPoids()."kg <br>"."<br>";

$saumon=new Animal();
$saumon ->setPoids (30);
$saumon-> setCouleur("gris");
echo "Le saumon a pour couleur ".$saumon->getCouleur(). " et son poids est " .$saumon->getPoids()."kg <br>"."<br>";

$ours->manger_animal($saumon);
echo "L'ours a pour couleur ".$ours->getCouleur(). " et son nouveau poids est " .$ours->getPoids()."kg <br>"."<br>";

echo "Le saumon a pour couleur ".$saumon->getCouleur(). " et son nouveau poids est " .$saumon->getPoids()."kg <br>"."<br>";*/

/*
//instanciation de la classe Animal avec le constructeur
$chat=new Animal("noir",10);
//recuperation du poids et du couleur
echo'Le chat a poils: '.$chat->getCouleur()." et son poids est: ".$chat->getPoids()."kg <br>";

//mise à jour de la couleur du chat

$chat->setCouleur("noir"); 
//lire la couleur 
echo "La couleur du chat est: ".$chat->getCouleur()."<br />";*/


//Exercice

/*$poisson1=new Animal("gris",10);
echo 'poisson1 a pour couleur '.$poisson1->getCouleur(). " et son poids est " .$poisson1->getPoids()."kg <br>"."<br>";

$poisson2=new Animal("rouge",7);
echo 'poisson2 a pour couleur '.$poisson2->getCouleur(). " et son poids est " .$poisson2->getPoids()."kg <br>"."<br>";

$poisson1->manger_animal($poisson2);
echo 'Le poisson1 a pour couleur '.$poisson1->getCouleur(). " et son nouveau poids est " .$poisson1->getPoids()."kg <br>"."<br>";

echo 'Le poisson2 a pour couleur '.$poisson2->getCouleur(). " et son nouveau poids est " .$poisson2->getPoids()."kg <br>"."<br>";*/


/*$chat=new Animal("noir",7, "Lucky");
echo'Le chat a poils: '.$chat->getCouleur()." et son poids est: ".$chat->getPoids()."kg <br>";*/


//destruction de l’objet 
/*unset($chien);
echo "Le chien a pour couleur ".$chien->getCouleur(). " et son poids est " .$chien->getPoids()."kg <br>"."<br>";*/

//recuperation des constantes
$chat=new Animal("noir",Animal::POIDS_LEGER);
echo'Le chat a poils: '.$chat->getCouleur()." et son poids est: ".$chat->getPoids()."kg <br>"."<br>";
//methode static
Animal::se_deplacer();

//appel de l'attrubu static
echo "Le nombre de pattes des mammiféres est: ".Animal::getPattes();

?>