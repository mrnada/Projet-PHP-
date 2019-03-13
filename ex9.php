<?php
$nom = ['A' => 'Julien', 'B' => 'Caroline', 'C' => 'Alice'];
//sizeof=count. Pour conter ou voir le contenu de tableau 
echo sizeof($nom).'<br>'.'<br>';
//var_dump($nom)
//print_r($nom);

if(in_array('Alice', $nom)){
    echo 'Nom trouvé';
}else{
    echo 'Nom pas trouvé';
}

//Fonctions: Trier par croissance/decroissance
foreach($nom as $n){
    echo $n. '</br>'.'<br>';
    }
sort($nom);
    foreach($nom as $n){
        echo $n. '</br>';
    }

// explode=decouper des elements d'un tableau: Le-monde-est-beau
$st = 'Le monde est beau';
//explode avec separateur dans ()
$stTab = explode(" ", $st);

echo count($stTab).'<br>'.'<br>';
    foreach($stTab as $s){
        echo $s. '</br>'.'<br>';
    }

//implode=transformer dans un tableau des characters
$matieres = ["html", "css", "js", "php"];
//elements de separations on choisir nous même: , / ect
$mChaine = implode("/", $matieres);
    echo $mChaine.'<br>'.'<br>';

//push=ajouter ; pop=enlever
    array_push($matieres, "angular", "nodJs");
        echo count($matieres).'<br>';
//var_dump($matieres);

// refrechir au hasard . Verification de l'ajout.Avec chaque refreches sur localhost le donnée se change. La fonction random:
$aleatoire = array_rand($matieres);
    echo $matieres[$aleatoire];

?>