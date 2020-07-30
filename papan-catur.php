<?php

function papan_catur($angka) {
// tulis kode di sini
for($x=0;$x < $angka ; $x++)
{

    for($y=0;$y<2*($angka)-1;$y++)
    {

        if($y % 2 == 1 && $x % 2 == 1){

            echo "#&nbsp"; 

        } else if($y%2 == 0 && $x%2==0){

            echo "#&nbsp";
            
        }
            else{

                echo "&nbsp";
                
            }
        }
        echo "<br>";

}
}


// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */
echo "<br>";
echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "<br>";
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/