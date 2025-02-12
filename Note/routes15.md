<div dir="rtl">

در این بخش یک پوشه با نام controller ایجاد کرده و سه فایل about-contact را درون آن میریزیم. حال محتویات این سه فایل را تغییر داده و بعد آن فایل index ریشه رو هم تغییر میدهیم

<div dir="ltr">

### about.php or contact.php

```html
    <?php
        require_once "Code/views/partials/function.php";
        $heading = "About or Contact";
        require_once "Code/views/about.view.php or contact.view.php";

```
### index.php

```html
<?php
        require_once "Code/views/partials/function.php";
        $heading = "Home";
        $url = $_SERVER['REQUEST_URI'];
        if ($url == "/") {
            require_once "controller/index.view.php";
        }else if ($url == "/about"){
           require_once "controller/about.php";
        }elseif ($url == "/contact"){
           require_once "controller/contact.php";
       }
```
### nav.php

```html
<a href="/" class="rounded-md <?php echo (activePage("/")) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ; ?>   px-3 py-2 text-sm font-medium " aria-current="page">Home</a>
<a href="/about" class="rounded-md <?php echo (activePage("about.php")) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ; ?>   px-3 py-2 text-sm font-medium ">About</a>
<a href="/contact" class="rounded-md <?php  echo (activePage("contact.php")) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ; ?> px-3 py-2 text-sm font-medium ">Contact</a>
```
<div dir="rtl">
در فایل nva  اگر دقت کرده باشید مقدار  href را تغییر دادیم یعنی اگر کاربر بعد آدرس سایت /about بزند صفحه about باز شود قبلا .php  را هم باید میزد.

## routes[]آرایه
کد فایل index.php را تغییر میدهیم یک آرایه تعریف کرده و مقادیر آدرس صفحه را درون آن ریخته سپس با یک شرط و تابع array_key_exists عملیات require_once فایل های پوشه controller را انجام میدهیم. 
### array_key_exists(key,array)تابع
این تابع یک مقدار به عنوان کلید برای جستجو و یک آرایه که محل جستجو کلید مورد نظر هست را دریافت میکند.

<div dir="ltr">

```html
<?php
    require_once "Code/views/partials/function.php";
    $heading = "Home";
    $url = $_SERVER['REQUEST_URI'];
    $routes =[
                "/" => "controller/index.view.php" ,
                "/about" => "controller/about.php" ,
                "/contact" => "controller/contact.php" ,
            ];
            if(array_key_exists($url, $routes)) {
                require $routes[$url];
            }

```
<div dir="rtl">
حالا اگر بعد آدرس  مثلا /about بزنیم وارد صفحه about  میشویم اما هرچیزی غیر مقادیر آرایه ما رو با یک صفحه خالی روبرو میکند برای مدیریت این قضیه از تابع http_response_code(کد مورد نظر که اینجا 404 هست) استفاده میکنیم پس شرط بالا رو به صورت زیر تغییر میدهیم

<div dir="ltr">

```php
if(array_key_exists($url, $routes)) {
            require $routes[$url];
}else {
      http_response_code(404);
      echo "404 Not Found";
      die();
        }
```
<div dir="rtl">
در کد بالا درصورتی که صفحه ای پیدا نشود کد 404 فرستاده شده و پیغامی نمایش داده میشود. اما یه روش حرفه ای تر اینست که یک صفحه یا فایل با نام 404.php ساخته و درون آن علاوه بر پیام و ظاهرش یه لینک به صفحه اصلی "/" بگذاریم که برای اینکار به جای پیغام یک require_once میزنیم.

<div dir="ltr">

```php
if(array_key_exists($url, $routes)) {
            require $routes[$url];
}else {
            http_response_code(404);
            require_once "Code/views/404.php";;
            die();
        }
```
## 404.php in  directory Code/views

```html
<body>

<?php
    echo '<h1>404 Not Found</h1>';
    echo "<a href='/'>Back to home</a>";
?>

</body>
```
<div dir="rtl">
میتوان برای عملیات پیدا نشدن صفحه یک تابع با نام abort نوشت و با آن این موضوع را حل کرد.

<div dir="ltr">

```php
if(array_key_exists($url, $routes)) {
            require $routes[$url];
        }else {
            abort();
        }
        function abort(){
            http_response_code(404);
            require_once "Code/views/404.php";;
            die();
        }
```
<div dir="rtl">
حتی میتوان این تابع را بهصورت کلی تعریف کرد تا تمام responsescodeها بررسی بشه پس این تابع را به شکلدیگری تعریف میکنم

<div dir="ltr">

```php
        function abort($code = 404) {
            http_response_code($code);
            require_once "Code/views/{$code}.php";;
            die();
        }
```
<div dir="rtl"> 
حالا یک فایل router.php ایجاد کرده و این عملیات ها را داخل آن میریزیم فقط میتوان برای این کارها هم تابع تعریف کرد که کدش را داخل فایل router.php نوشتم

## محتویات فایل router.php 

<div dir="ltr">

```php
<?php
$url = $_SERVER['REQUEST_URI'];
//        if ($url == "/") {
//            require_once "controller/index.view.php";
//        }else if ($url == "/about"){
//            require_once "controller/about.php";
//        }elseif ($url == "/contact"){
//            require_once "controller/contact.php";
//        }

$routes =[
    "/" => "controller/index.php" ,
    "/about" => "controller/about.php" ,
    "/contact" => "controller/contact.php" ,
];
function routeTocontroller($url,$routes){
    if(array_key_exists($url, $routes)) {
        require $routes[$url];
    }else {
        abort(404);
    }

}
function abort($code = 404) {
    http_response_code($code);
    require_once "Code/views/{$code}.php";;
    die();
}
routeTocontroller($url,$routes);

```
<div dir="rtl">
تابع routeTocontroller یک مسیر و یک آرایه دریافت میکند اگر مسیر در آرایه موجود بود یک require_once به فایلی با نام آرایه داده شده که کلیدش مسیر داده شده هست میزند.