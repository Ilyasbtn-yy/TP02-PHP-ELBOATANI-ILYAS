<?php
if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe']) && 
    trim($_POST['nom']) !== '' && trim($_POST['prenom']) !== '') {
    
    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
    $groupe = htmlspecialchars($_POST['groupe'], ENT_QUOTES, 'UTF-8');

    echo "<h3>Bienvenue $prenom $nom du groupe $groupe (Méthode POST)</h3>";
} else {
    echo "<p>Veuillez remplir tous les champs du formulaire correctement.</p>";
}
?>