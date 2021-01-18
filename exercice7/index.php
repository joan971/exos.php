<?php
/*boucle for - créer les tables de
multiplication [1..10] x [1..10]*/

echo "<table>";

for ($x=1; $x < 10; $x++)
{
    echo "<tr>";

  
    for ($j=1; $j < 10; $j++)
     {
        echo "<td>".$x * $j."</td>";

    }

        echo "</tr>";

    }
    echo "</table>";


?>