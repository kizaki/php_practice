<?php
    /* $array_monthという配列に1月～12月の文字列を代入し、echoで8月を表示 */
    // $array_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
    
    /* 別解 */
    $array_month = [];
    for($i=1; $i<=12; $i++){
        array_push($array_month,(string)($i)."月");
    }
    
    echo $array_month[7]."\n";
?>