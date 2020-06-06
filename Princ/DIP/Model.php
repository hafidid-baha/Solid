<?php
namespace SOLID\DIP;

class Model{
    private $database;

    public function __construct(IDatabase $db){
        $this->database = $db;
    }

    public function save($data){
        $this->database->save($data);
    }
}