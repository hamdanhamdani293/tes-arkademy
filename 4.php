<?php
$data = [
    ['a','c','b','e','d'],
    ['g','e','f']
];

function sort_array($data){
    $hitung = 0;
    foreach ($data as $dt) {
        for ($i = 0; $i < count($dt); $i++){
        echo "$dt[$i]";
        $hitung += 1;
    }
    $tampung = $hitung ;
    $hitung = 0;
    echo "$tampung <br>";

    }
    
}
sort_array($data);

?>