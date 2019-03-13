<?php

$tabs = Array(
         ['id' => 1, 'nom' => 'Simon', 'age' => 80, 'url' => 'images/citroen-c3.jpg'],
         ['id' => 2, 'nom' => 'Landry', 'age' => 25,  'url' => 'images/ford-mustang.jpg'],
         ['id' => 3, 'nom' => 'Pierre', 'age' => 42,  'url' => 'images/la-voiture-volante.jpg'],
         ['id' => 4, 'nom' => 'Claire', 'age' => 50,  'url' => 'images/trabant.jpg']
);
var_dump($tabs[0]['nom']);
/*for($i = 0; $i < count($tabs); $i++){
echo$tabs[$i]['id']. ''  .$tabs[$i]['nom']. ''.$tabs[$i]['age']. ''.$tabs[$i]['url']. '<br>';
}*/


echo'
    <table>
    <tr> 
        <th>ID</th><th>NOM</th><th>AGE</th><th>URL</th>
      </tr>';


for($i = 0; $i < count($tabs); $i++){
    echo'<tr>
        <td>'.$tabs[$i]['id'].'</td>
        <td>'.$tabs[$i]['nom'].'</td>
        <td>'.$tabs[$i]['age'].'</td>
        <td width="50" heigth="50"><img src='.$tabs[$i]['url'].'></td>
        </tr>';        
}
echo'</table>';
