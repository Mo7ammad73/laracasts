<?php
    $books = [
        [
            "name" => "english" ,
            "author" => "a" ,
            "purchaseurl" => "https://google.com"
        ],
        [
            "name" => "web" ,
            "author" => "b" ,
            "purchaseurl" => "https://bing.com"
        ],
        [
            "name" => "css" ,
            "author" => "a" ,
            "purchaseurl" => "https://w3school.com"
        ]
    ];
    function filter($items ,$fn){
        $filtereditem = [];
        foreach($items as $item) {
            if ($fn($item)){
                $filtereditem[] = $item ;
            }
        }
        return $filtereditem;
    }
    $filteredbook = filter($books,function ($book) {
        return $book['name'] == "web";
    });
    require "index.partials.php";
?>
