<?php
// Connexion à la base de données
    require_once('connex.php');
    // la requête
    $sql ="SELECT * FROM personne 
        WHERE Id_personne = ?";

    // Préparation de la requête
    $res = mysqli_prepare($connect, $sql);

    // Liaison des paramètres (liaison de données à la requête).
    mysqli_stmt_bind_param($res, 'i', $num);
        $num = 2;// Tant que vous n’avez pas exécuté la requête, // vous pouvez initialiser la variable 
        
        // Exécution de la requête. 
    $ok = mysqli_stmt_execute($res);

    //Association des variables de résultat (Liaison des données du resultat).
    $ok = mysqli_stmt_bind_result($res, $id, $Nom, $Prenom, $Age, $Id_Langue);

    while(mysqli_stmt_fetch($res)){
        // Lecture des valeurs.
        echo $Nom.", ".$Prenom." ";
    }
 

    mysqli_close($connect);
?>