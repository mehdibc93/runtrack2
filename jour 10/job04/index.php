<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");
if ($mysqli->connect_error) die("Connection failed: " . $mysqli->connect_error);

$query = "SELECT * FROM etudiants WHERE prenom LIKE 'T%';";
$result = $mysqli->query($query);

if ($result && $result->num_rows > 0) {
    echo "<table border='1'><thead><tr>";
    while ($field = $result->fetch_field()) echo "<th>{$field->name}</th>";
    echo "</tr></thead><tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $data) echo "<td>$data</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else echo "Aucune donnée trouvée.";
$mysqli->close();
?>
