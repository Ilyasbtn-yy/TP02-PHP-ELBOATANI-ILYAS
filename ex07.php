<?php
    
    //1)Table de multiplication

    echo "<section>";

    echo "<h2>Tableau de multiplication</h2>";

    $nombre = 7;
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        echo "<p>$nombre * $i = $resultat</p>";
    }

    echo "</section>";


    //2) Pyramide d'étoiles

    echo "<section>";

    echo "<h2>2. Pyramide d'étoiles</h2>";

    echo "<pre>";
    for ($ligne = 1; $ligne <= 6; $ligne++) {
        
        for ($etoile = 1; $etoile <= $ligne; $etoile++) {
            echo "* ";
        }
        echo "<br>"; 
    }
    echo "</pr>";

    echo "</section>";
?>