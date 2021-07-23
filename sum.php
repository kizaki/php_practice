<?php
// 1～$maxまでを足した値を返す関数
function sum($max){
    // $resultは結果を保存する変数
    $result = 0;
    
    // $iは1ｋらはじまり10より大きくなるまでループする
    for($i=1; $i<=$max; $i++){
        // $resultに$iを順番に足してく
        $result += $i;
    }
    return $result;
}

// 関数を実行する
echo sum(100);
// 改行
echo "\n";
?>