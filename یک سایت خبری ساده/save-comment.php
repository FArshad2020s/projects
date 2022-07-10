<?php
if(isset($_POST['id_of_new'],$_POST['full_name'],$_POST['email'],$_POST['comment'])){
$id_of_new=$_POST['id_of_new'];
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$comment=$_POST['comment'];}
else{exit("نظر شما ثبت نشد.یک مشکلی وجود دارد");}
include "database-connect.php";
$sql="insert into comments values('$id_of_new','$comment','$full_name','$email')";
$resulte=$connect->query($sql);
echo "نظر شما با موفقیت ثبت شد";
?><br><br>
<a href="news.php">بازگشت به صفحه اصلی<a>