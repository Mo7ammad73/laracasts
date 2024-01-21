<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foreach</title>
</head>
<body>
<?php
$books=[
    "english",
    "programming",
    "web"
];
?>
<ul>
    <?php foreach($books as $book) :?>
        <li><?php echo $book; ?></li>
    <?php endforeach ; ?>
</ul>
</body>
</html>