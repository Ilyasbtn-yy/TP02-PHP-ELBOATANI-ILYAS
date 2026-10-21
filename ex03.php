<?php
    // Déclaration des constantes avec define()
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prix_unitaire_ht = 60;
    $quantite = 3;

    $total_ht = $prix_unitaire_ht * $quantite;
    $montant_tva = $total_ht * (TAUX_TVA / 100);
    $total_ttc = $total_ht + $montant_tva;

    $total_ttc += 15; // Ajout des frais de livraison avec +=

    echo "<h3>Récapitulatif</h3>";
    echo "<p>Total HT : " . $total_ht . " " . DEVISE . "</p>";
    echo "<p>Montant TVA : " . $montant_tva . " " . DEVISE . "</p>";
    echo "<p>Total TTC (avec livraison) : " . $total_ttc . " " . DEVISE . "</p>";

    if (defined("TAUX_TVA")){
        echo "<p>La constante TAUX_TVA existe</p>";
    } else {
        echo "<p>La constante TAUX_TVA n'existe pas</p>";
    }
?>