<?php
require('../database.php');
	if(!isset($_SESSION['currEmail'])){
		header("location:../login.php");
	} 
	else {
		if(!isset($_SESSION['currAdmin'])){
			header("location:../index.php");
		}
		else{}
	}
 $conn = connectDatabase();
 $sql="delete from dangkyphanmem where email='".$_GET['id']."'";
              mysql_query($sql);
			  include'admin.php';
?>