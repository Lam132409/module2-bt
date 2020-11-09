<?php


class Circle
{
    public $radius;
    public $color;
    public function __construct($radius, $color)
    {
        $this->color = $color;
        $this->radius = $radius;
    }
    function getColor()
    {
        return $this->color;
    }
    function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function toString()
    {
        echo 'radius: ' . $this->radius . '<br>';
        echo 'color: ' . $this->color;
    }

    public function getPerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function getArea()
    {
        return pi() * ($this->radius * $this->radius);
    }

}