<?php

class Job {
    public function work(){
        $logger = new ConsoleLogger();
        for($i=0; $i<10; $i++){
            $logger->log($i);
        }
    }
}

class ConsoleLogger {
    public function log($message){
        echo $message . "\n";
    }
}


///////////////////////


$job = new Job();
$job->work();