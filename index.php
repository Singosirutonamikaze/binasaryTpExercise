<?php
    /*Exercice 1:Écrivez un script qui récupère un nom passé en paramètre via l'URL (?name=...) et affiche "Bonjour, [nom]".
    Si aucun nom n'est passé, affichez "Bonjour, invité".*/

    //Exercice 1
    $nom = $_GET['name'];
    if(isset($_GET['name'])){
        echo("Bonjour, $nom");
    }else{
        echo("Bonjour,invité");
    }

    /*Exercice 2 : Utiliser $_GET pour récupérer deux nombres et une opération, puis effectuer l'opération demandée.
    Récupérez deux nombres (a et b) et une opération (op) passés en paramètres via l'URL.
    Affichez le résultat de l'opération.*/

    //Exercice 2
    //Déclaration des variables
    $nombre1 = $_GET['a'];
    $nombre2 = $_GET['b'];
    $resultat = null;
    $opération = $_GET['op'];

    //Condition sur les divers opération
    if(isset($number1) && isset($number2)){
        if((float)$nombre1 && (float)$nombre2 || (int)$nombre1 && (int)$nombre2){
            if($opration == 'add'){
                $resultat = $nombre1 + $nombre2;
            }elseif($opration == 'sous'){
                $resultat = $nombre1 - $nombre2;
            }elseif($opration == 'mult'){
                //Cas de nombre nulle
                if($nombre1 == 0 || $nombre2 == 0){
                    $resultat = 0;
                }else{
                    $resultat = $nombre1 * $nombre2;
                }
            }elseif($operation = 'div'){
                //Division par zero
                if($nombre1 == 0 || $nombre2 == 0){
                    echo("la division impossible");
                }else{
                    $resultat = $nombre1 / $nombre2;
                }
            }
        }else{
            echo('Veuillez entrer des nombres de type entier');
        }
    }

    echo("Le résultat de votre opération $opration est : $resultat");

    /*Exercice 3 :  Récupérez un nombre n passé en paramètre via l'URL.
    Utilisez une boucle for pour afficher la table de multiplication de n (de 1 à 10).*/

    //Exercice 3
    /*Fonction d'affichage de la table de multiplication*/
    function TableDeMultiplication($nombre){
        $produit = null;
        for($nombre = 0; $nombre <= 10; $nombre++)
        {
            echo("Table de Multiplication de $nombre <br>");
            for($cpt = 0; $cpt <= 20; $cpt++)
            {
                $produit =  $cpt * $nombre;
                echo("$cpt * $nombre = $produit <br>");
            }
            echo("<br>");
        }
    }

    //Vérification du type de paramètre et appel de la fonction
    $number = $_GET['n'];
    if(isset($number)){
        if((int)$number){
            echo('Table de Multiplication de '.$number);
            TableDeMultiplication($number);
        }else{
            echo('Veuillez entrer un nombre de type entier');
        }
    }

    /*Exercice 4 : Récupérez un tableau de nombres passé via l'URL .
    Utilisez une boucle foreach pour parcourir le tableau et afficher uniquement les nombres pairs.*/

    //Exercice 4
    /*Fonction d'affichage des nombres pairs*/
    function NombrePairs($tableauNombre){
        foreach($tableauNombre as $key => $value){
            if($value % 2 == 0){
                echo($value.' ');
            }
        }
    }

    //Vérification du type de paramètre et appel de la fonction
    $tableau = $_GET['numbers'];
    if(isset($tableau)){
        if(is_array($tableau)){
            echo('Les nombres pairs sont : ');
            NombrePairs($tableau);
        }else{
            echo('Veuillez entrer rien que des nombres.');
        }
    }

    /*Exercice 5 : Récupérez une liste d'éléments (séparés par des virgules) passée via l'URL.
    Utilisez une fonction pour générer et afficher cette liste sous forme de liste à puces (<ul><li>...).*/

    //Exercice 5
    //Fonction d'affichage de la liste des éléments
    function AfficherListe($listeElement){
        echo('<ul>');
            foreach($listeElement as $key => $value){
                echo("<li>$value</li>");
            }
        echo('<ul>');
    }

    //Appel de la fonction et recupération des données de l'url
    $liste = $_GET['items'];
    if(isset($liste)){
        if(is_array($liste)){
            echo("Voici la liste des éléments saisi dans l'url: ");
            AfficherListe($liste);
        }else{
            echo("Veuillez entrer une liste d'élément séparés par une virgule.");
        }
    }
?>
