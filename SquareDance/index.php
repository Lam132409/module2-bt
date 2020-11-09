<?php
include_once "Dancer.php";

$queueMale = new SplQueue();
$queueFemale = new SplQueue();

$Male1 = new Dancer('Male1', 'Male');
$queueMale->enqueue($Male1->getName());
$Male2 = new Dancer('Male1', 'Male');
$queueMale->enqueue($Male2->getName());
$Male3 = new Dancer('Male1', 'Male');
$queueMale->enqueue($Male3->getName());
$Male4 = new Dancer('Male1', 'Male');
$queueMale->enqueue($Male4->getName());

$Female1 = new Dancer('Female1', 'Female');
$queueFemale->enqueue($Female1->getName());
$Female2 = new Dancer('Female1', 'Female');
$queueFemale->enqueue($Female2->getName());
$Female3 = new Dancer('Female1', 'Female');
$queueFemale->enqueue($Female3->getName());

while (!$queueMale->isEmpty() && !$queueFemale->isEmpty()) {
    $queueMale->dequeue();
    $queueFemale->dequeue();
}
$Female4 = new Dancer('Female4', 'Female');
$queueFemale->enqueue($Female4->getName());
$Female5 = new Dancer('Female5', 'Female');
$queueFemale->enqueue($Female5->getName());
$Female6 = new Dancer('Female6', '6emale');
$queueFemale->enqueue($Female6->getName());
while (!$queueMale->isEmpty() && !$queueFemale->isEmpty()) {
    $queueMale->dequeue();
    $queueFemale->dequeue();
}
while (!$queueMale->isEmpty()) {
    echo $queueMale->dequeue() . " đang đợi ";
}
while (!$queueFemale->isEmpty()) {
    echo $queueFemale->dequeue() . ' đang đợi' . '<br>';
}


