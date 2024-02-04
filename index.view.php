<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Episode9</title>
    </head>
    <body>

        <ul>
            <?php foreach ($filteredbook as $book) {
                echo "<li>" . $book['name'] . "</li>";
            }
            ?>

        </ul>

    </body>
</html>
