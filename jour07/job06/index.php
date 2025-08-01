<?php
function leetSpeak($str) {
    $leet = [
         'a' => '4',
         'b' => '8',
         'e' => '3',
         'g' => '6',
         'l' => '1',
        's' => '5',
         't' => '7'
    ];
    return strtr($str, $leet);
}
echo leetSpeak("Leet Speak est Génial"); // Exemple
?>
