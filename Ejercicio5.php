<?php

function aVeryBigSum($ar) {
    $sum = 0;
    for($i = 0; $i < count($ar); $i++) {
        $sum += $ar[$i];
    }
    return $sum;
}

// Ejemplo de array
$ar = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];


echo aVeryBigSum($ar);

?>