<?php

if(isset($_GET['envoi'])){
    echo 'Formulaire soumis'.'<br>'.'<br>';
    if(isset($_GET['pseudo']) && isset($_GET['age']) && isset($_GET['pays'])){
        $pseudo= $_GET['pseudo'].'<br>';
        $age = $_GET['age'].'<br>';
        $pays = $_GET['pays'].'<br>';

        echo 'Mon pseudo est: ' .$pseudo. ' mon age est: ' .$age. ' et mon pays est: '. $pays;

}
}
?>