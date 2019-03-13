<?php/*
var_dump($_POST);
die();
if(isset($_POST['envoi'])){
    echo 'Formulaire soumis'.'<br>'.'<br>';
    if(isset($_POST['pseudo']) && isset($_POST['age']) && isset($_POST['pays'])){
        $pseudo= $_POST['pseudo'].'<br>';
        $age = $_POST['age'].'<br>';
        $pays = $_POST['pays'].'<br>';

        echo 'Mon pseudo est: ' .$pseudo. ' mon age est: ' .$age. ' et mon pays est: '. $pays;

}
}*/
?>







<?php
/*
var_dump($_POST);

if(isset($_POST['envoi'])){
    echo 'Formulaire soumis'.'<br>'.'<br>';
    if(isset($_POST['pseudo']) && isset($_POST['age']) && isset($_POST['pays']) && isset($_POST['pwd'])){
        $pseudo= $_POST['pseudo'].'<br>';
        $age = (int)$_POST['age'].'<br>';
        $pays = $_POST['pays'].'<br>';
        $pwd = md5($_POST['pwd']).'<br>';
        echo gettype($age).'<br>';

        echo 'Mon pseudo est: ' .$pseudo. ' mon age est: ' .$age. '  mon pays est: '. $pays. ' et mon mot de passe est: '. $pwd;

}
}
*/?>
/*Ajouter les listes de Formation*/
<?php
/*var_dump($_POST);

if(isset($_POST['envoi'])){
    echo 'Formulaire soumis'.'<br>'.'<br>';
    if(isset($_POST['pseudo']) && isset($_POST['age']) && isset($_POST['pays']) && isset($_POST['pwd']) && isset($_POST['message']) &&  $formation = $_POST['formations']){
        $pseudo= $_POST['pseudo'].'<br>';
        $age = (int)$_POST['age'].'<br>';
        $pays = $_POST['pays'].'<br>';
        $pwd = md5($_POST['pwd']).'<br>';
        $message = md5($_POST['message']).'<br>';
        $formation = $_POST['formations'].'<br>';
        echo gettype($age).'<br>';

        echo 'Mon pseudo est: ' .$pseudo. ' mon age est: ' .$age. '  mon pays est: '. $pays. ' et mon mot de passe est: '. $pwd . ' message' .$message . ' Formations'  .$formation;

}
}*/
?>


<?php
//var_dump($_POST['modules']);
//die();

/*if(isset($_POST['envoi'])){
    echo 'Formulaire soumis'.'<br>'.'<br>';
    if(isset($_POST['pseudo']) && isset($_POST['age']) && isset($_POST['pays']) && isset($_POST['pwd']) && isset($_POST['message']) &&  isset($_POST['formations']) && isset($_POST['modules'])){
        $pseudo= $_POST['pseudo'].'<br>';
        $age = (int)$_POST['age'].'<br>';
        $pays = $_POST['pays'].'<br>';
        $pwd = md5($_POST['pwd']).'<br>';
        $message = md5($_POST['message']).'<br>';
        $formation = $_POST['formations'].'<br>';
        $tabModules =$_POST['modules'].'<br>';
        echo gettype($age).'<br>';

        echo 'Mon pseudo est: ' .$pseudo. ' mon age est: ' .$age. '  mon pays est: '. $pays. ' et mon mot de passe est: '. $pwd . ' message' .$message . ' Formations'  .$formation . ''  .$tabModules;

        foreach($tabModules as $module){
            echo $module. '<br>';
        }
}
}
?>


<?php
var_dump($_POST['modules']);
die();
if(isset($_POST['envoi'])){
    echo'Formulaire soumis';
    if(isset($_POST['pseudo']) && isset($_POST['age']) && isset($_POST['pwd']) ){
        $pseudo = $_POST['pseudo'];
        $age= (int)$_POST['age'];
        $pwd = md5($_POST['pwd']);
        $message = $_POST['message'];
        $formation = $_POST['formations'];
        $tabModules =$_POST['modules'];
        echo gettype($age).'<br>';

        echo'Mon pseudo est: '.$pseudo.'  mon age est: '.$age.' '.$pwd. ' message '.$message.' Formation '.$formation.'<br>';
        foreach($tabModules as $module){
            echo $module.'<br>';
        }
    }
}*/
?>

<?php
//var_dump($_POST['jours']);
//die();

/*if(isset($_POST['envoi'])){
    echo 'Formulaire soumis'.'<br>'.'<br>';
    if(isset($_POST['pseudo']) && isset($_POST['age']) && isset($_POST['pays']) && isset($_POST['pwd']) && isset($_POST['message'])){
        $pseudo= $_POST['pseudo'].'<br>';
        $age = (int)$_POST['age'].'<br>';
        $pays = $_POST['pays'].'<br>';
        $pwd = md5($_POST['pwd']).'<br>';
        $message = $_POST['message'].'<br>';
        $formation = $_POST['formations'].'<br>';

        $tabModules =$_POST['modules'].'<br>';
        $tabJours = $_POST['jours'];

        echo gettype($age).'<br>';

        echo 'Mon pseudo est: ' .$pseudo. ' mon age est: ' .$age. '  mon pays est: '. $pays. ' et mon mot de passe est: '. $pwd . ' message' .$message . ' Formations'  .$formation;

        foreach($tabModules as $module){
            echo $module.'<br>';
        }
        foreach($tabJours as $jour =>$valeur){
            echo $jour.'passe à '.$valeur;
        }
    }
}*/

?>

<?php
//var_dump($_POST['modules']);
//die();
if(isset($_POST['envoi'])){
    echo'Formulaire soumis';
    if(isset($_POST['pseudo']) && isset($_POST['age']) && isset($_POST['pwd']) ){
        $pseudo = $_POST['pseudo'];
        $age= (int)$_POST['age'];
        $pwd = md5($_POST['pwd']);
        $message = $_POST['message'];
        $formation = $_POST['formations'];
      
        $tabModules = $_POST['modules'];
        $tabJours = $_POST['jours'];
        $sexe = $_POST['sexe'];
        
        echo gettype($age).'<br>';

        echo'Mon pseudo est: '.$pseudo.'  mon age est: '.$age.' '.$pwd. ' message '.$message.' Formation '.$formation.'<br>';
        foreach($tabModules as $module){
            echo $module.'<br>';
        }
        foreach($tabJours as $jour =>$valeur){
            echo $jour.'passe à '.$valeur;
        }
        echo 'Le genre est: '.$sexe;
    }
}