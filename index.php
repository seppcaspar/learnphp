<?php

class Person {
    public $name;
    public $age;
    public $gender;
    public $idCode;
    
    private function getCentury(){
        $num = (int) substr($this->idCode, 0, 1);
        return 1700 + ceil($num/2) * 100;
        // switch($num) {
        //     case 1:
        //     case 2:
        //         return 1800;
        //     case 3:
        //     case 4:
        //         return 1900;
        //     case 5:
        //     case 6:
        //         return 2000;
        // }
    }

    public function birthYear(){
        return substr($this->idCode, 1, 2);
    }

    public function getFullYear(){
        return $this->getCentury() + (int) substr($this->idCode, 1, 2);
    }
}

class Client extends Person {
    public $purchases = [];

    public function addItem($itemId){
        $this->purchases[] = $itemId;
    }
}

class Worker extends Person {
    public $salary;
}

class Manager extends Worker{

}

$kaspar = new Client();
$kaspar->name = 'Kaspar Suursalu';
$kaspar->age = 29;
$kaspar->gender = 'male';
$kaspar->idCode = '39303217010';

var_dump($kaspar);
var_dump($kaspar->name);

$kati = new Person();
$kati->name = 'Kati Karu';

var_dump($kati);
var_dump($kati->name);
var_dump($kaspar->getFullYear());
$kaspar->addItem(123);