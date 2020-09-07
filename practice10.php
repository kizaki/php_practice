<?php

/* 文字列の長さを取得する */
$string = "ABCDEF";
echo strlen($string)."\n";

/* 文字列を置換する */
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string."\n";

/* 配列の要素の個数を取得する */
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array)."\n";

/* 配列をソート（並び替え）をする */
$array2 = array(2,5,9,7,3,1,8,6,4);

// 配列を昇順にソートする
asort($array2);
print_r($array2);

// $array2を降順にソートする
arsort($array2);
print_r($array2);

?>