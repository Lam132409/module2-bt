<?php
include_once ("Point.php");
include_once ("MoveablePoint.php");

echo 'Point' . '<br>';
$point = new Point(1,1);
$point->toString();
echo '<br>';

echo 'MoveablePoint' . '<br>';
$movePoint = new MoveablePoint(2,2,1,1);
$movePoint->move();
$movePoint->toString();