<?php
function skor_terbesar($arr){
//kode di sini

$result = []; 
$ReactNative = [];
$JS = []; 
$Laravel = []; 
foreach($arr as $kunci => $baris)
{

  $score[$kunci] = $baris['nilai'];
  $class[$kunci] = $baris['kelas']; 

}

array_multisort($class, SORT_DESC, $score, $arr); 

for($x = 0; $x < count($arr);$x++) {

  if($arr[$x]['kelas'] == 'React Native') {

    $ReactNative[] = $arr[$x];
  } else if($arr[$x]['kelas'] == 'React JS') {
      $JS[] = $arr[$x]; 
  } else if($arr[$x]['kelas'] == 'Laravel'){

    $Laravel[] = $arr[$x];
  }

}

print_r($ReactNative);
echo "<br>";
print_r($JS);
echo "<br>";
print_r($Laravel);
echo"<br>";
$result[] = $ReactNative[0]; 
$result[] = $JS[0]; 
$result[] = $Laravel[0];
foreach($result as $kunci => $hasil)
{

  print "Skor terbesar dari kelas ". $hasil['kelas'] ."diperoleh oleh " . $hasil['nama'] . "dengan skor sebesar " . $hasil['nilai'] . "<br>"; 
}



}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

echo"<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>