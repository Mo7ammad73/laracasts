<!doctype html>
<html lang="en">
<head>
    <title>test</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 50vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>test</h1>
    <?php
        $books = [
            "english",
            "french",
            "spanish",
            "arabic",
        ];
    ?>
    <ul>
        <?php foreach ($books as $book){
                echo "<li> $book </li>";
            }
        ?>
    </ul>
</body>
</html>
