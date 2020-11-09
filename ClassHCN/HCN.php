<?php


class HCN
{
    public $width;
    public $height;
    public function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
    }
    public function getArea() {
        return $this->width*$this->height;
    }
    public function getPerimeter() {
        return ($this->height + $this->width)*2;
    }
    public function display() {
        return "HCN{" . "width=" .$this->width .", height =" . $this->height . "}";
    }
}
