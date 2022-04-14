<?php
// SUJET B fait par TEP REMY
//

function colle($x, $y)
{
    // Double boucle pour parcourir le tableau en hauteur d'abord puis la longueur pour chaque ligne
    // Cette première boucle parcourt la hauteur du quadrilatère
    for ($compteur1 = 1; $compteur1 <= $y; $compteur1++) {
        // Cette deuxième boucle parcourt la largeur du quadrilatère
        for ($compteur2 = 1; $compteur2 <= $x; $compteur2++) {
            // Ce if gère si le quadrilatère a 1 de largeur
            if ($x == 1) {
                echo "*\n";
                // ce if gère si le quadrilatère a 1 de hauteur
            } else if ($y == 1) {
                // pas de retour à la ligne tant que ce n'est pas le côté droit du quadrilatère
                if ($compteur2 < $x) {
                    echo "*";
                    // c'est le côté droit du quadrilatère, donc retour à la ligne
                } else {
                    echo "*\n";
                }
                // La suite gère un cas où le quadrilatère a au minimum 2 caractères de hauteur
                // Ce if correspond à la première ligne du quadrilatère
            } else if ($compteur1 == 1) {
                // Coin en haut à gauche du quadrilatère
                if ($compteur2 == 1) {
                    echo "/";
                    // Côté haut du quadrilatère
                } else if ($compteur2 > 1 && $compteur2 < $x) {
                    echo "*";
                    // Coin en haut à droite du quadrilatère
                } else {
                    echo "\\\n";
                }
                // Ce if correspond aux côtés du quadrilatère si le quadrilatère a 3 caractères de hauteur minimum
            } else if ($compteur1 != 1 && $compteur1 < $y) {
                // Côté gauche
                if ($compteur2 == 1) {
                    echo "*";
                    // Intérieur vide du quadrilatère
                } else if ($compteur2 < $x) {
                    echo " ";
                    // Côté droit
                } else {
                    echo "*\n";
                }
                // Ce if correspond à la dernière ligne du quadrilatère
            } else if ($compteur1 == $y) {
                // Coin en bas à gauche
                if ($compteur2 == 1) {
                    echo "\\";
                    // Côté bas
                } else if ($compteur2 < $x) {
                    echo "*";
                    // Coin en bas à droite
                } else {
                    echo "/\n";
                }
            }
        }
    }
}
colle(30, 10);
// LA FONCTION RETOURNERA DONC AVEC LES FONCTIONS CI DESSUS LE TABLEAU SUIVANT :
 
/****************************\
*                            *
*                            *
*                            *
*                            *
*                            *
*                            *
*                            *
*                            *
\****************************/

