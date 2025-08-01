<?php
function gras($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (ctype_upper($mot[0])) {
            $mot = "<b>$mot</b>";
        }
    }
    return implode(" ", $mots);
}

function cesar($str, $decalage = 2) {
    $resultat = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $base = ctype_upper($char) ? 65 : 97;
            $newChar = chr(($ascii - $base + $decalage) % 26 + $base);
            $resultat .= $newChar;
        } else {
            $resultat .= $char;
        }
    }
    return $resultat;
}

function plateforme($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (str_ends_with($mot, "me")) {
            $mot .= "_";
        }
    }
    return implode(" ", $mots);
}


$resultat = "";
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];

    if ($fonction === "gras") {
        $resultat = gras($str);
    } elseif ($fonction === "cesar") {
        $resultat = cesar($str, 2);
    } elseif ($fonction === "plateforme") {
        $resultat = plateforme($str);
    }
}
?>


<form method="post">
    <input type="text" name="str" placeholder="Entrez une phrase">
    <select name="fonction">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <button type="submit">Valider</button>
</form>

<?php
if ($resultat !== "") {
    echo "<p>Résultat : $resultat</p>";
}
?>
