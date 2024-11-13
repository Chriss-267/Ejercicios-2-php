<?php
function mergeSort($array) {
    $length = count($array);

    if ($length <= 1) {
        return $array;
    }

    $middle = (int)($length / 2);

    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $leftLength = count($left);
    $rightLength = count($right);
    $i = 0;
    $j = 0;

    while ($i < $leftLength && $j < $rightLength) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < $leftLength) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < $rightLength) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

$data = [53, 2, 18, 5, 9];
$arrayElements = mergeSort($data);

echo "Array: ";
foreach ($arrayElements as $element) {
    echo $element . " ";
}
