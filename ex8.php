<?php

//Declaration des TABLEAUX indexés
$jours = Array('Lundi', 'Mardi', 'Mercredi', 'Jeudi');
//les indices: Lundi=0, Mardi=1, Mercredi =2...
echo $jours [2]. '<br>'. '<br>';

$jours = Array('Lundi', 'Mardi', 'Mercredi', 'Jeudi');
$jours[3] = 'Dimanche';
//les indices: Lundi=0, Mardi=1, Mercredi =2...
echo $jours [3]. '<br>'. '<br>';

// Liste ordonnée. Affichage du contenu via boucle
echo "<ol>"; 
        for ($i =0; $i< count($jours); $i++){  
            echo "<li>$jours[$i]</li>";

}
echo "</ol>";

$personne =["Simone", "Antoine", 25];
echo $personne[2]. '<br>'. '<br>'; // 2 c'est index pour la place d'age: Simon =0, Antoine=1, Age=2//

$personne =["Simone", "Antoine", 25];
foreach($personne as $p){
    echo $p. '<br>'. '<br>';
}
    
//Tableau associatif (+clef 'ab') Assosiation entre clées et valeurs
$tabAssoc = array ('ni' => 'Nicolas', 'ro' => 'Rokhaya', 'ab' => 'Abdel');
echo $tabAssoc ['ab']. '<br>'. '<br>';

foreach($tabAssoc as $cle => $tab){
    echo 'la clef ' . $cle.' a pour valeur : ' .$tab . '<br>';
}
?>


