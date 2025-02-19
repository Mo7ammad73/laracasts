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