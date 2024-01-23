<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foreach</title>
</head>
<body>
    <?php
        $books = [
            [
                "name" => "english sentence",
                "author" => "rafiei",
                "purchaseurl" => "https://google.com"
            ],
            [
                "name" => "web design",
                "author" => "ahmadi",
                "purchaseurl" => "https://bing.com"
            ],
            [
                "name" => "reading",
                "author" => "ahmadi",
                "purchaseurl" => "https://gmail.com"
            ]
        ];

        function FilterByAuthor($books , $author){
            $FilteredBooks = [] ;
            foreach ($books as $book) {

                if ($book['author'] == $author) {
                    $FilteredBooks[] = $book ;
                }
            }
            return $FilteredBooks;
        }
    ?>



    <ul>

        <?php foreach( FilterByAuthor($books ,'ahmadi') as $book) : ?>

            <li>
                    <a href="<?= $book['purchaseurl']; ?>">
                        <?= $book['name']; ?>
                    </a>
            </li>
        <?php endforeach; ?>

    </ul>
</body>
</html>