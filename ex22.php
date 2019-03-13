<?php
/*$connect = mysqli_connect("127.0.0.1", "root","","bdd");
//pour tester:
if($connect){
    echo'connextion réussie...';


    $sql="SELECT*FROM personne";
    $res=mysqli_query($connect,$sql);
    if($res){
        echo 'Nombre de personne'. mysqli_num_rows($res).'<br>';
        //while ou foreach, c'est egal
        /*while($donnees=mysqli_fetch_assoc($res)){
            echo 'Id: '.$donnees['Id_personne'].' Nom: '.$donnees['Nom']. ' Prenom: '.$donnees['Prenom']. ' Age: '.$donnees['Age']. ' Id_Langue: '.$donnees['Id_Langue'].'<br>';        
        }
    }else{
        echo('Echec lors exécution de la requête');
    }
}*/
?>


<?php
$connect = mysqli_connect("127.0.0.1", "root","","bdd");
//pour tester:
/*if($connect){
    echo'connextion réussie...';
}*/

    $sql="SELECT*FROM personne";
    $res=mysqli_query($connect,$sql);
    if($res){
        echo 'Nombre de personne: '. mysqli_num_rows($res).'<br>'.'<br>';
        //while ou foreach, c'est egal
        /*while($donnees=mysqli_fetch_row($res)){
            echo 'Id: '.$donnees[0].' Nom: '.$donnees[1]. ' Prenom: '.$donnees[2]. ' Age: '.$donnees[3]. ' Id_Langue: '.$donnees[4].'<br>';        
        }*/
    }else{
        echo('Echec lors exécution de la requête');
    }

?>
