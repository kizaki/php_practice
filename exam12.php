<?php
# $arrという配列を仮引数に持ち、数値が入った配列を渡す
# とその要素をすべてかけた結果を返す関数
function arrayMultiplication($arr){
    $total = 1;
    foreach($arr as $num){
        $total *= $num; 
    }
    return $total;
}

$array = [1,3,5,7,9];
echo "結果は".arrayMultiplication($array)."です\n";

?>