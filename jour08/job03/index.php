<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}


if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
    
    $_SESSION['prenoms'][] = htmlspecialchars(trim($_POST['prenom']));
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste de prénoms</title>
</head>
<body>

<h2>Ajouter un prénom</h2>

<form method="post">
    <input type="text" name="prenom" placeholder="Entrez un prénom" required>
    <button type="submit">Ajouter</button>
</form>

<form method="post" style="margin-top: 10px;">
    <button type="submit" name="reset">Reset</button>
</form>

<h3>Liste des prénoms :</h3>
<ul>
    <?php
    if (!empty($_SESSION['prenoms'])) {
        foreach ($_SESSION['prenoms'] as $p) {
            echo "<li>" . $p . "</li>";
        }
    } else {
        echo "<li>Aucun prénom pour le moment.</li>";
    }
    ?>
</ul>

</body>
</html>
