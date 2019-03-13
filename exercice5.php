//Afficher des bannières de manière aléatoire parmi trois possibles lorsqu’on arrive sur votre page PHP. Ces bannières ont pour caractéristiques une image, un lien et une description sur cette image. Ces caractéristiques sont stockées dans un tableau.

<?php

//Tableau associatif des bannieres et banniere choisie
$tabBannieres = array (
    1 => array ('http://www.Monsite1.com','http://www.Monsite1.com/images/citroen-c3.jpg','Image aléatoire  1'),
    2 => array ('http://www.Monsite2.com','http://www.Monsite1.com/images/ford-mustang.jpg','Image aléatoire  2'), 
    3 => array ('http://www.Monsite3.com','http://www.Monsite1.com/images/la-voiture-volante.jpg','Image aléatoire  3'), 
    4 => array ('http://www.Monsite4.com','http://www.Monsite1.com/images/trabant.jpg','Image aléatoire  4'),
);

//Détermination de la banniere à afficher//
$choix = 1;
$choix = array_rand($tabBannieres, 1);

//Affichage des bannieres
echo '<a href="', $tabBannieres[$choix][0] ,'" title="', $tabBannieres[$choix][1] ,'">';
echo '<img src="', $tabBannieres[$choix][0] ,'" alt="', $tabBannieres[$choix][2] ,'" />';
echo '</a>';
 
    
?>