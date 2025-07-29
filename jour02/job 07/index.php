<?php
$hauteur = 5;    

echo "<pre>"; 

for ($i = 0; $i < $hauteur; $i++) {
    
    echo str_repeat(" ", $hauteur - $i - 1);

    
    echo "/";

    if ($i == 0) {
        
        echo "\\";
    } elseif ($i == $hauteur - 1) {
        
        echo str_repeat("_", 2 * $i);
        echo "\\";
    } else {
        
        echo str_repeat(" ", 2 * $i);
        echo "\\";
    }

    echo "\n";
}

echo "</pre>";
?>
