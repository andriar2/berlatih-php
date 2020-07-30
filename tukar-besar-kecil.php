<?php
function tukar_besar_kecil($string){
//kode di sini
    $temp="";
    for($i = 0; $i < strlen($string); $i++){
        $tampung = $string[$i];
    
    if(ctype_alpha($tampung) && $tampung === strtolower($tampung)){
        $temp.= strtoupper($tampung);
    }
    else if(ctype_alpha($tampung) && $tampung === strtoupper($tampung)){
        $temp.= strtolower($tampung);
    }
    else{
        $tampung .= $string[$i];
    };
};
return $temp;
};

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>