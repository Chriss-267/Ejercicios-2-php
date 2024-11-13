<?php


function minimumNumber($n, $password) {
  
    $numbers = "0123456789";
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()-+";

   
    $has_digit = false;
    $has_lower = false;
    $has_upper = false;
    $has_special = false;



    for ($i = 0; $i < $n; $i++) {
        $char = $password[$i];
        if (strpos($numbers, $char) !== false) {
            $has_digit = true;
        } elseif (strpos($lower_case, $char) !== false) {
            $has_lower = true;
        } elseif (strpos($upper_case, $char) !== false) {
            $has_upper = true;
        } elseif (strpos($special_characters, $char) !== false) {
            $has_special = true;
        }
    }



    $missing_types = 0;
    if (!$has_digit) $missing_types++;
    if (!$has_lower) $missing_types++;
    if (!$has_upper) $missing_types++;
    if (!$has_special) $missing_types++;



    $required_length = max(6 - $n, 0);



    return max($missing_types, $required_length);
}





$n2 = 6;
$password2 = "#Hahjk";
echo minimumNumber($n2, $password2); 
?>