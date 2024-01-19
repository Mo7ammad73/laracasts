<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo "hello world";
            echo "<br>";
            // charachter . for concat string
            echo "hello" . " " . "world" ;//true
            //concat variable with string
            $greeting = "hello" ;
            echo "<br>";
            echo $greeting . " " . "world" ;
            //use variable in string with " "
            echo "<br>";
            echo " $greeting world ";
        ?>
    </h1>
</body>
</html>
