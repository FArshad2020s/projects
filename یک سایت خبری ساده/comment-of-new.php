<?php
$id_of_new=$_GET['id_of_new'];
$connect=mysqli_connect("localhost","root","","news");
$sql="select comment from comments where id_of_new=$id_of_new";
$resulte=mysqli_query($connect,$sql);
while($comment=mysqli_fetch_array($resulte)){
	echo "***".$comment['comment']."<br><br><br>";
}
?><br><br><br>
<a href="news.php">بازگشت به صفحه اصلی</a>