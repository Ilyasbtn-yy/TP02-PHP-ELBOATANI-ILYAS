<?php

    $moyenne = 16; 

    echo"<h3>Affichage de la mention</p>";

    if ($moyenne < 0 || $moyenne > 20) {
        echo "<p>Note invalide</p>";
    } 
    else {
        if ($moyenne < 10) {
            echo "<p>Non validé</p>";
        } 
        elseif ($moyenne < 12) {
            echo "<p>Passable</p>";
        } 
        elseif ($moyenne < 14) {
            echo "<p>Assez bien</p>";
        } 
        elseif ($moyenne < 16) {
            echo "<p>Bien</p>";
        } 
        else {
            echo "<p>Très bien</p>";
        }
    }
?>