<?php
    # 配列のすべの要素を出力
    $fruits = array("apple", "orange", "lemon");
    
    // 3と出力される
    echo "要素数は".(string)count($fruits)."個\n";
    
    for($i = 0; $i < count($fruits); $i++){
        echo "要素は".$fruits[$i];
        echo "\n";
    }
?>