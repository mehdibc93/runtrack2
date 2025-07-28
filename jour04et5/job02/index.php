<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 02 - Tableau des arguments GET</title>
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

<h2>Formulaire GET</h2>
<form method="get" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"><br><br>

    <label for="email">Email :</label>
    <input type="text" name="email" id="email"><br><br>

    <input type="submit" value="Envoyer">
</form>

<?php
if ($_GET) {
    echo "<h3>Arguments GET reçus :</h3>";
    echo "<table>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcours manuel de $_GET
    foreach ($_GET as $key => $value) {
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
