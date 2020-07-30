<?php
function tukar_besar_kecil($string){
//kode di sini

$result = "";
for($t=0;$t < strlen($string);$t++){

    $orde = ord($string[$t]);
    if($orde > 64 && $orde < 91){

        $result .= chr($orde + 32);
    } else if($orde > 96 && $orde < 123){
        $result .= chr($orde-32); 
    } else {
        $result .= $string[$t];
    }
}
return $result; 
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>"; 
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>"; 
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>"; 
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo"<br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>