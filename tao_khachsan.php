<?php 
	function taoKhachSan($tenkhachsan){
		$ten = "ZKS_".$tenkhachsan;
		mkdir($ten);
		$index = fopen($ten."/index.php", "w") or die("Unable to open file!");
		$txt = "Xin Chao Bao Nguyen";
		fwrite($index, $txt);
		fclose($index);
		$hotro = fopen($ten."/hotro.php", "w") or die("Unable to open file!");
		$txt = "Xin Chao Bao Nguyen";
		fwrite($hotro, $txt);
		fclose($hotro);
	}
?>