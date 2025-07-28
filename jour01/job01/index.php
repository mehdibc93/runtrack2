<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Parité des nombres</title>
</head>
<body>

<?php
$numbers = [200, 204, 173, 98, 171, 404, 459];

foreach ($numbers as $value) {
    if ($value % 2 == 0) {
        echo "$value est paire<br />";
    } else {
        echo "$value est impaire<br />";
    }
}
?>

</body>
</html>
