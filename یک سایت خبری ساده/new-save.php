<?php
$title=$_POST['title'];
$writer=$_POST['writer'];
$new=$_POST['new'];
$connect=mysqli_connect("localhost","root","","news");
$sql="insert into news (new_title,new,writer_name) values('$title','$new','$writer')";
mysqli_set_charset($connect,"utf8");
mysqli_query($connect,$sql);
echo "!خبر با موفقیت در دیتابیس به ثبت رسید";
?>
<br><br><a href="news.php">بازگشت به صفحه اصلی</a>