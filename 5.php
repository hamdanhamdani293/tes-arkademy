<?php
function cetak($n){
  $karakter = 'abcdefghijklmnopqrstupwxyz1234567890';
  $string = ''  ;
  for ($i = 0; $i < $n; $i++){
      for ($j = 0; $j < 32; $j++){
      $pos = rand(0, strlen($karakter)-1);
      $string .= $karakter{$pos};
    }
    echo "$string <br>";    
    $string = '';
  }
  
}

echo cetak(3);

?>