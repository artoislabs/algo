<?php

/**
 * Parcourir le tableau $tab jusqu'a rencontrer 
 * le prenom "David" une fois rencontré afficher "prenom trouvé"
 */


$tab = array('Jean', 'Baptiste', 'Poquelin', 'David', 'Vanessa');


//bouche foreach pour parcourir tableau
foreach($tab as $element)
    
{   //affiche elements
    echo $element. '<br/><br/><br/>';
    //si l'element vaut 'David'
    if ($element =='David') {
        echo ' (Prenom trouvé) <br/>';
    }
}
