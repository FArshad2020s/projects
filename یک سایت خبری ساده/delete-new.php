<?php
$id=$_GET['id'];
include "database-connect.php";
$sql="delete from news where id=$id";
$resulte=$connect->query($sql);
echo "خبر با موفقیت از دیتابیس حذف شد"."<br><br>";
?>
<a href="news.php">بازگشت به صفحه اصلی</a>