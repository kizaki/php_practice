<?php
$weekday = "木曜";
// $weekdayが月曜だったら「可燃ごみの日です。」、水曜日だったら「資源ごみの日です。」、
// それ以外だったら「回収はありません。」
switch ($weekday){
    case "月曜":
    case "木曜":
        echo "可燃ごみの日です。\n";
        break;
    case "水曜":
        echo "資源ごみの日です。\n";
        break;
    default:
        echo "回収はありません。\n";
        break;
}
// 可燃ごみの日です。が表示される。

?>