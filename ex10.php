//Affichage de la longueur  de la chaine module

<?php 
//strlen calcule la taille du module
$module ='PHP && MySql';
$l=strlen($module);

//Contage de nombre de mots dans php:
$nbM=str_word_count($module);

//Affiché à partir de 9eme charachter le 3 module
$extrait = substr($module, 9,3);

//Mot de passe sans l'espace et avec en utilisant TRIM: $ln supprime des espaces par leurrer et $pass conte tous les caractères incl les espaces
$pass ="  pass223";
$ln = trim($pass);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        la longueur du module étudié est: 
        <b><?php echo $l;?></b><br>
        <!--Affiché à partir de 9eme caractère le 3 module-->
        <b><?php echo ucfirst(strtolower($extrait));?></b><br>
        <!--nettoage d'espaces vides-->
        <b><?php echo strlen($ln);?></b><br>
       <!--Contage de nombres de mots dans php:-->
        <b><?php echo $nbM;?></b><br>
    </p>
</body>
</html>