<?php
function ubah_huruf($string){
//kode di sini


$alpha = "abcdefghijklmnopqrstuvwxyz"; 
$luaran = ""; 
for($t=0; $t < strlen($string); $t++){

$posisi = strrpos($alpha,$string[$t]);
$luaran .= substr($alpha,$posisi+1,1); 
}

return $luaran; 
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo '<br>'; 
echo ubah_huruf('developer'); // efwfmpqfs
echo '<br>';
echo ubah_huruf('laravel'); // mbsbwfm
echo '<br>';
echo ubah_huruf('keren'); // lfsfo
echo '<br>'; 
echo ubah_huruf('semangat'); // tfnbohbu

?>