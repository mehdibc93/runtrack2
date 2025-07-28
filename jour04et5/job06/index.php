<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 06 - Nombre pair ou impair</title>
</head>
<body>

<h2>Formulaire GET - Vérification Pair / Impair</h2>
<form method="get" action="">
    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre" id="nombre"><br><br>
    <input type="submit" value="Vérifier">
</form>

<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    // Vérifier que c'est un entier (sans fonction système)
    $is_number = true;
    // On vérifie caractère par caractère
    for ($i = 0; isset($nombre[$i]); $i++) {
        $char = $nombre[$i];
        if (!(($char >= '0' && $char <= '9') || ($i == 0 && $char == '-'))) {
            $is_number = false;
            break;
        }
    }

    if ($is_number) {
        // Convertir la chaîne en entier (cast)
        $nombre_int = (int)$nombre;

        // Tester la parité (sans fonction)
        if ($nombre_int % 2 == 0) {
            echo "<p>Nombre pair</p>";
        } else {
            echo "<p>Nombre impair</p>";
        }
    } else {
        echo "<p>Veuillez entrer un nombre valide.</p>";
    }
}
?>

</body>
</html>
