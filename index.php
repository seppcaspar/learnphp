<?php

class Person {
    use HasEyes;
}

class Dog {
    use HasEyes;
}

class Fly {
    use HasEyes;
}

trait HasEyes {
    public $nrOfEyes;

    public function canSeeThings(){
        return $this->nrOfEyes>0;
    }
}

$person = new Person();
$person->nrOfEyes = 2;
var_dump($person->canSeeThings());
var_dump($person);