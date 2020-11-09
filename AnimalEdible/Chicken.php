<?php

include_once "Animal.php";
include_once "Edible.php";
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return 'Cục tác cục cặc';
    }
    public function howToEat()
    {
        return 'Nấu em đi anh ơi';
    }
}