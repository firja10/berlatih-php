<?php
function pasangan_terbesar($angka){
// kode di sini

$biggest = substr($angka,0,2); 
for($i=0;$i<=strlen($angka)-2;$i++){

    $numbercouple = substr($angka,$i,2); 

    if($numbercouple > $biggest)
    
    {
            $biggest = $numbercouple; 
    }
}

return $biggest; 
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo '<br>';
echo pasangan_terbesar(12783456); // 83
echo '<br>';
echo pasangan_terbesar(910233); // 91
echo "<br>";
echo pasangan_terbesar(71856421); // 85
echo "<br>"; 
echo pasangan_terbesar(79918293); // 99

?>