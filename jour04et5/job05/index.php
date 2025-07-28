<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 05 - Formulaire connexion</title>
</head>
<body>

<h2>Formulaire de connexion</h2>
<form method="post" action="">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username"><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password"><br><br>

    <input type="submit" value="Se connecter">
</form>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "John" && $password === "Rambo") {
        echo "<p>C’est pas ma guerre</p>";
    } else {
        echo "<p>Votre pire cauchemar</p>";
    }
}
?>

</body>
</html>
