<?php
$tab = [200, 204, 173, 98, 171, 404, 459];

foreach ($tab as $x) {
    if ($x % 2 == 0) {
        echo "$x est paire<br />";
    } else {
        echo "$x est impaire<br />";
    }
}
?>
