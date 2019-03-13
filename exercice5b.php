<?php
$tabBannieres = [
        1 => ['Monsite1.com','images/citroen-c3.jpg','Image aléatoire  1'],
        2 => ['Monsite2.com','images/ford-mustang.jpg','Image aléatoire  2'], 
        3 => ['Monsite3.com','images/la-voiture-volante.jpg','Image aléatoire  3'], 
        4 => ['Monsite4.com','images/trabant.jpg','Image aléatoire  4'],
    ];
    
    $banAleatoire = array_rand($tabBannieres);
    echo $tabBannieres[$banAleatoire][0]. "<br>". "<img src='".$tabBannieres[$banAleatoire][1]."'/>".
    "<br>".$tabBannieres[$banAleatoire][2];

    ?>