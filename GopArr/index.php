
<?php
$arr1 = array(1,2,3,4);
$arr2 =array(5,6,7,8,9);
$arr3 =array();
for ($i=0;$i<count($arr1);$i++){
    array_push($arr3,$arr1[$i]);
}
for ($i=0;$i<count($arr2);$i++){
    array_push($arr3,$arr2[$i]);
}
foreach ($arr3 as $value){
    echo $value. ",";
}