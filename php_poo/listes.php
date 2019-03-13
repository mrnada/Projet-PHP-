<?php
//Requêtes non préparées
//afficher le nom et le prénom de la table Personne :
    require_once('connex.php');

    $sql = "SELECT * FROM personne";
    // Récupération des données de la table Personne
    $res =$conn->query($sql);

    echo' Nombre de personnes: '.$res->rowCount();
    // Affichage de chaque entrée une à une
        while($donnees = $res->fetch()){
        echo'Nom: '.$donnees['Nom'].' Prenom: '.$donnees['Prenom'].' Age: '.$donnees['Age'].' Id_Langue: '.$donnees['Id_Langue'].'<br>';
    }

?>