<?php

//supprimer le 4ème élément d'un tableau

   $tab = array("world","hello","good","planet","car","bike");
   
    unset($tab[3]);
    echo "Le tableau est : \n";
    print_r($tab);
?>
