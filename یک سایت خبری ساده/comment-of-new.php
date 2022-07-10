<?php
include("database-connect.php");
if(isset($_GET['id_of_new'])){$id_of_new=$_GET['id_of_new'];}
else{exit("شما با یک خطا مواجه شده اید");}

$sql="select comment from comments where id_of_new=$id_of_new";
$resulte=$connect->query($sql);
foreach($resulte as $comment){
	echo "***".$comment['comment']."<br><br><br>";
}
?><br><br><br>
<a href="news.php">بازگشت به صفحه اصلی</a>