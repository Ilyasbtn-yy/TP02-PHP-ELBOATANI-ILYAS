# TP02-PHP-ELBOATANI-ILYAS
TP 02 PHP — Programmation Web 2 — 2026/2027
Nom et Prénom : ELBOATANI ILYAS
Groupe : Groupe 3 
Module : Programmation Web 2 (PHP)

## Liste des Exercices :

Exercice 1: ___

Exercice 2: 
    ##Pourquoi "$note" et "$Note" sont-elles différentes ?
        En PHP, les noms de variables sont **sensibles à la casse**. càd PHP fait une distinction  entre les lettres minuscules et majuscules. Et puisque "$note" (avec 'n' minuscule) et "$Note" (avec  'N' majuscule) sont traités donc deux variables différentes**.
    ##identification des noms valides:
        $a  - $_a  -  $a_a  -   $AAA   -   $a1

Exercice 3: __

Exercice 4: 
    ##la différence d'affichage de `false` entre `echo` et `var_dump()`.

        Avec **echo** : PHP convertit automatiquement Toutes valeurs en texte pour les afficher.Donc le booléen false, cette conversion donne une chaîne de caractères vide "", c'est pourquoi  rien ne s'affiche à l'écran.

        Avec **var_dump()** : Cette fonction ne convertit pas les valeurs en string, mais elle affiche la structure complète de la variable, en indiquant son type et sa valeur exacte, et dans ce cas le type est: bool, et la valeur est: false.
        
Exercice 5:
    ##Valeurs testées et messages obtenus

        | Valeur testée | Message obtenu|
        | ____________  | _____________ |
        | -1            | Note invalide |
        |  9            | Non validé    |
        | 10            | Passable      |
        | 12            | Assez bien    |
        | 14            | Bien          |
        | 16            | Très bien     |
        | 21            | Note invalid` |

Exercice 6:
Exercice 7
Exercice 9
Exercice 10