Inseration de donnée dans le phpMyAdmin(sql)
<br>
<br>
<?php
// Connexion à la base de données
    require_once('connex.php');
    // Exécution de la requête
    $sql ="INSERT INTO personne (Nom, Prenom, Age, Id_Langue)
        VALUES('Martin','Jacques',72, 2)";

    $res = mysqli_query($connect, $sql);
        if($res){
            echo 'Inseration réussie...';
    }
?>