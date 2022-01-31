<?php

$div2 = function ($item) {
    if (is_nan($item)) {
        return$item;
    }
    return $item / 2;

};
$tab = [2 , 4 ,6 , 8 ,10 , 2 ,2 ,2 ,2 ,2];
$tabDivPer2 = array_map($div2, $tab);

var_dump($tabDivPer2)."<br><br>";

list($n1, $n2n, $n3n, $n4, $n5 ) = $tab;
echo $n1, $n2n, $n3n, $n4, $n5."<br><br>";

echo array_search(6, $tab);

var_dump(array_unique($tab));

echo print_r(array_values($tab));