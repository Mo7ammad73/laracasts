<div dir="rtl">
در فایل index.php یک آرایه تعریف کرده تا محتوای آن را در فایل index.view.php نمایش دهیم

### محتوای فایل index.php

<div dir="ltr">

```php

    <?php
    $business = [
        "name" => "laracasts",
        "cost" => 15,
        "categories" => [
            "php",
            "laravel",
            "javascript"
        ]
    ];

   require_once "index.view.php";

```
<div dir="rtl">

### محتوای فایل index.view.php 
```html
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


```
