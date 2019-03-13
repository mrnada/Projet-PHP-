<?php

$tabs = [
         ['id' => 1, 'nom' => 'Simon', 'age' => 80, 'url' => 'images/citroen-c3.jpg'],
         ['id' => 2, 'nom' => 'Landry', 'age' => 25,  'url' => 'images/ford-mustang.jpg'],
         ['id' => 3, 'nom' => 'Pierre', 'age' => 42,  'url' => 'images/la-voiture-volante.jpg'],
         ['id' => 4, 'nom' => 'Claire', 'age' => 50,  'url' => 'images/trabant.jpg']
 ];
  for($i = 0; $i < count($tabs); $i++){
 echo $tabs[$i]['id'].' ' .$tabs[$i]['nom'].' '.$tabs[$i]['age']. ' '.$tabs[$i]['url'].'<br>';
 }
 

//ex5
 $tabBanniere=[ 
    1 =>['monsite1.com', 'images/citroen-c3.jpg', 'desc1'],
    2 =>['monsite2.com', 'images/ford-mustang.jpg', 'desc2'],
    3 =>['monsite3.com', 'images/la-voiture-volante.jpg', 'desc3'],
    4 =>['monsite4.com', 'images/trabant.jpg', 'desc4'],
];

$banAleatoire = array_rand($tabBanniere);
echo $tabBanniere[$banAleatoire][0]."<br>".
"<img src='".$tabBanniere[$banAleatoire][1]."' />"
."<br>".$tabBanniere[$banAleatoire][2];

?>