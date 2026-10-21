<?php
if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe']) && 
    trim($_GET['nom']) !== '' && trim($_GET['prenom']) !== '') {
    
    $nom = htmlspecialchars($_GET['nom'], ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars($_GET['prenom'], ENT_QUOTES, 'UTF-8');
    $groupe = htmlspecialchars($_GET['groupe'], ENT_QUOTES, 'UTF-8');

    echo "<h3>Bienvenue $prenom $nom du groupe $groupe (Méthode GET)</h3>";
} else {
    echo "<p>Veuillez remplir tous les champs du formulaire correctement.</p>";
}
?>