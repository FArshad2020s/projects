<?php
$fname=$_GET['fname'];
$lname=$_GET['lname'];

function save(){
	global $fname,$lname;
	$connect=mysqli_connect("localhost","root","","names");
	mysqli_query($connect,"set charecter set utf8");
	$sql_code="insert into information values(null,'$fname','$lname')";
	$resulte=mysqli_query($connect,$sql_code);
	if ($resulte===false)
		echo "information not saved";
	
}
save();
header("Location:new1.php");
?>