<?php
	require('../database.php');
	$conn = connectDatabase();
	$sql="delete from dangkyphanmem where email='".$_GET['id']."'";
	mysql_query($sql);
	header("location:admin.php");
?>