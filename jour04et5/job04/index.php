<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 04 - Affichage des arguments POST</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px 12px;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<h2>Formulaire POST</h2>
<form method="post" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"><br><br>

    <label for="email">Email :</label>
    <input type="text" name="email" id="email"><br><br>

    <input type="submit" value="Envoyer">
</form>

<?php
if ($_POST) {
    echo "<h3>Arguments POST reçus :</h3>";
    echo "<table>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($key) . "</td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
