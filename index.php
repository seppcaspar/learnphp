<?php

class Job {
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function work(){
        for($i=0; $i<10; $i++){
            $this->logger->log($i);
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message){
        echo $message . "\n";
    }
}

interface Logger {
    public function log($message);
}


///////////////////////

class NothingLogger implements Logger {
    public function log($message){

    }
}


$consoleLogger = new ConsoleLogger();
$nothingLogger = new NothingLogger();
$job = new Job($consoleLogger);
$job->work();