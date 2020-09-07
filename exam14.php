<?php
/* ビルドイン関数の用途、使い方を調べる */
# strip_tags関数
# 文字列からHTMLをよびPHPタグを取り除く
$text = "<p>Test paragraph.</p><!-- Comment --> <a href=\"#fragment\">Other text</a>";
echo "strip_tags関数の出力結果\n";
echo strip_tags($text)."\n\n";

# array_push関数
$array = array(2,5,9,7,3,1,8,6,4);
# 渡された変数を配列の最後に追加する
array_push($array, 10);
echo "array_push関数の出力結果\n";
print_r($array)."\n\n";

# array_merge関数
# 配列の要素の最後にひとつまたは複数の配列を結合する関数
$array1 = array(2,5,9);
$array2 = array(7,3,1);
$array3 = array(8,6,4);
echo "array_merge関数の出力結果\n";
print_r(array_merge($array1, $array2, $array3));
echo "\n\n";

# time関数
# UNIXタイムスタンプを取得することができる関数
echo "現在のタイムスタンプ".time();
echo "\n\n";

# mktime関数
# 年月日を指定して、その日時のタイムスタンプを取得する関数
$timestamp = mktime(12, 0, 0, 9, 7); // 9月7日12時のタイムスタンプ
echo "9月7日12時のタイムスタンプ"."\n";
echo $timestamp."\n\n";

# date関数
# 指定された引数timestampを、与えられたフォーマットで返す変数
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s"); // 現在時刻を取得する
echo "\n";

?>