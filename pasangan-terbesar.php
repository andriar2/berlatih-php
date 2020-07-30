<?php

function pasangan_terbesar($number)
{
    $array = array_map('intval', str_split($number));

    $val = max($array);
    $search = (array_search($val, $array) + 1);
    $next = $array[$search];

    echo $val . $next . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
