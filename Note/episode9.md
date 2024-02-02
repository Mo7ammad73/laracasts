<div class="body" dir="rtl">

<div dir="ltr">

```php

    function FilterByAuthor($books , $author){
            $filteredbook = [];
            foreach($books as $book) {
                if ($book['author'] == $author){
                    $filteredbook[] = $book ;
                }
            }
            return $filteredbook;
        }
        $filteredbook=FilterByAuthor($books,'a')
    
    <ul>
        <?php foreach ($filteredbook as $book) {
            echo "<li>" . $book['name'] . "</li>";
        }
        ?>
    </ul>
```
<div dir="rtl">

در مثال بالا خروجی تابع را در آرایه filteredbook ریختیم سپس با حلقه foreach این آرایه را پیمایش کردیم. قبلا خود فراخوانی تابع را در ابتدای حلقه foreach گذاشته و پیمایش میکردیم.

#### تابع ناشناس(Anonymous Function)
در تعریف این تابع کل تابع را در یک متغیر ریخته و در انتهای تعریف تابع سمی کالن گذاشته و برای فراخوانی تابع هم از نام متغییر استفاده میکنیم.

<div dir="ltr">

``` php
$variable-name = function( ,..., ) {

};
$variable-name( ,..., )// for call function
```

<div dir="rtl">

ایجاد تابع فیلتر که به صورت کلی تعریف شده و میتوان هرچیزی لیست - دیتا - آیتم و ... را بهش داد و یک مقدار و کلید را هم داده تا عمل فیلتر را انجام دهد.

<div dir="ltr">

```php
    function filter($items , $key , $value){
            $filtereditem = [];
            foreach($items as $item) {
                if ($item[$key] == $value){
                    $filtereditem[] = $item ;
                }
            }
            return $filtereditem;
        }
     $filteredbook = filter($books,'author','a');
```

<div dir="rtl">
حالا به جای آرگومان های کلید و مقدار میتوان یک تابع را به عنوان آرگومان به تابع داده و از طریق مقدار برگشتی تابع عملیات فیلتر را انجام داد.

<div dir="ltr">

```php
    function filter($items ,$fn){
        $filtereditem = [];
        foreach($items as $item) {
            if ($fn($item)){
                $filtereditem[] = $item ;
            }
        }
        return $filtereditem;
    }
    $filteredbook = filter($books,function ($book) {
        return $book['name'] == "web";
    });
    <ul>
        <?php foreach ($filteredbook as $book) {
            echo "<li>" . $book['name'] . "</li>";
        }
        ?>
    
    </ul>
```