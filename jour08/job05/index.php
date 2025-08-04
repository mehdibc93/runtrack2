<?php
session_start();


if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur'] = 'X';
    $_SESSION['fin'] = false;
    $_SESSION['message'] = '';
}

function verifierVictoire($grille, $joueur) {
   
    for ($i=0; $i<3; $i++) {
        if ($grille[$i][0] === $joueur && $grille[$i][1] === $joueur && $grille[$i][2] === $joueur) return true; // ligne
        if ($grille[0][$i] === $joueur && $grille[1][$i] === $joueur && $grille[2][$i] === $joueur) return true; // colonne
    }
    if ($grille[0][0] === $joueur && $grille[1][1] === $joueur && $grille[2][2] === $joueur) return true; // diag1
    if ($grille[0][2] === $joueur && $grille[1][1] === $joueur && $grille[2][0] === $joueur) return true; // diag2
    return false;
}


function grillePleine($grille) {
    foreach ($grille as $ligne) {
        foreach ($ligne as $case) {
            if ($case === '-') return false;
        }
    }
    return true;
}


if (isset($_POST['case']) && !$_SESSION['fin']) {
    list($x, $y) = explode('_', $_POST['case']);
    $x = (int)$x;
    $y = (int)$y;
    if ($_SESSION['grille'][$x][$y] === '-') {
        $_SESSION['grille'][$x][$y] = $_SESSION['joueur'];
        
        if (verifierVictoire($_SESSION['grille'], $_SESSION['joueur'])) {
            $_SESSION['message'] = $_SESSION['joueur'] . " a gagné !";
            $_SESSION['fin'] = true;
        } elseif (grillePleine($_SESSION['grille'])) {
            $_SESSION['message'] = "Match nul !";
            $_SESSION['fin'] = true;
        } else {
           
            $_SESSION['joueur'] = ($_SESSION['joueur'] === 'X') ? 'O' : 'X';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        table { border-collapse: collapse; margin-top: 20px; }
        td { border: 2px solid black; width: 60px; height: 60px; text-align: center; }
        button { width: 100%; height: 100%; font-size: 24px; }
        #message { margin-top: 20px; font-weight: bold; font-size: 1.2em; }
        #reset-btn { margin-top: 15px; padding: 10px 20px; font-size: 1em; }
    </style>
</head>
<body>

<h2>Jeu du Morpion</h2>

<form method="post">
    <table>
        <?php
        for ($i=0; $i<3; $i++) {
            echo "<tr>";
            for ($j=0; $j<3; $j++) {
                echo "<td>";
                $val = $_SESSION['grille'][$i][$j];
                if ($val === '-') {
                    if (!$_SESSION['fin']) {
                        echo "<button type='submit' name='case' value='{$i}_{$j}'>-</button>";
                    } else {
                        echo "-";
                    }
                } else {
                    echo $val;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <div id="message">
        <?php
        if (!empty($_SESSION['message'])) {
            echo $_SESSION['message'];
        } else {
            echo "Au tour de " . $_SESSION['joueur'];
        }
        ?>
    </div>

    <button type="submit" name="reset" id="reset-btn">Réinitialiser la partie</button>
</form>

</body>
</html>
