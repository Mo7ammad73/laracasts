<?php


function show_print($x){
    echo "<pre>";
    print_r($x);
    echo "</pre>";
}

//codes for class
/*
class Person{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
        echo "یا علی";
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function sh(){
        echo $this->name." ".$this->age;
    }
}
class Person2 extends Person{
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
        parent::__construct($name,$age);
        echo "یازهرا";
    }
}
$p=new Person2("m",12);
$p->sh();
*/

//for show data in database
$dsn = "mysql:host=localhost;dbname=mydb1;charset=utf8mb4";
$user = "root";
$password = "";
$p = new PDO($dsn , $user , $password);
$statement = $p->prepare("SELECT * FROM tb2");
$statement->execute();
$post=$statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($post as $key => $value) {
    echo "<li>" . $value['title']."</li> \n";
}
