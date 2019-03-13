<?php
//ternaire

$x = 5;

// deux points pour le cas non verifié par la condition
$phrase = ($x >=0 ? '$x est positive' : ' $x est negative'). '<br>';

echo $phrase. '<br>';

//Boucles

for($i = 0; $i<=10; $i++){
    echo 'numero '. $i. '<br>'. '<br>';
}

for($i = 0; $i<=10; $i++){
    echo 'numero '. $i. '<br>';
    if($i==3){
        break;
    }
}

    $j=0;
    while($j<10){
        echo 'numero: '.$j. '<br>'. '<br>';
        $j++. '<br>';
    }

// Boucle do while
$j=0; //Initialisation de $j
do {
    echo 'numero: '.$j. '<br>';
    $j++;

} while ($j<10);
        