<?php

$thread1 = new \parallel\Runtime();
$thread2 = new \parallel\Runtime();

$task = function(){

    while(true){
        echo "*";
        sleep(1);
    }
};

$task2 = function(){

    while(true){
        echo "+";
        sleep(1);
    }
};

$thread1->run($task);
$thread2->run($task2);