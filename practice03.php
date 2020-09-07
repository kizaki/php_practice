<?php
// 身長が150cmよりも小さい場合は拒否する
$height = 160;
if($height < 150){
    echo "150cm未満の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
echo "\n";

?>