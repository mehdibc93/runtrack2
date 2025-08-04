<?php
session_start();

f (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
    $_SESSION['just_reset'] = true;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


if (isset($_SESSION['nbvisites'])) {
    if (empty($_SESSION['just_reset'])) {
        $_SESSION['nbvisites']++;
    } else {
        
        unset($_SESSION['just_reset']); 
    }
} else {
    $_SESSION['nbvisites'] = 1;
}

echo "<p>Nombre de visites : " . $_SESSION['nbvisites'] . "</p>";
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
