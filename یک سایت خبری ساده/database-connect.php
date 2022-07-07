<?php
try{
$dsn="mysql:host=localhost;dbname=news";
$connect=new PDO($dsn,"root","");
return $connect ;}
catch(PDOException){
	echo "خطا در اتصال به دیتابیس";
}
?>