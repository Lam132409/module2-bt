<?php
include_once "HCN.php";

$width  = 10;
$height = 20;
$hcn = new HCN($width, $height);
echo $hcn->width;
echo $hcn->height;

$hcn->height = 30;
$hcn->width = 20;

echo $hcn->height;
echo $hcn->width;
echo $hcn->getPerimeter();
echo $hcn->getArea();
echo ("DM cuoc doi". $hcn->display());
?>
