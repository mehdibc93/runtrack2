<?php
$str = "Dans l'espace, personne ne vous entend crier";
$compteur = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $compteur++;
}

echo "Il y a $compteur caractères dans la chaîne.";
?>
