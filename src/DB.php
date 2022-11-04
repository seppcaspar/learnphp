<?php

namespace App;

use PDO;

class DB {
    protected $conn;

    public function __construct()
    {
        $this->conn = new PDO('sqlite:database.sqlite');
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function all($table, $model){
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
        return $stmt->fetchAll();
    }
}