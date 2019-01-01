<?php
// states.php file

$states = "Mississippi Alabama Taxas Massachusetts Kansas";
// xas


$states_string_to_array = explode(' ', $states);

$states_array = [];

for($x = 0; $x < count($states_string_to_array); $x++) {
    if (preg_match('/xas$/', $states_string_to_array[$x]))
        $states_array[0] = $states_string_to_array[$x];


    if(preg_match('/K[\s\S]*s/i', $states_string_to_array[$x]))
        $states_array[1] = $states_string_to_array[$x];
}




