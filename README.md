# TP02-PHP-ELBOATANI-ILYAS
TP 02 PHP — Programmation Web 2 — 2026/2027  
Nom et Prénom : ELBOATANI ILYAS  
Groupe : Groupe 3  
Module : Programmation Web 2 (PHP)

## Liste des Exercices :

Exercice 1 : Fait

Exercice 2 :  
- Pourquoi "$note" et "$Note" sont-elles différentes ?
  En PHP, les noms de variables sont ## sensibles à la casse ##. C'est-à-dire que PHP fait une distinction entre les lettres minuscules et majuscules. Ainsi, `$note` et `$Note` sont deux variables distinctes.  
- Identification des noms valides :  
  `$a`, `$_a`, `$a_a`, `$AAA`, `$a1` sont valides. (`$1a` commence par un chiffre, et `$a!` contient un caractère interdit).

Exercice 3 : Fait 

Exercice 4 :  
- Différence d'affichage de `false` entre `echo` et `var_dump()` : 
        - Avec `echo` : le booléen `false` est converti en chaîne vide, donc rien ne s'affiche.  
        - Avec `var_dump()` : affiche le type exact (`bool(false)`).

Exercice 5 :  
- Valeurs testées et messages obtenus : 
  | Valeur testée | Message obtenu |  
  | ---           | ---            |  
  | -1            | Note invalide  |  
  | 9             | Non validé     |  
  | 10            | Passable       |  
  | 12            | Assez bien     |  
  | 14            | Bien           |  
  | 16            | Très bien      |     
  | 21            | Note invalide  |  

Exercice 6 : Utilisation de `switch` avec le mois courant `date("m")`.  
Exercice 7 : Table de multiplication et pyramide d'étoiles.  
Exercice 8 : Boucles while, do-while, continue et break.  
Exercice 9 : Tableau associatif et statistiques de la classe.  
Exercice 10 : Formulaires GET et POST avec vérifications de sécurité.