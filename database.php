<?php
	function connectDatabase()
	{
			$conn= mysql_connect('localhost','khach_san','khach_san') or die('Not Connect');
			mysql_select_db('khach_san',$conn);
			return $conn;
	}
	
	session_start();
	function get_user($user,$pass){
		$admin_user = "ZKS_".$user."/index.php";
		$info_user = "ZKS_".$user."/hotro.php";
		$conn = connectDatabase();
		$sql = mysql_query("SELECT * FROM dangkyphanmem WHERE email='$user'AND mat_khau='$pass'");
		if(mysql_num_rows($sql)>0){
			
			$row = mysql_fetch_array($sql);
			$_SESSION['currEmail'] = $row['email'];
			
			if($row['role']==1&&$row['kichhoat']==1){
				$_SESSION['currAdmin']=$row['role'];
				header("location:smarthotel/admin.php");
			}
			else if($row['role']==2&&$row['kichhoat']==1){
				header("location:".$admin_user);
			}
			else if($row['role']==0&&$row['kichhoat']==0){
				header("location:".$info_user);
			}
			else{
				header("location:info.php");
			}
		}
		else {
			echo "<script>alert('Lỗi Đăng Nhập!', 5000, 'rounded')</script>";
		}
	}
?>