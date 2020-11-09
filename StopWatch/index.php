<?php
include_once 'StopWatch.php';
$stopWatch = new StopWatch();
$stopWatch->start();

for ($i = 0; $i < 100000; $i++) {
    echo $i;
}

echo "<br>";

$stopWatch->stop();
echo $stopWatch->getElapsedTime();