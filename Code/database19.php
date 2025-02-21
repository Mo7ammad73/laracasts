<?php
    require_once "../database.php";
    $config = require_once "../config.php";
    $db = new Database($config['database']);
    $post = $db->query("SELECT * FROM tb2")->fetchAll(PDO::FETCH_ASSOC);;
    echo "<pre>";
        print_r($post);
    echo "</pre>";

    foreach ($post as $key => $value){
        echo $value['title']."<br>";
    }