اگر بر روی هر یک از کلاس ها اشاره گر ماوس را ببریم و کلید ctrl را بزنیم اشاره گر به صورت دست شده و میتوان وارد فایل کلاس مورد نظر مثل PDO شد.اگر وارد فایل کلاس PDO بشویم میبینیم که متد سازنده اش 4 آرگومان dsn,username,password,options رو دارد. پس دستور زیر این 4 آرگومان را دارد.
<div dir="ltr">

```php
    $this->connection  = new PDO($dsn,username,password,options[]);
```
<div dir="rtl">
در فایل کلاس PDO یک سری ثابت با نام های param هست .
ثابت‌های PARAM_* در PDO برای تعیین نوع داده‌ها هنگام استفاده از bindParam() و bindValue() ضروری هستند تا از مشکلات مربوط به نوع داده در پایگاه داده جلوگیری شود.

# PDO::FETCH_ASSOC
این دستور شیوه دریافت داده ها از پایگاه داده را با استفاده از PDO مشخص میکند.هنگامی که از FETCH_ASSOC استفاده میکنیم یعنی داده های بازیابی شده به صورت یک آرایه انجمنی بازگردانده میشود که کلیدهای آن نام ستون های جدول هست.
<div dir="ltr">

```php
    <?php
        // اتصال به دیتابیس
        $pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
        
        // آماده‌سازی و اجرای کوئری
        $stmt = $pdo->query("SELECT id, name, email FROM users");
        
        // دریافت داده‌ها به‌صورت آرایه انجمنی
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        print_r($rows);
?>

```
<div dir="rtl">
خروجی مثال بال به صورت زیر هست :
<div dir="ltr">

```php
Array (
    [0] => Array ( [id] => 1, [name] => "Ali", [email] => "ali@example.com" )
    [1] => Array ( [id] => 2, [name] => "Sara", [email] => "sara@example.com" )
)

```
<div dir="rtl">


تفاوت PDO::FETCH_ASSOC با PDO::FETCH_BOTH و PDO::FETCH_OBJ:
<hr>
PDO::FETCH_ASSOC → فقط آرایه انجمنی برمی‌گرداند (کلیدها برابر با نام ستون‌ها).
<hr>
PDO::FETCH_BOTH → هم آرایه انجمنی و هم عددی برمی‌گرداند.(مقدار پیش فرض)
<hr>
PDO::FETCH_OBJ → خروجی را به‌صورت یک شیء برمی‌گرداند.
<hr>
 
تغییر مقدار پیش‌فرض:  
<hr>
اگر بخواهید مقدار پیش‌فرض fetch() را تغییر دهید، می‌توانید هنگام ایجاد PDO، گزینه ATTR_DEFAULT_FETCH_MODE را تنظیم کنید:

<div dir="ltr">

```php
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
```
<div dir="rtl">
اکنون تمام fetch()ها بدون نیاز به مشخص کردن PDO::FETCH_ASSOC، خروجی را به‌صورت آرایه انجمنی برمی‌گردانند.
<hr>
در کلاس database  یک آرایه با نام config تعریف کرده و مقادیر dsn را درون آن قرار میدهیم.
سپس مقدار dsn را به صورت زیر تغییر میدهیم.
<div dir="ltr">

```php
    $config = [
              "host" => "localhost",
              "port" => 3306,
              "dbname" => "mydb1",
              "username" => "root",
              "charset" => "utf8mb4"
            ];
    $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};port={$config['port']};charset={$config['charset']}";
```