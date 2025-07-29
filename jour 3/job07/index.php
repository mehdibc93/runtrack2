<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";


$firstChar = $str[0];


$resultat = substr($str, 1) . $firstChar;


echo $resultat;
?>
