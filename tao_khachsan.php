<?php 
	function taoKhachSan($tenkhachsan){
		$ten = "ZKS_".$tenkhachsan;
		mkdir($ten);
		$index = fopen($ten."/index.php", "w") or die("Unable to open file!");
		$txt = "<?php
	require('../database.php');
	if(!isset('$'_SESSION['currEmail'])){
		header('location:../login.php');
	} 
	else {
		if(!isset('$'_SESSION['currAdmin'])){
			header('location:../index.php');
		}
		else{}
	}
?>\n";
		fwrite($index, $txt);
		fclose($index);
		$hotro = fopen($ten."/hotro.php", "w") or die("Unable to open file!");
		$txt = "Bảo Nguyễn\n";
		fwrite($hotro, $txt);
		fclose($hotro);
	}
?>