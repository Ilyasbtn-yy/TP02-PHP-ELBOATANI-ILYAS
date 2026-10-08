<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP2 PHP - Exercice 1</title>
</head>
<body>

    <?php 

        echo "« Bienvenue dans mon TP PHP ».";
        echo "<br>";


        $nom = "SALAH";
        $prenom = "ILYAS";
        $groupe = 3;
        /* 
        Commentaires sur plusieurs lignes
        .....
        .....
        */
        //Affichage des 3 variables
        echo "Le nom est: " . $nom ;
        echo "<br>";
        echo "Le prenom est :". $prenom; 
        echo "<br>";
        echo "Le groupe est: ". $groupe ;
        echo "<br>";

    ?>
    <?= "Voici la reponse d'exercice 1" ?>

</body>
</html>