<?php
    class Database {
    public $connection;
    public function __construct() {
    $dsn = "mysql:host=localhost;dbname=mydb1;port=3306;charset=utf8mb4";
    $this->connection  = new PDO($dsn,"root","");
    }
    public function query($query) {
    $statement = $this->connection->prepare($query);
    $statement->execute();
    return $statement;
    }
    }