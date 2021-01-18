<?php

//trier par ordre croissant un tableau avec foreach


$calories = array(" Miel" => "304", " Réglisse" => "377", " Sorbet" => " 90", " Sucre" => "396", " Cookies" => "464");
ksort($calories);
foreach($calories as $cle=>$valeur)
echo $cle." = ".$valeur." cal.";
echo"";
asort($calories);
foreach($calories as $cle=>$valeur)
echo $cle." = ".$valeur." cal.<br>";
?>