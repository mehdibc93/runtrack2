<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$len = strlen($str);
$result = "";

for ($i = 0; $i < $len; $i++) {
    if ($i == $len - 1) {
        $result .= $str[0]; // dernier caractère = premier caractère
    } else {
        $result .= $str[$i + 1];
    }
}

echo $result;
?>
