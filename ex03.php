<?php

    //Déclaration des constantes avec functions define()
    define("TAUX_TVA",20);
    define("DEVISE","MAD");

    $prix_unitaire_hT = 60;
    $quantite = 3;


    $total_hT = $prix_unitaire_hT * $quantite;
    $montant_tva = $total_hT * (TAUX_TVA / 100);
    $total_ttc = $total_hT + $montant_tva;

    $total_ttc += 15;

    echo "<h3>Récapitulatif</h3>";
    echo "<p>Total HT : " . $total_hT . " " . DEVISE . "</p>";
    echo "<p>Montant TVA : " . $montant_tva . " " . DEVISE . "</p>";
    echo "<p>Total TTC : " . $total_ttc . " " . DEVISE . "</p>";

    if (defined("TAUX_TVA")){
        echo "<p>La constante TAUX_TVA existe</p>";
    }
    else {
        echo "<p>La constante TAUX_TVA n'existe pas</p>";
    }
?>