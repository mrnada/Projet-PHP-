Update de donnée dans le phpMyAdmin(sql)/Mettre à jour
<br>
<br>
<?php
// Connexion à la base de données
    require_once('connex.php');
    // Exécution de la requête
    $sql ="UPDATE personne SET Nom = 'Nemarq', Age = 65
        WHERE Id_personne = 5";

    $res = mysqli_query($connect, $sql);
        if($res){
            echo 'Mise à jour réussi...';
    }
    mysqli_close($connect);
?>