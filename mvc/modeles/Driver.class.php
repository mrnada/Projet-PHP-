<?php
class Driver{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }

    //findAll = à select*
    public function findAll(){
        $donnees = [];
        $nb = 0;
        $sql = "SELECT * FROM personne";
        $res = $this->conn->query($sql);

        while($rows = $res->fetch()){

            $entity = new Entity();

            $entity->setId($rows['Id_personne']);
            $entity->setNom($rows['Nom']);
            $entity->setPrenom($rows['Prenom']);
            $entity->setAge($rows['Age']);

            //$donnees[$nb++] = $entity;
            array_push($donnees, $entity);
        }
        return $donnees;
    }
    public function delete($id){
        $sql = "DELETE FROM personne WHERE Id_personne = '".$id."'";
        $this->conn->exec($sql);
    }


    //Méthode d'éditer
    public function edit($id){
        //concaténation $id 'simple cote=1 chaine de caractères + .(chaine de caractères)
        $sql = "SELECT * FROM personne WHERE Id_personne ='".$id."'";
        $res = $this->conn->query($sql);

        $entity = new Entity();
        //si requete bonne on utilise un if pour retourner une seule donnée ($id)
        
        //fetch on stock tout ds $ligne avec un tab associatif
        if ($ligne = $res->fetch()){
            //crer une instance ds n/objet $entity (new Entity=classe)
            $entity->setId($ligne['Id_personne']);
            $entity->setNom($ligne['Nom']);
            $entity->setPrenom($ligne['Prenom']);
            $entity->setAge($ligne['Age']);
        }
        return $entity;
    }
    //Méthode de MISE A JOUR
    // prendre objet $entity (l'instance de la class) et prend la ligne a maj
    //Entity = Class
    public function updateItem(Entity $entity, $id){
        $sql = "UPDATE personne 
        SET Nom = '".$entity->getNom()."',
            Prenom = '".$entity->getPrenom()."',
            Age = '".$entity->getAge()."'
        WHERE Id_personne = '".$id."'
        ";
        $this->conn->exec($sql);
    }
    public function addItem(Entity $pers1){
        //$pers1-> (on récupère le nom et concatène avec chaine de caractères)
        $sql = "INSERT INTO personne (Nom, Prenom, Age)
        VALUES ('".$pers1->getNom()."','".$pers1->getPrenom()."','".$pers1->getAge()."')      
        ";
        $this->conn->exec($sql);
        $idLast = $this->conn->lastInsertId();
        return $idLast;
    }
}
// //var Driver pour manipuler la bdd (chaine de connexion)
// class Driver{
//     private $conn;
//     //constructeur pour initialiser
//     public function __construct($conn){
//         $this->conn = $conn;
//     }
//     // findAll récupère tout
//     public function findAll(){
//         //déclaration de tableau vide
//         $donnees = [];
//         //compteur vide
//         $nb = 0;
//         $sql = "SELECT * FROM personne";

//         //conn represente la connexion
//         $res = $this->conn->query($sql);
//         while($rows=$res->fetch()){            
            
//             //creer objet de notre entité et on le remplit $rows fetch
//             $entity = new Entity;
//              //setId... rempli le tableau avec chaque ligne
//             $entity->setId($rows['Id_personne']);
//             $entity->setNom($rows['Nom']);
//             $entity->setPrenom($rows['Prenom']);
//             $entity->setAge($rows['Age']);

//             // $donnees[$nb++] = $entity;
//             //array_push prend le tab des données, on a pas besoin du $compteurs
//             array_push($donnees, $entity);
//         }
//         return $donnees;
//     }
//     public function delete(){
//         $sql = "DELETE FROM personne WHERE id ='".$id."'";
//         $this->conn->exec($sql);
//     }
// }

?>