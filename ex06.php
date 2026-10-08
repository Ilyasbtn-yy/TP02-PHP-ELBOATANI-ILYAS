<?php

    echo "<h1>Les Mois de l'année</h1>";

    $numeroMois = 3;
    $numeroMois = (int) date("m");
    echo "<p>Numéro du mois testé : " . $numeroMois . "</p>";

    switch ($numeroMois) {
        case 1:
            echo "<p>Janvier</p>";
            break;
        case 2:
            echo "<p>Février</p>";
            break;
        case 3:
            echo "<p>Mars</p>";
            break;
        case 4:
            echo "<p>Avril</p>";
            break;
        case 5:
            echo "<p>Mai</p>";
            break;
        case 6:
            echo "<p>Juin</p>";
            break;
        case 7:
            echo "<p>Juillet</p>";
            break;
        case 8:
            echo "<p>Août</p>";
            break;
        case 9:
            echo "<p>Septembre</p>";
            break;
        case 10:
            echo "<p>Octobre</p>";
            break;
        case 11:
            echo "<p>Novembre</p>";
            break;
        case 12:
            echo "<p>Décembre</p>";
            break;
        default:
            echo "<p>Numéro de mois invalide</p>";
            break;
    }
?>