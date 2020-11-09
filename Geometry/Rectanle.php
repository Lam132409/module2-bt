<?php

include_once "Shape.php";
class Rectanle extends Shape
{
    public $width;
    public $height;
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->height;
        $this->width;
    }
    function calculateArea()
    {
        return $this->width*$this->height;
    }
    function calculatePerimeter()
    {
        return ($this->height+$this->width)*2;
    }
}