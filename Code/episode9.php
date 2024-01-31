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
    $FilterByAuthor = function ($books , $author){
        $filteredbook = [];
        foreach($books as $book) {
            if ($book['author'] == $author){
                $filteredbook[] = $book ;
            }
        }
        return $filteredbook;
    };
    $filteredbook=$FilterByAuthor($books,'a')
?>
<ul>
    <?php foreach ($filteredbook as $book) {
        echo "<li>" . $book['name'] . "</li>";
    }
    ?>

</ul>
</body>
</html>
