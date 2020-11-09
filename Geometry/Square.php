<?php

include_once "Rectanle.php";
class Square extends Rectanle
{
public function __construct($name, $width, $height)
{
    parent::__construct($name, $width, $height);
}
}