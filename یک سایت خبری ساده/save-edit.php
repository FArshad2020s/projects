<?php
$id=$_POST['id'];
$title=$_POST['title'];
$writer=$_POST['writer'];
$new_text=$_POST['new_text'];
include "database-connect.php";
$sql="update news set new_title='$title',writer_name='$writer',new='$new_text' where id='$id'";
$connect->query($sql);
echo "خبر با موفقیت ویرایش شد.";
?><br><br><a href="news.php">بازگشت به صفحه اصلی</a>