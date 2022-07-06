<?php
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","news");
$sql="delete from news where id=$id";
$resulte=mysqli_query($connect,$sql);
echo "خبر با موفقیت از دیتابیس حذف شد"."<br><br>";
?>
<a href="news.php">بازگشت به صفحه اصلی</a>