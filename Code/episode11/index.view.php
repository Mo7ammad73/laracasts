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
<h1><?= $business["name"]; ?></h1>
<ul>
    <?php foreach ($business["categories"] as $category) : ?>
        <li><?= $category  ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
