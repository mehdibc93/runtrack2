<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 03 - Nombre d'arguments POST</title>
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
    // Compter manuellement les arguments POST
    $nb = 0;
    foreach ($_POST as $key => $value) {
        $nb = $nb + 1;
    }

    echo "<p>Le nombre d’arguments POST envoyés est : $nb</p>";
}
?>

</body>
</html>
