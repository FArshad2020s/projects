<?php
$title=$_POST['title'];
$writer=$_POST['writer'];
$new=$_POST['new'];
include "database-connect.php";
$sql="insert into news (new_title,new,writer_name) values('$title','$new','$writer')";
$connect->query($sql);
echo "!خبر با موفقیت در دیتابیس به ثبت رسید";
?>
<br><br><a href="news.php">بازگشت به صفحه اصلی</a>