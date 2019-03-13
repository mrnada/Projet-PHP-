<?php
//$_COOKIE. 
//$_COOKIE['p']= '- 40% dans 2 mois';
/*echo $_COOKIE['p'];

$temps=4*60;
setcookie('p', '- 40% de reduction', time()+$temps);*/

if(isset($_COOKIE['p'])){               //setcookie() permet de passer en paramètre le temps d’expiration du cookie, c’est-à-dire le temps qu’il faut avant qu’il disparaisse de votre ordinateur.
    echo "Votre promo". $_COOKIE['p']." est bientôt disponible";

}
?>