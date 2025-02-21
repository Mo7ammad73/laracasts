برای مقدار دادن به متد get باید بعد از آدرس از &id=2  یا هر مقدار دیگه ای در url استفاده کرد در مثال زیر اگر id  را در url  بدهیم مقدارش در متغیر مربوطه ریخته میشه ولی اگر ندهیم مقدار صفر در نظر میگیرد .ضمنا تابع isset بررسی میکند که ورودی اش مقدار دارد یا نه.
<div dir="ltr">

```php
isset($_GET["id"]) ? $id=$_GET["id"] : $id=0;
$q ="select * from tb2 where id=$id";
echo $q;
```
<div dir="rtl">
اما این نوع کدنویسی یک سری مشکلات دارد که باید کنترل شود مثلا اگر کاربر id=1 or 1=1 را بنویسه یک شرط همیشه فعال میشه چون 1=1  همیشه صحیح هست .
یا اگر کاربر drop table t2 را بنویسد عملا جدول هم ساختار و هم داده هاش پاک میشه truncate table 2 فقط داده ها را حذف میکند و اگر هم delete from t2 داده های جدول پاک میشه ولی با rollback امکان بازیابی هست.

#### در کل این روش نا امن هست و باید از متغیرهای بایند شده که با : مشخص میشوند استفاده کرد یعنی کوئری را جدا و متغیر بایند شده را جدا به پایگاه داده ارسال کرد در واقع کوئری را متد prepare() جدا و مقدار متغیر بایند شده را متد execute() جدا ارسال میکنه فقط در فایل کلاس database در متد query باید علاوه بر آرگومان query یک آرگومان دیگر برای دریافت متغیر بایند شده باید تعریف کرد که باید به صورت آرایه باشه وگرنه خطا میده چون متد execute  اگر یک مقدار بفرست خطا میده و باید به صورت آرایه باشه

<div dir="ltr">

### database.php
```php
public function query($query,$params = [])//آرگومان دوم یک آرایه از متغیرهای بایندشده هست که با : یا ؟ بهش میفرستن  و اون مقدار رو به پایگاه داده جدا از کوئری میفرسته
 {
     $statement = $this->connection->prepare($query);
     $statement->execute($params);
     return $statement;
 }
```
### index.php
```php

$id = $_GET['id'] ?? 0;// اگر مقدار نداشت مقدارش را صفر در نظر بگیر
$q ="select * from tb2 where id=:id ";

echo $q;
//$post = $db->query($q,[':id'=> $id])->fetchAll();
$post = $db->query($q,['id'=> $id])->fetchAll();
//for example url=example.com?id=3 
show_print($post);
```
<div dir="rtl">

**نکته:** وقتی به کد sql میخواهیم بفهمونیم که از متغیر بایند شده استفاده میکنیم از :نام متغیر بایند شده یا ؟ استفاده میکنیم به صورت زیر.
فقط وقتی از ؟ استفاده میکنیم دیگه نیاز نیست نامش رو هم به متد execute  بفرستیم.
<div dir="ltr">

```php
$query = "SELECT * FROM users WHERE age > :age AND city = :city";
$params = ['age' => 25, 'city' => 'Tehran'];
$users = $db->query($query, $params)->fetchAll();

$q ="select * from tb2 where id=:id ";
$post = $db->query($q,['id'=> $id])->fetchAll();//هم مقدار هم نام رو میفرسته




$query = "SELECT * FROM users WHERE age > ? AND city = ?";
$users = $db->query($query, [25, 'Tehran'])->fetchAll();//فقط مقدار رو میفرسته

```
<div dir="rtl">

چرا $params لازمه؟
توی PDO، وقتی از متغیرهای بایند شده (:id, ?) استفاده می‌کنی، باید مقدارشون رو با execute() بفرستی.

🔹 اگه execute() رو بدون آرگومان فراخوانی کنی، مقدارهای بایند شده مقدار نمی‌گیرن و کد خطا می‌ده!