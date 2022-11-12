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

    public function find($table, $model, $id){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=$id");
        $stmt->execute();
        
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $model);
        return $stmt->fetch();
    }

    public function insert($table, $fields){
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(',', $fieldNames);
        $fieldValuesText = implode("','", $fields);
        $sql = "INSERT INTO $table ($fieldNamesText)
        VALUES ('$fieldValuesText')";
        // use exec() because no results are returned
        $this->conn->exec($sql);
    }

    public function update($table, $fields, $id){
        $updateText = '';
        foreach($fields as $key => $value){
            $updateText .= "$key='$value',";
        }
        $updateText = substr($updateText, 0, -1);
        $sql = "UPDATE $table SET $updateText WHERE id=$id";

        // Prepare statement
        $stmt = $this->conn->prepare($sql);

        // execute the query
        $stmt->execute();

    }
    public function delete($table, $id){
        $sql = "DELETE FROM $table WHERE id=$id";

        // use exec() because no results are returned
        $this->conn->exec($sql);
    }
}