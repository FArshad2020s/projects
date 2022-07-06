<?php
$id=$_POST['id'];
$title=$_POST['title'];
$writer=$_POST['writer'];
$new_text=$_POST['new_text'];
$connect=mysqli_connect("localhost","root","","news");
echo $id."<br>" ;
$sql="update news set new_title='$title',writer_name='$writer',new='$new_text' where id='$id'";
$resulte=mysqli_query($connect,$sql);
echo "خبر با موفقیت ویرایش شد.";
?><br><br><a href="news.php">بازگشت به صفحه اصلی</a>