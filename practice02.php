<?php
$a = 3;
$b = 3;
$c = "3";

// $aと$bが等しいときにtrueそうでなければfalseを返す。
var_dump($a == $b);

// $aと$bが等しくないときにtrue
var_dump($a != $b);

// $aが$bより大きい時にtrue、そうでなければfalseを返す。
var_dump($a > $b);

// $aが$b以上のときtrue、そうでなければfalseを返す。
var_dump($a >= $b);

// $aが$bより小さいときtrue、そうでなければfalseを返す。
var_dump($a < $b);

// $aが$bより小さいか、等しい時にtrue、そうでなければfalseを返す。
var_dump($a <= $b);

// $aが$cのデータ型が等しく、かつ値も等しい時にture、そうでなければfalseを返す。
var_dump($a === $c);

// $aが$cとデータ型が等しくないか、もしくは値が等しくないときにtrue、そうでなければfalseを返す。
var_dump($a !== $c);

?>