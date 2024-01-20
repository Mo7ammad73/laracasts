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
        <?php
            foreach($books as $book){
                echo "<li>" . $book . "</li>";
            }
        ?>
    </ul>
</body>
</html>