<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$reverse = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reverse .= $str[$i];
}

echo $reverse;
?>
