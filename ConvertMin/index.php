<?php
$convert = [2, 3, 4, 5, 6, 7, 8, 1];
function convertMin($convert) {
    $min = $convert[0];
    for($i = 1; $i < count($convert); $i++) {
        if ($convert[$i] < $min) {
            $min = $convert[$i];
        }
    }
    return $min;
}
echo convertMin($convert)
?>

