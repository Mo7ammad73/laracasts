### برای ایجاد کلاس و داخلش مشخصه و رفتار به صورت زیر عمل میکنیم
<div dir="ltr">

```php

class Person {
    public $name;// مشخصه نام
    public $age;// مشخصه سن
    public function bb(){//رفتار بی بی
    echo $this->name . " " . $this->age;
    }
}

```
<div dir="rtl">

###  برای استفاده از کلاس تعریف شده به صورت زیر عمل میکنیم

<div dir="ltr">

```php
$p = new Person();
$p->name = "Mohammad";
$p->age = 30;
show_print($p);//تابعی برای نمایش زیبا آرایه و دیگر عناصر تعریف شده
$p->bb();

```

<div dir="rtl">

## متد سازنده __constructor
این یک متد سازنده هست که وقتی نمونه ای از یک شی ایجاد میشود به طور خودکار اجرا میشود معمولا برای مقداردهی اولیه استفاده میشود.

<div dir="ltr">

```php
class MyClass {
    public function __construct() {
        echo "شیء ساخته شد!";
    }
}

$obj = new MyClass(); // هنگام ایجاد شیء، متد __construct اجرا می‌شود.

```
### خروجی
شیء ساخته شد!

<div dir="rtl">
میتوان ورودی هایی را به متد سازنده داد تا مقدار متغیرهای کلاس را در هنگام ایجاد شی داد

```php
class User {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
}

$user1 = new User("علی");
echo $user1->name; // علی

```
<div dir="rtl">
برای تعریف کلاس والد و فرزند از etends به صورت زیر استفاده میکنیم
<div dir="ltr">

```php
class ParentClass {
    public $name = "کلاس پدر";

    public function sayHello() {
        echo "سلام از {$this->name}!";
    }
}

class ChildClass extends ParentClass {
    // این کلاس خودش متدی ندارد ولی متدهای کلاس پدر را به ارث می‌برد
}

$obj = new ChildClass();
$obj->sayHello(); // خروجی: سلام از کلاس پدر!

```
<div dir="rtl">
بازنویسی متدهای کلاس پدر در کلاس فرزند (Method Overriding)
گاهی اوقات نیاز داریم که متدی که از کلاس پدر به ارث برده‌ایم را در کلاس فرزند بازنویسی کنیم.
<div dir="ltr">

```php
class ParentClass {
    public function greet() {
        echo "سلام از کلاس پدر!";
    }
}

class ChildClass extends ParentClass {
    public function greet() {
        echo "سلام از کلاس فرزند!";
    }
}

$obj = new ChildClass();
$obj->greet(); // خروجی: سلام از کلاس فرزند!
//در واقع با نوشتن یک متد سازنده برای فرزند از متد سازنده والد صرف نظرکردیم
```
<div dir="rtl">
فراخوانی متد کلاس پدر در کلاس فرزند (parent::)
اگر بخواهیم علاوه بر متد جدید، متد کلاس پدر هم اجرا شود، از parent:: استفاده می‌کنیم.

```php
class ParentClass {
    public function greet() {
        echo "سلام از کلاس پدر! ";
    }
}

class ChildClass extends ParentClass {
    public function greet() {
        parent::greet(); // صدا زدن متد کلاس پدر
        echo "سلام از کلاس فرزند!";
    }
}

$obj = new ChildClass();
$obj->greet(); // خروجی: سلام از کلاس پدر! سلام از کلاس فرزند!

```
