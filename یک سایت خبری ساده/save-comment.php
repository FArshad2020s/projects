<?php
$id_of_new=$_POST['id_of_new'];
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$connect=mysqli_connect("localhost","root","","news");
$sql="insert into comments values('$id_of_new','$comment','$full_name','$email')";
$resulte=mysqli_query($connect,$sql);
echo "نظر شما با موفقیت ثبت شد";
?><br><br>
<a href="news.php">بازگشت به صفحه اصلی<a>