<?php

    //1)
    $valeur_int = 42;
    $valeur_str = "42";
    $valeur_float = 15.8;
    $valeur_bool_t = true;
    $valeur_bool_f = false;
    $valeur_null = null;

    //2)
    echo "<h3>Types et valeurs des variables</h3>";
    echo "<pre>";
    var_dump($valeur_int, $valeur_str, $valeur_float, $valeur_bool_t, $valeur_bool_f, $valeur_null);
    echo "</pre>";


    //3)
    echo "<h3>Conversions</h3>";
    
    $conv1 = (int)$valeur_str;
    var_dump($conv1);
    echo "<br>";

    $conv2 = (int)$valeur_float;
    var_dump($conv2);
    echo "<br>";

    $conv3 = (string)$valeur_int;
    var_dump($conv3);
    echo "<br>";

    //4)

    echo "<h3>Affichage de true et false</h3>";
    
    echo "##Avec echo: <br>";
    echo "True : " . $valeur_bool_t . "<br>";  
    echo "False : " . $valeur_bool_f . "<br>";

    echo "<br> ##Avec var_dump : <br>";
    var_dump($valeur_bool_t); 
    echo "<br>";
    var_dump($valeur_bool_f);

    // 5)
    echo "<h3>Conversions en booléens</h3>";
    var_dump((bool)0);
    echo "<br>";
    var_dump((bool)"0");
    echo "<br>";
    var_dump((bool)"PHP");
    echo "<br>";
    var_dump((bool)[]);
?>