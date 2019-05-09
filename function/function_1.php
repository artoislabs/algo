<?php

/**
 * Faire une fonction qui recoit en parametre un tableau et retourne 
 * le nombre d'elements du tableau (comme la fonction count)
 *
 */

//Squelette de la fonction
function getNbElement($tab)
{
	//A completer
    //fonction count pour compter element tableau.
    echo  '<br/>nb elements : ' .count($tab);
}

$myTab = array('element1', 'element1', 'element1' );
//doit retourner 3

//affiche elements tableau
print_r($myTab) .'<br/>';

//appel fonction
getNbElement($myTab); 