<?php
    class Driver{
        //declarer une variable
        private $conn;
        //consulteur
        public function __construct($conn){
            $this->conn=$conn;
        }
    public function findAll(){
        $donnees=[]; //tableau vide qui doit etre remplir
        $nb = 0;
        $sql = "SELECT * FROM personne";
        $res = $this->conn->query($sql);
        while($rows=$res->fetch()){
            //creer
            $entity= new Entity();

            //remplir en fonction des noms de colonnes de la base
            $entity->setId($rows['Id_personne']);
            $entity->setNom($rows['Nom']);
            $entity->setPrenom($rows['Prenom']);
            $entity->setAge($rows['Age']);
            $entity->setLangue($rows['Id_Langue']);

            //nb=notre premier l'object = 0. Stockage tout les objets(données) dans le tableau données
            //$donnees[$nb++] = $entity;
            //ou avec le push
            array_push($donnees,$entity);
        }
        return $donnees;
    }
        public function delete($id){
            $sql="DELETE FROM personne WHERE Id_personne ='".$id."'";
            $this->conn->exect($sql);
        }
        
    }
?>