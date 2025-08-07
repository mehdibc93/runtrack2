<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");
if ($mysqli->connect_error) die("Connection failed: " . $mysqli->connect_error);

$query = "SELECT AVG(capacite) AS capacite_moyenne FROM salles;";
$result = $mysqli->query($query);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'><thead><tr><th>capacite_moyenne</th></tr></thead><tbody>";
    while ($row = $result->fetch_assoc()) echo "<tr><td>{$row['capacite_moyenne']}</td></tr>";
    echo "</tbody></table>";
} else echo "Aucune donnée trouvée.";
$mysqli->close();
?>
