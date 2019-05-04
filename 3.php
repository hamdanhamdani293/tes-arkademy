<?php
function pattern($panjang){
    $x = 1;
    $j = 1;
    $t = ($panjang - 1) / 2;
    $y = $t + 1;
    if ($panjang % 2 === 1){
        for ($j; $j <= $panjang; $j++){
            for ($x; $x <= $panjang; $x++){
                if ($x === 1 or $x === $panjang or $j === $y){                                       
                        echo "* ";                    
                }else{
                    echo "= ";
                }
            }
            $x = 1;
            echo "<br>";
        }            
    }
    else{
        echo "Bilangan harus ganjil ";
    }
}
pattern(5);
?>