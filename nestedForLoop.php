<?php

echo "<table border='1'>";

#So I looked at what the powerpoints code does so I'll try using the i and j that the question mentions
for ($i=1; $i<=15; $i++) {
    echo "<TR>";
   #I was stuck on this for a bit the thing I forgot was that they both have to be j 
    for ($j=1; $j<=20; $j++) {
        echo "<TD>row$i, col$j </TD>";
    }
    echo "</TR>";
}

echo "</table>";

?>