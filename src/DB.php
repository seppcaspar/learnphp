<?php

namespace App;

use App\Models\Post;
use PDO;
use PDOException;
use stdClass;

class DB
{
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all($tabel, $class)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $tabel");
        $stmt->execute();


        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    public function find(string $tabel, string $class, $id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $tabel WHERE id=$id");
        $stmt->execute();


        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }
    public function where(string $tabel, string $class, $fieldName, $value)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $tabel WHERE $fieldName='$value'");
        $stmt->execute();


        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }



    public function insert($table, $fields)
    {
        unset($fields['id']);

        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(",", $fieldNames);
        $fieldValuesText = implode("','", $fields);
        $sql = "INSERT INTO $table ($fieldNamesText)
                VALUES ('$fieldValuesText')";

        $this->conn->exec($sql);
    }
    public function update($table, $fields)
    {
        $id = $fields['id'];
        unset($fields['id']);
        $updateText = '';
        foreach($fields as $fieldName=>$fieldValue){
            $updateText .= "$fieldName='$fieldValue',";
        }
        $updateText = rtrim($updateText, ',');

        $sql = "UPDATE $table SET $updateText WHERE id=$id";
        // Prepare statement
        $stmt =$this->conn->prepare($sql);

        // execute the query
        $stmt->execute();
    }
    public function delete($table, $id){
        $sql = "DELETE FROM $table WHERE id=$id";

  // use exec() because no results are returned
        $this->conn->exec($sql);
    }
}
