<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$nouvelleChaine = "";

for ($i = 1; isset($str[$i]); $i++) {
    $nouvelleChaine .= $str[$i];
}

$nouvelleChaine .= $str[0];

echo $nouvelleChaine;
?>
