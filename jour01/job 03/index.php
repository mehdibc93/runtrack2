<?php
// Déclaration des variables de types primitifs
$boolean = true;
$entier = 42;
$chaine = "Bonjour";
$flottant = 3.14;

// Création d’un tableau associatif pour faciliter l’affichage
$variables = [
    ["type" => "boolean", "nom" => "boolean", "valeur" => $boolean ? "true" : "false"],
    ["type" => "entier", "nom" => "entier", "valeur" => $entier],
    ["type" => "chaîne de caractères", "nom" => "chaine", "valeur" => $chaine],
    ["type" => "nombre flottant", "nom" => "flottant", "valeur" => $flottant]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des variables</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1>Liste des variables PHP</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $var) : ?>
                <tr>
                    <td><?= $var["type"] ?></td>
                    <td><?= $var["nom"] ?></td>
                    <td><?= $var["valeur"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
