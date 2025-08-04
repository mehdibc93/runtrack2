<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $b != 0 ? $a / $b : "Erreur : division par zéro";
        case '%':
            return $b != 0 ? $a % $b : "Erreur : division par zéro";
        default:
            return "Opération invalide";
    }
}
echo calcule(10, '+', 5); 
?>

