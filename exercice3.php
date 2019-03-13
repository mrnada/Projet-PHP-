<?php 
//1. Création du fichier "Compteur de page"
/*$texte = " ";

file_put_contents('compteur_visites.txt',$texte);

session_start();*
 oder andere Möglichkeit: touch('compteur.txt');//creation du fichier
*/
/*$compteur= fopen('compteur_visites.txt', 'r+');// ouverture du fichier en lecture et en écriture
$nb = fgets($compteur);

if($nb==""){
    $nb = 5;
}     
$nb++;
fseek($compteur, 0);
fputs($compteur, $nb);
fclose($compteur);
        
echo "$nb fois";

*/

touch('compteur.txt');//creation du fichier
$donnees = fopen('compteur.txt','r+');// ouverture du fichier en lecture et en écriture
$nb = fgets($donnees);
if($nb ==""){
    $nb = 0;
}
$nb++;
fseek($donnees,0);
fputs($donnees, $nb);
fclose($donnees);

echo "$nb fois";


//2. création d’un fichier de renseignement d’images
/*$texte = "Nom d'image. Taille d'image";

file_put_contents('images.txt',$texte);*/



//3. Log de traces
/*$texte = "La date. L’heure courante";

file_put_contents('log.txt',$texte);*/

$date_courante = date("Y-m-d H:i:s");


