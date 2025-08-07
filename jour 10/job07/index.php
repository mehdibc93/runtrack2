<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");
if ($mysqli->connect_error) die("Connection failed: " . $mysqli->connect_error);

$query = "SELECT SUM(superficie) AS superficie_totale FROM etages;";
$result = $mysqli->query($query);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'><thead><tr><th>superficie_totale</th></tr></thead><tbody>";
    while ($row = $result->fetch_assoc()) echo "<tr><td>{$row['superficie_totale']}</td></tr>";
    echo "</tbody></table>";
} else echo "Aucune donnée trouvée.";
$mysqli->close();
?>
