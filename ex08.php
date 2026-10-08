<?php

    echo "<h1>Contrôle des boucles et itérations</h1>";

    //1)

    echo "<section>";

    echo "<h2>Nombres pairs de 0 à 20</h2>";
    
    $i = 0;
    while ($i <= 20) {
        if ($i == 10) {
            echo "<b>$i</b> ";
        } else {
            echo "$i ";
        }
        $i += 2;
    }

    echo "</section>";

    echo "<hr>";

    // 2)

    echo "<section>";

    echo "<h2>Comparaison While et Do-While</h2>";
    
    #while
    $compteur = 5;
    $avecWhile = 0;
    while ($compteur < 5) {
        $avecWhile++;
        $compteur++;
    }
    echo "<p>Nombre d'exécutions avec <b>while</b> : $avecWhile</p>";

    #dowhile
    $compteur = 5;
    $avecDoWhile = 0;
    do {
        $avecDoWhile++;
        $compteur++;
    }while ($compteur < 5);
    
    echo "<p>Nombre d'exécutions avec <b>do-while</b> : $avecDoWhile</p>";

    echo "</section>";

    echo "<hr>";

    // 3)
    echo "<section>";

    echo "<h2>Utilisation de continue et break</h2>";
    
    for ($i = 1; $i <= 20; $i++) {
        if ($i == 16) {
            break; 
        }
        if ($i % 3 == 0) {
            continue; 
        }
        
        echo "$i ";
    }
    echo "</section>";
?>