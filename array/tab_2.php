<?php 
/**
 * Parcourir le tableau et retourner le nombre de fois ou est 
 * le mot voiture
 */


$tab = array('voiture', 'cinema', 'avion', 'voiture');
$c =0;
foreach($tab as $element)
    
{ 
    if ($element =='voiture') {
       $c++;
    }
    
}

echo $c. ' fois le mot voiture';