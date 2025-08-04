<?php

if (isset($_POST['reset'])) {
    setcookie("nbvisites", 0, time() + 3600); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}


$visites = isset($_COOKIE['nbvisites']) ? $_COOKIE['nbvisites'] + 1 : 1;


setcookie("nbvisites", $visites, time() + 3600); 

echo "<p>Nombre de visites (cookie) : $visites</p>";
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
