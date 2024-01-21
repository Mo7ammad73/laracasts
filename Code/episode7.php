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
    ]
];
?>


<ul>

    <?php foreach($books as $book) : ?>

        <li>

            <a href="<?= $book['purchaseurl']; ?>">
                <?= $book['name']; ?>
            </a>

        </li>
    <?php endforeach; ?>

</ul>
</body>
</html>