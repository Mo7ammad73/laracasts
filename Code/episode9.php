<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Episode9</title>
</head>
<body>
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
?>
<ul>
    <?php foreach ($filteredbook as $book) {
        echo "<li>" . $book['name'] . "</li>";
    }
    ?>

</ul>
</body>
</html>
