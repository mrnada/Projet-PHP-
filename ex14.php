<?php
//Ouverture et fermeture d’un fichier.
//1. Mettre le texte dans un fichier: automatiquement se creer un fichier: fichier.txt avec la phrase donner

/*$texte = "Le temps n'est pas beau";

file_put_contents('fichier.txt',$texte);

echo $texte

//2. Affichage du texte

$phrase = file_get_contents('fichier.txt');
    echo $phrase.'<br>';
*/

//3. Fonction file: Lit le fichier ligne par ligne et renvoie le résultat dans un tableau 

/*$tab=file('fichier.txt');

foreach($tab as $t){
    echo $t.'<br>';
}*/

// 4. Fonction fgetc: Lit un caractère dans un fichier

/*$donnees=fopen('fichier.txt','r');

if(!$donnees){
    echo "Impossible d'ouvrir le fichier";
}else{
    while($d = fgetc($donnees)){
        echo $d;
    }

}
fclose($donnees)*/

// Fonction fwrite: Écrit un fichier en mode binaire. Ajouter apres effacer le donnees 'w'
/*$donnees=fopen('fichier.txt','w');

if($donnees){
    $texte = 'Il etait une fois un corbeau';
    $texte1 = 'Il etait une fois un lion';

    fwrite($donnees,$texte.PHP_EOL);
    fwrite($donnees,$texte1);
}
fclose($donnees);*/

//Ajouter sans effacer: 'a'=ajout. Le pointeur de fichier est placé à la fin du fichier
$donnees=fopen('fichier.txt','a');

if($donnees){
    $texte = 'Il etait une fois un corbeau';
    $texte1 = 'Il etait une fois un lion';
    $texte2 = 'Il etait une fois un ELEFANT';

    //fwrite($donnees,$texte.PHP_EOL);
    fwrite($donnees,$texte2);
}
fclose($donnees);

?>