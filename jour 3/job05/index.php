<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = "aeiouyAEIOUYàâäéèêëîïôöùûüÿ";
$consonnes = "bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ";
$dic = ["voyelles" => 0, "consonnes" => 0];

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelles, $str[$i]) !== false) {
        $dic["voyelles"]++;
    } elseif (strpos($consonnes, $str[$i]) !== false) {
        $dic["consonnes"]++;
    }
}

echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr></tbody>";
echo "</table>";
?>
