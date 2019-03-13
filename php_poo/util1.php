<?php
    require_once('Animal1.class.php');
    require_once('Chat.class.php');

    $chat1 = new Chat();
    $chat1->nom = "Lucky";
    $chat1->race="siamois";

    echo "Le nom de chat1 est: ".$chat1->nom. " et sa race est: ".$chat1->race."<br>";
?>