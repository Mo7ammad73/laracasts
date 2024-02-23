<div class="body" dir="rtl">

یک پوشه view ایجاد کرده و 3 فایل index.view.php - about.view.php و contact.view.php  را درون آن قرار میدهیم .
    حال به هرکدام از فایل های index.php - contact.php  و  about.php رفته و آدرس  require را تغییر میدهیم.
    این 3 فایل در پوشه ی page-links قرار دارند.
    
<div dir="ltr">
    
    require ("../view/index.php or about.php or contact.php");

<div dir="rtl">

هم چنین در قسمت منوها در فایل های view هم باید آدرس لینک ها را تغییر داد .

<div dir="ltr">

```html

<a href="../page_links" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
<a href="../page_links/about.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
<a href="../page_links/contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact</a>

```
<div dir="rtl">

درون پوشه view یک پوشه partials ایجاد کرده تا از این به بعد هر بخش از صفحه را در یک فایل جداگانه ریخته و در این پوشه قرار دهیم.
بعد از کلاس h-full و  main-h-full یک تگ nav  وجود دارد از این خط تا اول خط header را کپی کرده و در پوشه ی partials یک فایل nav.php ریخته و درون آن قرار میدهیم.
حال در هرکدام از فایل های view به جای تکه کد nav  کد زیر را مینویسیم:

<div dir="ltr">

<?php require ("nav.php"); ?>

<div dir="rtl">

قبل تگ nav هرچی بوده را کپی کرده و در فایل head.php قرار میدهیم.
3تیکه کد </div> </body> </html> را کپی کرده و در فایل footer.php 
تگ header را کپی و در فایل banner.php قرار میدهیم.
تگ main  را کپی و در فایل content.php قرار میدهیم.
در فایل های index.php , contact.php , about.php یک متغییر به نام $heading تعریف کرده و هرجا لازم بود از نام داینامیک استفاده کنیم از این متغییر استفاده میکنیم.
به صورت زیر :

<div dir="ltr">
<?php echo $heading ; ?>

