<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$style = 'style1';


if (isset($_POST['style'])) {
    $style = $_POST['style'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choisir un style</title>
    <link rel="stylesheet" href="<?= htmlspecialchars($style) ?>.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>
<body>
    <form method="post">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?= $style == 'style1' ? 'selected' : '' ?>>style1</option>
            <option value="style2" <?= $style == 'style2' ? 'selected' : '' ?>>style2</option>
            <option value="style3" <?= $style == 'style3' ? 'selected' : '' ?>>style3</option>
            <option value="style4" <?= $style == 'style4' ? 'selected' : '' ?>>style4</option>
            <option value="style5" <?= $style == 'style5' ? 'selected' : '' ?>>style5</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>
