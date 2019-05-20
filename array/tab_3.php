<?php 

/**
 * Parcourir le tableau et
 * Retourner uniquement les chiffres pair du tableau
 * 
 */

$tab = array(5 , 6, 7, 8, 12, 26 );

foreach($tab as $element)
    {  
        if ($element % 2 == 0) 
            { 
                echo  ' ' .$element; 
            } 
    }
