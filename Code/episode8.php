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

        function FilterByAuthor($books){
            $FilteredBooks = [] ;
            foreach ($books as $book) {

                if ($book['author'] == 'ahmadi') {
                    $FilteredBooks[] = $book ;
                }
            }
            return $FilteredBooks;
        }
    ?>



    <ul>

        <?php foreach( FilterByAuthor($books) as $book) : ?>

            <li>
                <?php if($book['author'] == "ahmadi")  : ?>
                    <a href="<?= $book['purchaseurl']; ?>">
                        <?= $book['name']; ?>
                    </a>
                <?php endif ; ?>
            </li>
        <?php endforeach; ?>

    </ul>
</body>
</html>