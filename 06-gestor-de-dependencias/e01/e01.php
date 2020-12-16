<?php


require "vendor/autoload.php";

use SebastianBergmann\Timer\Timer;

$timer = new Timer;

$timer->start();

for ($i=0; $i < 5 ; $i++) { 
    sleep(1);
    echo "a";
}

$duration = $timer->stop();
var_dump($duration->asString());
