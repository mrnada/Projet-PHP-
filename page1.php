<!--Include des données: include oder require, les deux sont egal
L'instruction require_once est identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, 
et si c'est le cas, ne l'inclut pas une deuxième fois.

Voir la documention de include_once pour plus d'informations concernant le comportement de _once, 
et ce qui le différencie des instructions sans _once. --> 
<?php require_once('data.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Nom stagiaires</h2>
    <ol>
    <?php 
        for($i=0; $i< sizeof($tab); $i++){
            echo '<li>'.$tab[$i].'</li>';
        }
    ?>
    </ol>
</body>
</html>