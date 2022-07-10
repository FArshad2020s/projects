<?php
if(isset($_GET['id'])){$id=$_GET['id'];}
else{exit("خبر حذف نشد.شما با یک خطای غیر منتظره رو به رو شدید.");}
include "database-connect.php";
$sql="delete from news where id=$id";
$resulte=$connect->query($sql);
echo "خبر با موفقیت از دیتابیس حذف شد"."<br><br>";
?>
<a href="news.php">بازگشت به صفحه اصلی</a>