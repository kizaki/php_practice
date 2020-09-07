<?php
# foreachによる順次処理
$animals = array("dog", "cat", "panda");
// $animalsから１つずつ要素を取り出して、$animalに代入される
foreach($animals as $animal){
    echo "要素は".$animal;
    echo "\n";
}

?>