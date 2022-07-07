<html dir="rtl">
<head>
	<meta charset="utf8">
	<title>persian BBC news</title>
</head>
<body>
<a href="new-in.php">افزودن خبر جدید+</a><br><hr>
<?php
include "database-connect.php";
$sql="select * from news";
$resulte=$connect->query($sql);;
foreach($resulte as $new){
	$id = $new['id'];
	$title=$new['new_title'];
	$writer=$new['writer_name'];
	$new_text=$new['new'];
	echo "<b>".$title."</b>";?><br><?php
	echo $new_text;?><br><br><?php
	echo "خبرنگار:".$writer;?>
	<br><br><a href="delete-new.php?id=<?php echo $id ?>" >این خبر را حذف کن</a>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="edit-new.php?title=<?php echo $title ?>
	&writer=<?php echo $writer;?>&new_text=<?php echo $new_text;?>&id=<?php echo $id;?>">
	ویرایش خبر</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="comment-of-new.php?id_of_new=<?php echo $id;?>">کامنت های این خبر</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="add-comment.php?id_of_new=<?php echo $id?>">+افزودن نظر</a>
	<hr>
<?php } ?>
</body>