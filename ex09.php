<?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $sommeNotes = 0;
    $nombreEtudiants = count($notes);
    $etudiantsValides = 0;
    
    $meilleureNote = -1;
    $meilleurEtudiant = "";

    echo "<section>";
    echo "<h2>1 & 2. Liste des étudiants et statut</h2>";
    
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Étudiant</th><th>Note</th><th>Statut</th></tr>";

    foreach ($notes as $nom => $note) {
        $sommeNotes += $note;

        if ($note >= 10) {
            $statut = "Validé";
            $etudiantsValides++; 
        } else {
            $statut = "Non validé";
        }

        if ($note > $meilleureNote) {
            $meilleureNote = $note;
            $meilleurEtudiant = $nom;
        }

        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>$note</td>";
        echo "<td>$statut</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</section>";

    echo "<hr>";

    $moyenneClasse = $sommeNotes / $nombreEtudiants;

    echo "<section>";
    echo "<h2>3, 4 & 5. Statistiques de la classe</h2>";
    echo "<p>Somme des notes : $sommeNotes</p>";
    echo "<p>Moyenne de la classe : <b>$moyenneClasse</b></p>";
    echo "<p>Nombre d'étudiants ayant validé : <b>$etudiantsValides</b></p>";
    echo "<p>Meilleure note : <b>$meilleureNote</b> (obtenue par <b>$meilleurEtudiant</b>)</p>";
    echo "</section>";
?>