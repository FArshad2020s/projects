<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="new.php">
			first name:<input type="text" name="fname"><br><br>
			last name: <input type="text" name="lname">
			
			<input type="submit" value="Save"><br><br><br>
	</body>
</html>
<?php
function get_info(){
	$connect=mysqli_connect("localhost","root","","names");
	mysqli_query($connect,"set charecter set utf8");
	$sql_code="select * from information";
	$resulte=mysqli_query($connect,$sql_code);
	while($row=mysqli_fetch_array($resulte)){
		?>first name: <?php echo $row["first_name"];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
		?>last name: <?php echo $row["last_name"]; ?><hr><?php
	}
}	
get_info();
?>
