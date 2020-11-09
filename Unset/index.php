<?php
$arr = [2,3,4,5,1];
function findArr($num, $arr) {
    for ($i = 0; $i < count($arr),$i++) {
        if ($arr[ $i] = $num) {
            return $i;
        }
    }
    return -1;
}
function unsetNum($num, $arr) {
    $i = findArr($num, $arr);
    if ($i != -1) {
        unset($arr[$i]);
    }
    return $arr;
}
echo unsetNum(3, $arr);
?>