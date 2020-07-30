<?php

function tentukan_deret_aritmatika($isi_array)
{
    $b1 = $isi_array[1] - $isi_array[0];
    for ($i = 0; $i < sizeof($isi_array) - 1; $i++) {
        $b2 = $isi_array[$i + 1] - $isi_array[$i];
        if ($b2 != $b1) {
            return "false<br>";
        }
    }
    return "true<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); // true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); // false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); // false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
