<?php
// Durée de vie du cookie (exemple : 1 jour)
$cookie_duration = 86400; // 24 * 60 * 60 secondes

// Gestion de la déconnexion
if (isset($_POST['deco'])) {
    // Supprimer le cookie en le rendant expiré
    setcookie('prenom', '', time() - 3600);
    // Redirection pour appliquer le changement
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Gestion de la connexion
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    $prenom = trim($_POST['prenom']);
    // Stocker le prénom dans un cookie (sécurisé avec htmlspecialchars)
    setcookie('prenom', htmlspecialchars($prenom), time() + $cookie_duration);
    // Redirection pour que le cookie soit pris en compte
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

<?php
// Vérifier si l’utilisateur est connecté (cookie existe)
if (isset($_COOKIE['prenom'])) {
    $prenom = htmlspecialchars($_COOKIE['prenom']);
    echo "<p>Bonjour $prenom !</p>";
    ?>
    <form method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
    <?php
} else {
    // Afficher le formulaire de connexion
    ?>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
        <button type="submit" name="connexion">Connexion</button>
    </form>
    <?php
}
?>

</body>
</html>
