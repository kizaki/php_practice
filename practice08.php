<?php

/* 1～100までを繰返し処理で足す。*/
echo "初期値は".(string)$total."です。\n";

// $iが0から始まり、$iが100以下の間繰り返し処理を行う。
for($i=0; $i<=100; $i++){
    $total += $i;
}

echo (string)$total."\n";

?>