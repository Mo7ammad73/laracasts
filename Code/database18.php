<?php


//for show data in Database
//Database class for sql query
//class Database {
//    public $connection;
//    public function __construct(){
//        $dsn = "mysql:host=localhost;port=3306;dbname=mydb1;charset=utf8mb4";
//        $this->connection = new PDO($dsn , 'root','');
//    }
//    public function query($query)
//    {
//
//        $statement = $this->connection->prepare($query);
//        $statement->execute();
//        return $statement->fetchAll();
//    }
//
//}
//$pd = new Database();
//$post = $pd->query("select * from tb2");
//show_print($post);
require_once "database.php";
$db = new Database();
$post = $db->query("SELECT * FROM tb2")->fetchAll(PDO::FETCH_ASSOC);;
show_print($post);


foreach ($post as $key => $value){
    echo $value['title']."<br>";
}