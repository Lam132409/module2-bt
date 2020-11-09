<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(10, black);
echo 'Circle'. '<br>';
echo $circle->toString() .'<br>';
echo 'Perimeter ' .$circle->getPerimeter() .'<br>';
echo 'Area' .$circle->getArea() .'<br>';
$cylinder = new Cylinder(10, red, 15);
echo 'Cylinder' . '<br>';
echo $cylinder->toString() .'<br>';
echo 'Volume: ' . $cylinder->getVolume();

?>
