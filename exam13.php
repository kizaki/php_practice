<?php
# 配列の中で１番大きい値を返す関数

function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        // 次の要素と比較して次の要素の方が大きければ$max_numberとする
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

$array=array(2,5,9,7,3,1,8,6,4);
echo "最大値は".max_array($array)."です\n";

?>