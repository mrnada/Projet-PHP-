<?php 

$texte = "Nous étudions php qui est un langage de script incontournable dans le web";

//Si on ne sait pas si les caractères sont en majuscules ou minuscules, on mette « i » (Insensible à la casse) :
//$search = "/php/i";


//Chercher tous les mots qui commences par L  « b=begining »:
$search = "/php|script\bl/i";

if (preg_match($search,$texte)) { 
    echo "Le mot php est dans le texte".'<br>'.'<br>';
    echo "Les mots commencent par l existent dans le texte: ".'<br>'.'<br>';
} else //{ echo "Le mot php n'est pas dans le texte.".'<br>'.'<br>'; }
        {echo "Les mots commencent par l n'existent pas dans le texte: ".'<br>'.'<br>';}

// trouver et remplacer le mot, ex. php par JavaScript
$texte= preg_replace($search, "Javascript", $texte);
echo $texte;

?>
