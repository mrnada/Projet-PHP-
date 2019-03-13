<?php
//Declaration des attributs. Chargement de la classe
class Animal{
    private $couleur= "gris";
    private $poids = 5; 
    //variable static
    public static $pattes = 4;

    //Les constantes de classe
    const POIDS_LEGER = 5;
    const POIDS_MOYEN = 10;
    const LOURD = 15;


    //constructeur
    public function __construct($couleur, $poids){
        echo'appel du constructeur'."<br>";
        $this->couleur=$couleur;
        $this->poids=$poids;
    }

    //methode static
    public static function se_deplacer() {
        echo "L'animal se deplace à...";
}

    //accesseurs. Méthode pouvant accéder aux propriétés //couleur et poids
    /**
     * Get the value of couleur
     */
    public function getCouleur(){
        return $this->couleur;
    } 
    public function setCouleur($couleur){
        $this->couleur = $couleur;
    } 
    public function ajouter_kilo(){
        $this->poids = $this->poids + 1;
    }
    //objet
    public function manger_animal(Animal $animal_manger){
        $this->poids = $this->poids + $animal_manger->poids;
        $animal_manger->poids=0;
        $animal_manger->couleur="";
    }
    /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
     * @return  self
     */ 
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of pattes
     */ 
    public static function getPattes()
    {
        return Animal:: $pattes;
    }
    /**
     * Set the value of pattes
     *
     * @return  self
     */ 
    public static function setPattes($pattes)
    {
        $this->pattes = $pattes;

        return $this;
    }
}




?>