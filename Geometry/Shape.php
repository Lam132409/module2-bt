<?php


class Shape
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    function show()
    {
        return "Ten toi la " .$this->name;
    }
}