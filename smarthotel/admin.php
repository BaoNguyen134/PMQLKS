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
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>QUẢN LÝ KHÁCH SẠN</title>

<!-- CSS -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script src="../js/init.js"></script> 
<script src="../js/materialize.js"></script>
</head>
<body>
<!-- menu -->
<nav class="orange" role="navigation">
  <div class="nav-wrapper" style="margin-left:20px"> <a id="logo-container" href="../index.php" class="brand-logo"><span class="z-depth-5">SmartHotel360</span></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#"><b class="z-depth-3">QUẢN LÝ KHÁCH HÀNG</b></a></li>
      <li>
	  <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
        <a href="login.php"><b class="z-depth-3">ĐĂNG NHẬP</b></a>
      <?php 
		} else {
			echo "<a><b class='z-depth-3'>Xin chào! ".$_SESSION['currEmail']."</b></a>";
			}
	  	?>  
        </li>
      <li>
      <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
      <a href="#"><b class="z-depth-3">ĐĂNG KÝ</b></a>
      <?php 
		} else {
			echo "<a href='../logout.php'><b class='z-depth-3'>THOÁT</b></a>";
			}
	  	?>
      </li>
    </ul>
    <ul id="nav-mobile" class="side-nav orange">
      <li><a href="#"><b class="z-depth-3  white-text">QUẢN LÝ KHÁCH HÀNG</b></a></li>
	  <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
        <a href="login.php"><b class="z-depth-3 white-text">ĐĂNG NHẬP</b></a>
      <?php 
		} else {
			echo "<a><b class='z-depth-3 white-text'>".$_SESSION['currEmail']."</b></a>";
			}
	  	?>  
        </li>
      <li>
      <?php 
		if(!isset($_SESSION['currEmail'])){
		?>
      <a href="#"><b class="z-depth-3">ĐĂNG KÝ</b></a>
      <?php 
		} else {
			echo "<a href='../logout.php'><b class='z-depth-3 white-text'>THOÁT</b></a>";
			}
	  	?>
      </li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a> </div>
</nav>
<!-- end menu --> 
<div align="center" style="margin-bottom: 50px">
  <h5 class="blue-grey-text"><b class="z-depth-3">DANH SÁCH KHÁCH HÀNG</b></h5>
    <table class="highlight z-depth-3" style="width:100%;">
      <tr >
      <th><span class="blue-grey-text">ROLE</span></th>
      <th><span class="blue-grey-text">TT KÍCH HOẠT</span></th>
      <th><span class="blue-grey-text">HỌ TÊN</span></th>
      <th><span class="blue-grey-text">ĐIỆN THOẠI</span></th>
      <th><span class="blue-grey-text">EMAIL</span></th>
      <th><span class="blue-grey-text">TÊN KHÁCH SẠN</span></th>
      <th><span class="blue-grey-text">ĐỊA CHỈ</span></th>
      <th><span class="blue-grey-text">SỐ LƯỢNG PHÒNG</span></th>
    </tr>
	<?php 
		$conn = connectDatabase();
		$sql="SELECT * FROM dangkyphanmem";
		$query=mysql_query($sql);
		if(mysql_num_rows($query) == 0){
			echo "Chua co du lieu";
		}
		else{
			
			while($row=mysql_fetch_array($query)){
				echo 
				"
				<tr class='blue-grey-text'>
				  <th>".$row['role']."</th>
				  <td>".$row['kichhoat']."</td>
				  <td>".$row['ho_ten']."</td>
				  <td>".$row['dien_thoai']."</td>
				  <td>".$row['email']."</td>
				  <td>".$row['ten_khach_san']."</td>
				  <td>".$row['dia_chi']."</td>
				  <td>".$row['so_luong_phong']."</td>
				  <td><button class='btn red'>SỬA</button></td>
				  <td><button class='btn'>XÓA</button></td>
				</tr>
				";
			}
		}
		mysql_close($conn);
	?> 
    </table>
  </div>
</div>