<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maison ASCII</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f5f5f5;
            padding: 20px;
        }
        pre {
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ddd;
            display: inline-block;
        }
    </style>
</head>
<body>

<h2>Générateur de maison ASCII</h2>

<form method="POST">
    <label>Largeur : <input type="text" name="largeur" required></label><br><br>
    <label>Hauteur : <input type="text" name="hauteur" required></label><br><br>
    <input type="submit" value="Afficher la maison">
</form>

<?php
if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = (int)$_POST['largeur'];
    $hauteur = (int)$_POST['hauteur'];

    if ($largeur < 3 || $hauteur < 1) {
        echo "<p style='color:red;'>Largeur ≥ 3 et Hauteur ≥ 1.</p>";
    } else {
        echo "<h3>Maison générée :</h3><pre>";

        
        $etages = floor($largeur / 2); // nombre de lignes du toit
        $centre = floor($largeur / 2);

        for ($i = 0; $i < $etages; $i++) {
            for ($j = 0; $j < $largeur; $j++) {
                if ($j == $centre - $i) {
                    echo "/";
                } elseif ($j == $centre + $i) {
                    echo "\\";
                } elseif ($j > $centre - $i && $j < $centre + $i) {
                    echo "-";
                } else {
                    echo " ";
                }
            }
            echo "\n";
        }

        //  MUR
        for ($i = 0; $i < $hauteur; $i++) {
            for ($j = 0; $j < $largeur; $j++) {
                if ($j == 0 || $j == $largeur - 1) {
                    echo "|";
                } else {
                    echo " ";
                }
            }
            echo "\n";
        }

        // BASE
        for ($j = 0; $j < $largeur; $j++) {
            echo "-";
        }

        echo "</pre>";
    }
}
?>

</body>
</html>
