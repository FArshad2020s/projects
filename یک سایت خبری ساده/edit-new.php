<?php
if(isset($_GET['id'],$_GET['title'],$_GET['writer'],$_GET['new_text'])){
$id=$_GET['id'];
$title=$_GET['title'];
$writer=$_GET['writer'];
$new_text=$_GET['new_text'];}
else{exit("شما با یک خطا رو به رو شده اید");}
?>
<html dir="rtl">
	<head>
		<meta charset="utf8">
		<title>ویرایش خبر</title>
	</head>
	<body>
		<form action="save-edit.php" method="post">
			<input type="hidden" name="id" value=<?php echo "$id" ;?>>
			عنوان خبر: <input type="text" name="title" value="<?php echo $title;?>"><br>
			<textarea rows=33 cols=165 name="new_text"><?php echo $new_text ;?></textarea><br><br>
			نام خبرنگار: <input type="text" value="<?php echo $writer;?>" name="writer">
			<input type="submit" value="ویرایش کن!">
		</form>
	</body>
</html>
