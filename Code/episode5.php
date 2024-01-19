<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name="dark matter";
        $read=true;
        if($read){
            $message="you have read $name";
        }else{
            $message="you have not read $name";
        }
    ?>
    <h1>
        <?php echo $message;?>
    </h1>
</body>
</html>
