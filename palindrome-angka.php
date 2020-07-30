<?php

function palindrome_angka($angka) {
  // tulis kode di sini
    $result="";
    $str_angka=strval($angka);
    $balikstr="";
    for ($i = strlen($str_angka)-1; $i>= 0; $i--){
        $balikstr.= $str_angka[$i];
    }
    if($balikstr==$str_angka){
        $angka+=1;
    }
    while(true){
        $str_angka=strval($angka);
        $balikstr="";
        for($i =strlen($str_angka)-1; $i >= 0; $i--){
            $balikstr.=$str_angka[$i];
        }
        if($balikstr == $str_angka){
            global $result;
            $result=$str_angka."<br>";
            return $result;
        }
        else{
            $angka+=1;
        };
    };
};

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(121); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>