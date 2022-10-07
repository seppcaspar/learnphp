<?php

class Person {
    public $name;
    public $age;
    public $gender;
    public $idCode;
    public static $id;

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
        self::$id;
        return substr($this->idCode, 1, 2);
    }

    public function getFullYear(){
        return $this->getCentury() + (int) substr($this->idCode, 1, 2);
    }
    public static function getId(){
        return self::$id;
    }
}
Person::getId();
Person::$id = 2;
$kaspar = new Person();
$kati = new Person();

var_dump(Person::$id);
var_dump(Person::$id);
var_dump(Person::$id);