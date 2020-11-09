<?php


class Dancer
{
    protected $name;
    protected $gender;

    public function __construct($name, $gender)
    {
        $this->gender = $gender;
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function getGender()
    {
        return $this->gender;
    }
}