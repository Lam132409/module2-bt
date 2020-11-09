<?php
$arr = [[5, 2, 3], [2, 6, 8], [1, 9, 7]];
function convertMax($arr) {
    $max = count($arr[0][0]);
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 1; $j < count($arr[$i]); $j++) {
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
echo convertMax($arr)
?>
