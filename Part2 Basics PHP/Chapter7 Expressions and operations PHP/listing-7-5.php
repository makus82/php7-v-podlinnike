<?php
// Операторы равенства и эквивалентности
$yep = ["реальность", true];
$nein = ["реальность", "иллюзорна"];
if ($yep == $nein) echo "Два массива равны";                // выведется 
if ($yep === $nein) echo "Два массива эквивалентны";        // НЕ выведется