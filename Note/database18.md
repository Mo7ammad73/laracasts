در ادامه آموزش کار با پایگاه داده در این بخش میخواهیم کد قبلی را سازماندهی کنیم.
یک کلاس تعریف کرده و بسته به بخش های مورد نیاز برایش متد و مشخصه ایجاد میکنیم.
مثلا یک بخش برای اتصال یک بخش برای اجرای sqlکد یک بخش برای واکشی و ... .
<div dir="ltr">

```php
class Database {
    public $connection;//ایجاد مشخصه اتصال
    public function __construct(){//متد سازنده که منبع داده و اطلاعات مربوظ به آن را مشخص کرده ویک شی pdo ایجاد کرده و آن منبع داده را بهش میدهیم.
        $dsn = "mysql:host=localhost;port=3306;dbname=mydb1;charset=utf8mb4";
        $this->connection = new PDO($dsn , 'root','');//منبع داده - نام کاربری - پسوورد
    }
    public function query($query)//متد query برای اجرای کدهای sql
    {

        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }

}
$pd = new Database();
$post = $pd->query("select * from tb2");
show_print($post);

```